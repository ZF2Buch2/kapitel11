<?php
/**
 * ZF2 Buch Kapitel 11
 * 
 * Das Buch "Zend Framework 2 - Von den Grundlagen bis zur fertigen Anwendung"
 * von Ralf Eggert ist im Addison-Wesley Verlag erschienen. 
 * ISBN 978-3-8273-2994-3
 * 
 * @package    Application
 * @author     Ralf Eggert <r.eggert@travello.de>
 * @copyright  Alle Listings sind urheberrechtlich geschützt!
 * @link       http://www.zendframeworkbuch.de/ und http://www.awl.de/2994
 */

/**
 * namespace definition and usage
 */
namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

/**
 * Listing controller
 * 
 * Shows and executes the listings
 * 
 * @package    Application
 */
class ListingController extends AbstractActionController
{
    /**
     * Redirects to homepage
     */
    public function indexAction()
    {
        return $this->redirect()->toRoute('home');
    }
    
    /**
     * Show listing 11.01
     */
    public function listing1101Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 11.02
     */
    public function listing1102Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 11.03
     */
    public function listing1103Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 11.04
     */
    public function listing1104Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 11.05
     */
    public function listing1105Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 11.06
     */
    public function listing1106Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 11.07
     */
    public function listing1107Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 11.08
     */
    public function listing1108Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 11.09
     */
    public function listing1109Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 11.10
     */
    public function listing1110Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 11.11
     */
    public function listing1111Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 11.12
     */
    public function listing1112Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 11.13
     */
    public function listing1113Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 11.14
     */
    public function listing1114Action()
    {
        return new ViewModel();
    }

    /**
     * Show listing 11.15
     */
    public function listing1115Action()
    {
        return new ViewModel();
    }

    /**
     * Show listing 11.16
     */
    public function listing1116Action()
    {
        return new ViewModel();
    }

    /**
     * Show listing 11.17
     */
    public function listing1117Action()
    {
        return new ViewModel();
    }

    /**
     * Show listing 11.18
     */
    public function listing1118Action()
    {
        return new ViewModel();
    }

    /**
     * Show listing 11.19
     */
    public function listing1119Action()
    {
        return new ViewModel();
    }

    /**
     * Show listing 11.20
     */
    public function listing1120Action()
    {
        return new ViewModel();
    }

    /**
     * Show listing 11.21
     */
    public function listing1121Action()
    {
        return new ViewModel();
    }

    /**
     * Show listing 11.22
     */
    public function listing1122Action()
    {
        return new ViewModel();
    }

    /**
     * Show listing 11.23
     */
    public function listing1123Action()
    {
        return new ViewModel();
    }

    /**
     * Show listing 11.24
     */
    public function listing1124Action()
    {
        return new ViewModel();
    }

    /**
     * Show listing 11.25
     */
    public function listing1125Action()
    {
        return new ViewModel();
    }
}
