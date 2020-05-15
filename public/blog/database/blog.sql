

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(150) DEFAULT NULL,
  `imagen` varchar(60) DEFAULT NULL,
  `sumario` text,
  `detalle` text,
  `categoria` varchar(60) DEFAULT NULL,
  `visitas` int(5) NOT NULL DEFAULT '0',
  `valoracion` int(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;



INSERT INTO `posts` (`id`, `titulo`, `imagen`, `sumario`, `detalle`, `categoria`, `visitas`, `valoracion`) VALUES
(1, 'Exportar HTML a PDF en PHP de manera f&aacute;cil', 'img01.jpg', 'En este ejemplo vamos a ense&ntilde;ar a exportar nuestro c&oacute;digo HTML a PHP usando la librería domPdf.', 'En este ejemplo vamos a ense&ntilde;ar a exportar nuestro c&oacute;digo HTML a PHP usando la librería domPdf.', 'PHP', 622, 0),
(2, '&iquest;Que colores usar en mi web?, &iexcl;Pictaculous!', 'img02.jpg', 'Pictaculous nos permite subir una imagen retornando una gama de colores a usar.', 'Pictaculous nos permite subir una imagen retornando una gama de colores a usar.', 'Otros', 1095, 5),
(3, 'Webfont: tipograf&iacute;as hechas para la web', 'img03.png', 'Veremos como implementar las webfonts para enriquecer nuestro sitio web.', 'Veremos como implementar las webfonts para enriquecer nuestro sitio web.', 'HTML y CSS', 511, 6),
(4, 'Formas de enviar par&aacute;metros en ASP.NET MVC', 'img04.jpg', 'En esta entrada vamos a ver diversas formas de enviar par&aacute;metros ya sea un modelo, variables sueltas, array entre otros.', 'En esta entrada vamos a ver diversas formas de enviar par&aacute;metros ya sea un modelo, variables sueltas, array entre otros.', 'ASP.NET', 1976, 9);
COMMIT;

