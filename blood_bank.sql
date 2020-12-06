-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2020 at 12:08 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood_bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `donner`
--

CREATE TABLE `donner` (
  `name` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `age` int(10) DEFAULT NULL,
  `address` varchar(30) DEFAULT NULL,
  `mobileno` varchar(10) DEFAULT NULL,
  `gender` char(1) DEFAULT NULL,
  `bloodgroup` varchar(10) DEFAULT NULL,
  `bloodunit` int(10) DEFAULT NULL,
  `date` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donner`
--

INSERT INTO `donner` (`name`, `email`, `age`, `address`, `mobileno`, `gender`, `bloodgroup`, `bloodunit`, `date`) VALUES
('', '', 0, '', '', '', '', 0, ''),
('Badal Kumar', 'guptabadal03@gmail.c', 20, 'garhwa', '8404936386', 'm', 'O+', 1, '1998-07-01'),
('', '', 0, '', '', '', '', 0, ''),
('suraj', 'suraj12@gmail', 18, 'garhwa', '8404936386', 'm', 'A-', 1, '1889-05-01'),
('', '', 0, '', '', '', '', 0, ''),
('pankaj Kumar', 'guptabadal03@gmail.c', 15, 'garhwa', '8404936386', 'm', 'B+', 1, '2020-09-18'),
('pankaj Kumar', 'guptabadal03@gmail.c', 15, 'garhwa', '8404936386', 'm', 'B+', 1, '2020-09-18'),
('', '', 0, '', '', '', '', 0, ''),
('', '', 0, '', '', '', '', 0, ''),
('', '', 0, '', '', '', '', 0, ''),
('', '', 0, '', '', '', '', 0, ''),
('', '', 0, '', '', '', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `age` int(10) NOT NULL,
  `address` varchar(30) NOT NULL,
  `mobile` int(10) NOT NULL,
  `gender` char(10) NOT NULL,
  `hospital` varchar(20) NOT NULL,
  `dname` varchar(20) NOT NULL,
  `disease` char(10) NOT NULL,
  `group` char(5) NOT NULL,
  `unit` int(2) NOT NULL,
  `date` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`name`, `email`, `age`, `address`, `mobile`, `gender`, `hospital`, `dname`, `disease`, `group`, `unit`, `date`) VALUES
('', '', 0, '', 0, '', '', '', '', '', 0, 0),
('Badal Kumar', 'guptabadal03@gmail.c', 22, 'garhwa', 2147483647, 'male', 'drrr khna', 'dr boyyy', 'yes', 'O+', 1, 2020),
('', '', 0, '', 0, '', '', '', '', '', 0, 0),
('suraj', 'guptabadal03@gmail.c', 22, 'skjxsbs', 840493668, 'male', 'nsbdxsh', 'hsghdgxs', 'yes', 'A-', 1, 2020),
('', '', 0, '', 0, '', '', '', '', '', 0, 0),
('', '', 0, '', 0, '', '', '', '', '', 0, 0),
('', '', 0, '', 0, '', '', '', '', '', 0, 0),
('', '', 0, '', 0, '', '', '', '', '', 0, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
