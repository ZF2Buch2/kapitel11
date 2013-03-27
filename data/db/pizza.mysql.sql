SET FOREIGN_KEY_CHECKS=0;
SET AUTOCOMMIT=0;
START TRANSACTION;

DROP TABLE IF EXISTS `toppings`;
CREATE TABLE IF NOT EXISTS `toppings` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) DEFAULT NULL,
  `costs` decimal(4,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=42 ;

INSERT INTO `toppings` (`id`, `name`, `costs`) VALUES
(1, 'Tomatenpampe', '0.50'),
(2, 'Käse', '0.50'),
(3, 'Salami', '1.00'),
(4, 'Schinken', '1.00'),
(5, 'Ananas', '1.50'),
(6, 'Champignons', '1.00'),
(7, 'Melone', '1.50'),
(8, 'Zwiebeln', '0.50'),
(9, 'Thunfisch', '2.00'),
(10, 'Spinat', '1.50'),
(11, 'Peperoni', '1.00'),
(12, 'Feta', '1.50'),
(13, 'Hackfleisch', '2.00'),
(14, 'Mais', '1.00'),
(15, 'Paprika', '1.00'),
(16, 'Chilli', '1.00'),
(17, 'Zucchini', '1.00'),
(18, 'Auberginen', '1.50'),
(19, 'Spargel', '2.00'),
(20, 'Pfifferlinge', '2.50'),
(21, 'Ei', '1.00'),
(22, 'Bacon', '2.00'),
(23, 'Sauce Hollandaise', '1.00'),
(24, 'Barbecue Sauce', '1.00'),
(25, 'Basilikum Pesto', '2.00'),
(26, 'Tomaten Pesto', '2.00'),
(27, 'Rucola', '2.00'),
(28, 'Mozzarella', '1.50'),
(29, 'Parma Schinken', '2.50'),
(30, 'Peperoni Salami', '1.50'),
(31, 'Grünkohl', '3.00'),
(32, 'Gummibärchen', '4.00'),
(33, 'Kaviar', '5.50'),
(34, 'Aal Filets', '3.50'),
(35, 'Stör Leber', '4.00'),
(36, 'Tortellini', '1.50'),
(37, 'Falafel', '2.00'),
(38, 'Gyros', '2.50'),
(39, 'Frikadelle', '1.50'),
(40, 'Entenfleisch', '4.00'),
(41, 'Rotkohl', '1.50');

SET FOREIGN_KEY_CHECKS=1;
COMMIT;
