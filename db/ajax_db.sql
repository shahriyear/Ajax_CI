-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 17, 2018 at 07:46 PM
-- Server version: 5.7.21
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ajax_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_data`
--

DROP TABLE IF EXISTS `tbl_data`;
CREATE TABLE IF NOT EXISTS `tbl_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `title` varchar(128) NOT NULL,
  `des` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=119 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_data`
--

INSERT INTO `tbl_data` (`id`, `name`, `title`, `des`) VALUES
(1, 'Shahriyear Hossain', 'aaa', 'adasd'),
(2, 'e', 'e', 'e'),
(3, 'Shahriyear Hossain', 'aaa', 'adasd'),
(4, 'Shahriyear Hossain', 'ws', 'qwe'),
(17, 'Shahriyear Hossain', 'fahim15-8092', 'adasd'),
(7, 'e', 'e', 'e'),
(8, 'e', 'e', 'e'),
(16, '', '', ''),
(10, 'r', 'rr', 'r'),
(19, '', '', ''),
(18, 'w', 'w', 'w'),
(20, '', '', ''),
(21, '', '', ''),
(22, 'Shahriyear Hossain', 'aaa', 'adasd'),
(23, 'q', '', ''),
(24, 'w', '', ''),
(25, 'Shahriyear Hossain', '', ''),
(26, 'asas', '', ''),
(27, 'Shahriyear Hossain', '', ''),
(28, 'rrr', '', ''),
(29, 'Shahriyear Hossain', '', ''),
(30, 'w', 'www', 'w'),
(31, 'Shahriyear Hossain', '', ''),
(32, 'S', '', ''),
(33, 'R', 'R', 'rSDDDDdd'),
(34, 'Shahriyear Hossain', 'aaa', 'adasd'),
(35, 'qw', 'ads', 'sada'),
(36, 'asAS', 'AS', 'as'),
(37, 'e', 'e', 'e'),
(38, 'AS', 'sS', 's'),
(39, 'w', 'wW', ''),
(40, 'Shahriyear Hossain', '', ''),
(41, 'Shahriyear Hossain', '', ''),
(42, 'w', '', ''),
(43, 'a', 'asd', 'adasd'),
(44, 'Shahriyear Hossain', '', ''),
(45, 'w', '', ''),
(46, 'Shahriyear Hossain', '', ''),
(47, 'WQ', '', ''),
(48, 's', '', ''),
(49, 'e', '', ''),
(50, 'Shahriyear Hossain', '', ''),
(51, 'q', '', ''),
(52, 'Shahriyear Hossain', '', ''),
(53, 'Shahriyear Hossain', '', ''),
(54, 'a', '', ''),
(55, 'a', 'sd', 'a'),
(56, 'a', 'afff', ''),
(57, 'Shahriyear Hossain', '', ''),
(58, 'Shahriyear Hossain', '', ''),
(59, 'xfd', 'cgdf', 'gdfg'),
(60, 'Shahriyear Hossain', 'aaa', ''),
(61, 'Shahriyear Hossain', 'uuuuuuuu', ''),
(62, 'Shahriyear Hossain', 'aaa', ''),
(63, 'Shahriyear Hossain', 'aaa', 'r'),
(64, 'Shahriyear Hossain', 'aaa', 'r'),
(65, 'Shahriyear Hossain', 'aaa', 'r'),
(66, 'Shahriyear Hossain', 'aaa', 'r'),
(67, 'Shahriyear Hossain', 'Resume of Fahim Shahriyear', ''),
(68, 'Shahriyear Hossain', 'Resume of Fahim Shahriyear', ''),
(69, 'Shahriyear Hossain', 'Resume of Fahim Shahriyear', ''),
(70, 'Shahriyear Hossain', 'Resume of Fahim Shahriyear', ''),
(71, 'Shahriyear Hossain', 'Resume of Fahim Shahriyear', ''),
(72, 'Shahriyear Hossain', 'Resume of Fahim Shahriyear', ''),
(73, 'Shahriyear Hossain', 'Resume of Fahim Shahriyear', ''),
(74, 'Shahriyear Hossain', 'Resume of Fahim Shahriyear', ''),
(75, 'Shahriyear Hossain', 'aaa', ''),
(76, 'Shahriyear Hossain', 'aaaqq', ''),
(77, 'Shahriyear Hossain', 'Software &amp; Website Design and Development Bangladesh', ''),
(78, '1', '1', '1'),
(79, 'Shahriyear Hossain', 'aaa', ''),
(80, 'Shahriyear Hossain', 'fahim15-8092', ''),
(81, 'q', 'fahim15-8092', ''),
(82, 'Shahriyear Hossain', 'aaa', ''),
(83, 'Shahriyear Hossain', 'q', ''),
(84, 'qe', 'qwe', 'qe'),
(85, 'w', 'q', 'w'),
(86, 'Shahriyear Hossain', 'S', ''),
(87, 'qew', 'qe', ''),
(88, 'qe', 'qwe', 'qe'),
(89, 'q', 'q', 'q'),
(90, 'q', 'q', 'q'),
(91, 'Shahriyear Hossain', 'aaa', ''),
(92, 'AS', 'AS', 's'),
(93, 'fsdf', 'sdf', ''),
(94, 'Shahriyear Hossain', 'aaa', ''),
(95, 'Shahriyear Hossain', 'aaa', 'adasd'),
(96, 'Shahriyear Hossain', 'aaa', ''),
(97, 'q', 'qq', ''),
(98, 'sfsdf', 'dgdfg', ''),
(99, 'Shahriyear Hossain', 'aaa', 'adasd'),
(100, 'eee', 'eee', ''),
(101, 'fghj', 'fghj', ''),
(102, 'q', 'aaa', ''),
(103, 'das', 'asd', 'asd'),
(104, 'ads', 'ad', 'asd'),
(105, 'asd', 'aasd', ''),
(106, 'ads', 'asd', 'asd'),
(107, 'q', 'q', 'qwe'),
(108, 'w', 'w', 'w'),
(109, 'qqq', 'w', 'w'),
(110, 'e', 'ee', 'e'),
(111, 'Shahriyear Hossain', 'aaa', 'adasd'),
(112, 'e', 'e', 'e'),
(113, 'e', 'e', 'e'),
(114, 'w', 'w', 'w'),
(115, 'w', 'w', 'w'),
(116, 'wq', 'w', 'w'),
(117, 'not r', 'ww', 'ww'),
(118, 'q', 'q', 'qwe');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
