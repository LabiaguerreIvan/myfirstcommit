-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 19-10-2022 a las 15:13:02
-- Versión del servidor: 5.7.36
-- Versión de PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `prod_fleitas_labiaguerre`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_producto`
--

DROP TABLE IF EXISTS `estado_producto`;
CREATE TABLE IF NOT EXISTS `estado_producto` (
  `cod_estado_producto` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion_estado_producto` int(100) NOT NULL,
  PRIMARY KEY (`cod_estado_producto`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

DROP TABLE IF EXISTS `producto`;
CREATE TABLE IF NOT EXISTS `producto` (
  `cod_producto` int(100) NOT NULL AUTO_INCREMENT,
  `cod_tipo_producto` int(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `precio` decimal(65,0) NOT NULL,
  `stock` int(100) NOT NULL,
  `cod_barra` int(100) NOT NULL,
  `cod_estado_producto` int(100) NOT NULL,
  `descripcion_producto` text NOT NULL,
  `imagen` text NOT NULL,
  `cod_unidadmedida` int(100) NOT NULL,
  PRIMARY KEY (`cod_producto`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_producto`
--

DROP TABLE IF EXISTS `tipo_producto`;
CREATE TABLE IF NOT EXISTS `tipo_producto` (
  `cod_tipo` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion_tipo_producto` varchar(100) NOT NULL,
  PRIMARY KEY (`cod_tipo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
