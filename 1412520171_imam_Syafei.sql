-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.6.16 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             9.1.0.4867
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for dbpenjualan
CREATE DATABASE IF NOT EXISTS `dbpenjualan` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `dbpenjualan`;


-- Dumping structure for table dbpenjualan.barang
CREATE TABLE IF NOT EXISTS `barang` (
  `kdbrng` varchar(50) NOT NULL,
  `kdsatuan` varchar(10) DEFAULT NULL,
  `nmbrng` varchar(50) DEFAULT NULL,
  `hrgjual` double DEFAULT NULL,
  `hrgbeli` double DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `merek` varchar(50) DEFAULT NULL,
  `tipe` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`kdbrng`),
  KEY `FK_barang_satuan` (`kdsatuan`),
  CONSTRAINT `FK_barang_satuan` FOREIGN KEY (`kdsatuan`) REFERENCES `satuan` (`kd_satuan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table dbpenjualan.barang: ~2 rows (approximately)
/*!40000 ALTER TABLE `barang` DISABLE KEYS */;
INSERT INTO `barang` (`kdbrng`, `kdsatuan`, `nmbrng`, `hrgjual`, `hrgbeli`, `stok`, `merek`, `tipe`) VALUES
	('BR00001', 'ST00001', 'Semen', 5000000, 2000000, 30, '4 Roda', 'Item'),
	('BR00002', 'ST00005', 'Tali', 10000, 5000, 400, 'cobra', 'tambang'),
	('BR00003', 'ST00003', 'HVS', 55900, 45500, 100, 'Sidu', 'Kertas'),
	('BR00004', 'ST00002', 'Obeng', 25000, 15000, 20, 'USA', '+-'),
	('BR00005', 'ST00004', 'Gurinda', 245000, 205000, 15, 'Makita', 'N70s'),
	('BR00006', 'ST00007', 'Paku', 2000, 1000, 190, 'Baja', 'We10p'),
	('BR00007', 'ST00010', 'Koas', 15000, 8000, 70, 'Awet', 'K43'),
	('BR00008', 'ST00008', 'Pasir', 159000, 120000, 600, 'Good', 'Jempol'),
	('BR00009', 'ST00006', 'Amplas', 15000, 9000, 100, 'MYA', 'MY7'),
	('BR00010', 'ST00009', 'Bata', 69000, 47500, 540, 'CBD', 'CB10');
/*!40000 ALTER TABLE `barang` ENABLE KEYS */;


-- Dumping structure for table dbpenjualan.satuan
CREATE TABLE IF NOT EXISTS `satuan` (
  `kd_satuan` varchar(10) NOT NULL,
  `nm_satuan` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`kd_satuan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table dbpenjualan.satuan: ~2 rows (approximately)
/*!40000 ALTER TABLE `satuan` DISABLE KEYS */;
INSERT INTO `satuan` (`kd_satuan`, `nm_satuan`) VALUES
	('ST00001', 'KG'),
	('ST00002', 'PCS'),
	('ST00003', 'Rim'),
	('ST00004', 'Kodi'),
	('ST00005', 'Meter'),
	('ST00006', 'Cm'),
	('ST00007', 'Mm'),
	('ST00008', 'Ons'),
	('ST00009', 'Lusin'),
	('ST00010', 'Gross');
/*!40000 ALTER TABLE `satuan` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
