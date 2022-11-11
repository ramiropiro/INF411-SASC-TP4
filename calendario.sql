-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table calendario.eventos
CREATE TABLE IF NOT EXISTS `eventos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `color` varchar(7) DEFAULT NULL,
  `start` datetime NOT NULL,
  `end` datetime DEFAULT NULL,
  `backgroundColor` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8;

-- Dumping data for table calendario.eventos: ~14 rows (approximately)
/*!40000 ALTER TABLE `eventos` DISABLE KEYS */;
INSERT INTO `eventos` (`title`, `color`, `start`, `end`, `backgroundColor`) VALUES
	('Cursado', '#0071C5', '2022-07-19 00:00:00', '2022-12-17 00:00:00', '#4267B2'),
	('API 1', '#008000', '2022-08-21 17:00:00', '2022-08-22 00:00:00', '#4267B2'),
	('API 2', '#008000', '2022-09-11 17:00:00', '2022-09-12 00:00:00', '#4267B2'),
	('API 3', '#008000', '2022-10-16 17:00:00', '2022-10-17 00:00:00', '#4267B2'),
	('API 4', '#008000', '2022-11-13 17:00:00', '2022-11-14 00:00:00', '#4267B2'),
	('Primer Conferencia', '#FF0000', '2022-08-17 17:00:00', '2022-08-18 00:00:00', '#4267B2'),
	('Segunda Conferencia', '#FF0000', '2022-08-26 17:00:00', '2022-08-27 00:00:00', '#4267B2'),
	('Tercer Conferencia', '#FF0000', '2022-09-22 17:00:00', '2022-09-23 00:00:00', '#4267B2'),
	('Cuarta Conferencia', '#FF0000', '2022-11-03 17:00:00', '2022-11-04 00:00:00', '#4267B2'),
	('Quinta Conferencia', '#FF0000', '2022-11-09 17:00:00', '2022-11-10 00:00:00', '#4267B2');
/*!40000 ALTER TABLE `eventos` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
