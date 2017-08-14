-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 14, 2017 at 07:53 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bishal`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE IF NOT EXISTS `data` (
  `Serial` int(5) NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `id` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `mf` varchar(11) NOT NULL,
  `mob` varchar(10) NOT NULL,
  `otherid` varchar(30) NOT NULL,
  `nation` varchar(30) NOT NULL,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`Serial`, `fname`, `lname`, `id`, `pass`, `dob`, `mf`, `mob`, `otherid`, `nation`) VALUES
(1, 'Bishal', 'Shaw', 'Bishal@mymail.COM', '123456789', '12-09-1996', 'Male', '8274814482', 'ZENTACROSS001@GMAIL.COM', 'INDIA'),
(2, 'Bishal', 'Shaw', 'Bishal2@gmail.com', 'password', '12-09-1996', 'Male', '7003142061', 'zentacross001@gmail.com', 'India');
