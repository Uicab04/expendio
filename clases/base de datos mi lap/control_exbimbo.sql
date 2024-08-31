-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 31-08-2024 a las 15:33:55
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `control_exbimbo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `caja`
--

CREATE TABLE `caja` (
  `id` int(11) NOT NULL,
  `cantidad_inicio` varchar(10) NOT NULL,
  `catidad_cierre` varchar(10) NOT NULL,
  `fecha_inicio` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `fecha_ciere` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `caja`
--

INSERT INTO `caja` (`id`, `cantidad_inicio`, `catidad_cierre`, `fecha_inicio`, `fecha_ciere`) VALUES
(1, '100', '126', '2022-03-18 00:00:47', '2022-03-18 00:00:47'),
(2, '100', '126', '2022-03-18 00:00:53', '2022-03-18 00:00:53');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(180) NOT NULL,
  `apellido` varchar(180) NOT NULL,
  `telefono` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dash_usuarios`
--

CREATE TABLE `dash_usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(70) NOT NULL,
  `hashUser` varchar(25) NOT NULL,
  `fechaRegistro` date NOT NULL,
  `tipo` tinyint(4) NOT NULL DEFAULT 2 COMMENT '1administrador \r\n2usuario'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `dash_usuarios`
--

INSERT INTO `dash_usuarios` (`id`, `nombre`, `apellidos`, `email`, `password`, `hashUser`, `fechaRegistro`, `tipo`) VALUES
(24, 'sdAdministradorsdsdfjheFIUS', 'Uicabsdsd', 'uicab.nahuat.victor@cbta80.edu.mx', '61be55a8e2f6b4e172338bddf184d6dbee29c98853e0a0485ecee7f27b9af0b4', 'cfb4033453ac410171613dc69', '2022-05-25', 1),
(26, '3333sfesfejknjk', 'sdsfsefsjihuy', 'uicab.nahuat.victor@cbta80.edu.mxp', '7cbccda65959a4fe629dbdf546ae3ddea9328ae5a53498785f4a27394fe26515', '4c09a1034e3d99fbc7c336681', '2022-06-11', 2),
(28, 'Administrador', 'uicab', 'uicab.nahuat.victor@cbta80.edu.mxppp', '7cbccda65959a4fe629dbdf546ae3ddea9328ae5a53498785f4a27394fe26515', '0c7dbb3ec3ca4fa6a967cbdbc', '2022-06-12', 2),
(31, 'aaddss', 'asdasddsa', 'uicab.nahuat.victor@cbta80.edu.mxasdasdasdasdasdasdasdas', '61be55a8e2f6b4e172338bddf184d6dbee29c98853e0a0485ecee7f27b9af0b4', '7fbfe8d7a61eb45dd1c378456', '2022-08-22', 2),
(32, 'aaaaaa', 'aaaaaa', 'aygshd.37ygduyg@as.ssa.sssdsd', '61be55a8e2f6b4e172338bddf184d6dbee29c98853e0a0485ecee7f27b9af0b4', 'ebe917dcd0fd5bec2b5c1f213', '2022-12-21', 2),
(33, 'aaaa', 'aaaa', 'root2@al.cv', '61be55a8e2f6b4e172338bddf184d6dbee29c98853e0a0485ecee7f27b9af0b4', 'f314cf9fb2582225edb53b6ef', '2023-12-17', 2),
(34, 'VICTOR MANUEL', 'UICAB NAHUATd', 'root@wwqdd.cc', '61be55a8e2f6b4e172338bddf184d6dbee29c98853e0a0485ecee7f27b9af0b4', 'f21964c5a2470b902c909a108', '2023-12-17', 2),
(35, 'nnnnnn', 'nnn', 'nnnn@ds.d.bb', '7f82ec7e2862b56289ceaaeb057640d924ec668bbc3262444a441a1e638ff139', '6a93156b79dfe62d4d980d802', '2023-12-17', 2),
(36, 'bbbb', 'bbb', 'bbbb@b.b.bb', '81cc5b17018674b401b42f35ba07bb79e211239c23bffe658da1577e3e646877', '1430b8df5d2566944d2183f2e', '2023-12-17', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE `personal` (
  `id_personal` int(11) NOT NULL,
  `nombre` varchar(180) NOT NULL,
  `apellido_paterno` varchar(180) NOT NULL,
  `apellido_materno` varchar(180) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `personal`
--

INSERT INTO `personal` (`id_personal`, `nombre`, `apellido_paterno`, `apellido_materno`) VALUES
(1, 'jessica', 'trejo', 'uex');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre_producto` varchar(180) NOT NULL,
  `precio` tinyint(100) NOT NULL,
  `fecha_caducidad` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `imagen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre_producto`, `precio`, `fecha_caducidad`, `imagen`) VALUES
(17, 'Pan bimbo Blanco', 30, '2022-04-19 22:26:31', 'imag_1.JPG'),
(18, 'Pan tostado Clasico', 22, '2022-04-19 22:17:55', '._imag_4.JPG'),
(19, 'Pan Wonder', 30, '2022-04-19 22:12:55', '._imag_5.JPEG'),
(20, 'Donas Espolvoreadas', 11, '2022-04-19 22:15:06', '._imag_6.JPG'),
(21, 'Medias Noches', 21, '2022-04-19 22:15:06', 'imagen_7.JPG'),
(22, 'Pan Molido', 21, '2022-04-19 22:16:03', 'imagen_8.JPEG'),
(44, 'PAN', 67, '2022-06-19 20:24:56', ''),
(45, 'PAN', 67, '2022-06-19 20:24:56', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `telefonos`
--

CREATE TABLE `telefonos` (
  `id` int(11) NOT NULL,
  `numero_de_telefono` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `telefonos`
--

INSERT INTO `telefonos` (`id`, `numero_de_telefono`) VALUES
(1, '9831067413');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `caja`
--
ALTER TABLE `caja`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `dash_usuarios`
--
ALTER TABLE `dash_usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`id_personal`),
  ADD KEY `id` (`id_personal`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `id_2` (`id`),
  ADD KEY `id_3` (`id`);

--
-- Indices de la tabla `telefonos`
--
ALTER TABLE `telefonos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `caja`
--
ALTER TABLE `caja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `dash_usuarios`
--
ALTER TABLE `dash_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `personal`
--
ALTER TABLE `personal`
  MODIFY `id_personal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT de la tabla `telefonos`
--
ALTER TABLE `telefonos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `clientes_ibfk_1` FOREIGN KEY (`id`) REFERENCES `personal` (`id_personal`);

--
-- Filtros para la tabla `personal`
--
ALTER TABLE `personal`
  ADD CONSTRAINT `personal_ibfk_1` FOREIGN KEY (`id_personal`) REFERENCES `caja` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `telefonos`
--
ALTER TABLE `telefonos`
  ADD CONSTRAINT `telefonos_ibfk_1` FOREIGN KEY (`id`) REFERENCES `personal` (`id_personal`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
