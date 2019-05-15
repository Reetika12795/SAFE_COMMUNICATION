-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: sql107.unaux.com
-- Generation Time: May 11, 2019 at 03:42 PM
-- Server version: 5.6.41-84.1
-- PHP Version: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `unaux_22180717_proj`
--

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `messid` int(5) NOT NULL AUTO_INCREMENT,
  `senderid` int(5) NOT NULL,
  `receiverid` int(11) NOT NULL,
  `mess` varchar(200) DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`messid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`messid`, `senderid`, `receiverid`, `mess`, `time`) VALUES
(1, 1, 2, '8^KNUD^XNT^LNST', '2019-05-09 13:17:41'),
(4, 1, 2, '^Ij^ipx^bsf^zpv', '2019-05-09 17:59:52'),
(5, 3, 1, '^8ELLO^THIS^IS^cAYA^MESSAGING^TO^cAYANKGBRC', '2019-05-09 18:26:14'),
(6, 3, 2, '^VszzC^HvwG^wG^1oMo^AsGGouwBu^HC^6ssHwyo', '2019-05-09 18:26:52'),
(7, 4, 1, '^Bc^G5s5he^C^5g^aicha^ni^Biql5b', '2019-05-10 12:51:33'),
(8, 4, 1, '^Spwwz^t^lx^qtyp', '2019-05-10 12:58:33'),
(9, 1, 2, 'WT114^b471S', '2019-05-10 13:06:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'Mayank Gupta', 'mayankgbrc@gmail.com', '1811'),
(2, 'Reetika Gautam', 'i@zafire.in', '1111'),
(3, 'Maya ', 'maya2@gmail.com', '1234'),
(4, 'Reetika', 'kumari.ritz1@gmail.com', '1234');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
