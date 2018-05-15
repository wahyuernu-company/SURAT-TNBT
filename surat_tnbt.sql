-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 15, 2018 at 10:53 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `surat_tnbt`
--

-- --------------------------------------------------------

--
-- Table structure for table `surat_keluar`
--

CREATE TABLE IF NOT EXISTS `surat_keluar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal_upload` date NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `tipe_file` varchar(10) NOT NULL,
  `ukuran_file` varchar(20) NOT NULL,
  `file` varchar(255) NOT NULL,
  `no_keluar` varchar(32) NOT NULL,
  `penerima` varchar(32) NOT NULL,
  `kategori_keluar` varchar(32) NOT NULL,
  `ket_keluar` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `surat_keluar`
--

INSERT INTO `surat_keluar` (`id`, `tanggal_upload`, `nama_file`, `tipe_file`, `ukuran_file`, `file`, `no_keluar`, `penerima`, `kategori_keluar`, `ket_keluar`) VALUES
(2, '2018-05-07', 'percobaan surat keluar 2', 'jpg', '297091', 'files/percobaan surat keluar 2.jpg', '', '', '', ''),
(3, '2018-05-08', 'surat undangan diklat', 'png', '12814', 'files/surat undangan diklat.png', '', '', '', ''),
(4, '2018-05-08', '1111', 'png', '12814', 'files/1111.png', '22002200', 'ernu setiawannn', 'surat undangan', '---');

-- --------------------------------------------------------

--
-- Table structure for table `surat_masuk`
--

CREATE TABLE IF NOT EXISTS `surat_masuk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal_upload` date NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `tipe_file` varchar(10) NOT NULL,
  `ukuran_file` varchar(20) NOT NULL,
  `file` varchar(255) NOT NULL,
  `no_masuk` varchar(32) NOT NULL,
  `pengirim` varchar(32) NOT NULL,
  `kategori_masuk` varchar(32) NOT NULL,
  `ket_masuk` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `surat_masuk`
--

INSERT INTO `surat_masuk` (`id`, `tanggal_upload`, `nama_file`, `tipe_file`, `ukuran_file`, `file`, `no_masuk`, `pengirim`, `kategori_masuk`, `ket_masuk`) VALUES
(1, '2018-05-07', 'surat percobaan 1', 'jpg', '132240', 'files/surat percobaan 1.jpg', '11c', 'wahyu', '', '-'),
(4, '2018-05-08', 'surat percobaan 4', 'png', '12814', 'files/surat percobaan 4.png', 'sdddd/', 'wahyu e s', 'surat undangan', 'bbb'),
(5, '2018-05-14', 'surat percobaan 5', 'png', '130903', 'files/surat percobaan 5.png', '100/c/10', 'wahyu ernu setiawan ...', 'surat undangan', 'untuk percobaan'),
(9, '2018-05-15', 'surat perintah patroli kawasan hutan lindung resort sialang', 'jpg', '5255287', 'files/surat perintah patroli kawasan hutan lindung resort sialang.jpg', '100/001', 'wahyu ernu setiawan', 'Surat perintah', '--'),
(10, '2018-05-15', 'surat perintah patroli kawasan hutan lindung resort talang lakat', 'jpg', '5255287', 'files/surat perintah patroli kawasan hutan lindung resort talang lakat.jpg', '15323/2352', 'wahyu ernu setiawan', 'Surat perintah', '--'),
(11, '2018-05-15', 'surat perintah patroli kawasan hutan lindung resort keritang', 'jpg', '5255287', 'files/surat perintah patroli kawasan hutan lindung resort keritang.jpg', '242345/375753', 'wahyu ernu setiawan', 'Surat perintah', '-'),
(12, '2018-05-15', 'surat undangan pernikahan anak bupati', 'jpg', '5255287', 'files/surat undangan pernikahan anak bupati.jpg', '13451/2365257', 'staff kantor bupati', 'Surat Undangan', '------'),
(13, '2018-05-15', 'surat perintah penjagaan kawasan hutan lindung bukit tigapuluh', 'jpg', '5255287', 'files/surat perintah penjagaan kawasan hutan lindung bukit tigapuluh.jpg', '13412/34523', 'wahyu ernu setiawan', 'Surat perintah', 'surat resmi'),
(14, '2018-05-15', 'surat undangan rapat koordinasi di TN Gunung Ceremai', 'pdf', '1950681', 'files/surat undangan rapat koordinasi di TN Gunung Ceremai.pdf', '6213462456/2363457', 'wahyu ernu setiawan', 'Surat Undangan', 'rapat diadakan di TN gunung Ceremai');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
