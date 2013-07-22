<?php
/**
 * ZF2 Buch Kapitel 11
 * 
 * Das Buch "Zend Framework 2 - Das Praxisbuch"
 * von Ralf Eggert ist im Galileo-Computing Verlag erschienen. 
 * ISBN 978-3-8362-2610-3
 * 
 * @package    Pizza
 * @author     Ralf Eggert <r.eggert@travello.de>
 * @copyright  Alle Listings sind urheberrechtlich geschützt!
 * @link       http://www.zendframeworkbuch.de/ und http://www.galileocomputing.de/3460
 */

/**
 * namespace definition and usage
 */
namespace Pizza\Controller;

use Zend\Db\Adapter\Adapter;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\Paginator\Paginator;
use Zend\Paginator\Adapter\ArrayAdapter;
use Zend\View\Model\ViewModel;

/**
 * Toppings controller
 * 
 * Handles the pages for the Pizza module
 * 
 * @package    Pizza
 */
class ToppingsController extends AbstractActionController
{
    /**
     * Handle pizza intro page
     */
    public function indexAction()
    {
        $page = $this->params()->fromRoute('page');
        
        $db = new Adapter(array(
            'driver'   => 'Pdo_Sqlite',
            'database' => LUIGI_ROOT . '/data/db/pizza.sqlite3.db',
        ));
        
        $result = $db->query('SELECT * FROM toppings;', Adapter::QUERY_MODE_EXECUTE);
        
        $paginator = new Paginator(new ArrayAdapter($result->toArray()));
        $paginator->setCurrentPageNumber($page);
        $paginator->setItemCountPerPage(6);
        $paginator->setPageRange(5);
        
        return new ViewModel(array(
            'paginator' => $paginator,
        ));
    }
}
