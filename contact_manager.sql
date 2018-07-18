-- phpMyAdmin SQL Dump
-- version 4.6.5.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 10, 2017 at 08:35 PM
-- Server version: 5.6.34
-- PHP Version: 7.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contact_manager`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `my_contacts`;
CREATE TABLE `my_contacts` (
  `id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `title` varchar(4) NOT NULL,
  `mobile` int(13) NOT NULL,
  `physical_address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contacts`
--

INSERT INTO `my_contacts` (`id`, `first_name`, `last_name`, `title`, `mobile`, `physical_address`) VALUES
(1, 'Kat', 'Ntimane', 'Software Developer', '0736093619', '117 Rammala Street, Sun Valley, Mamelodi West'),
(2, 'Lerato', 'Ntimane', 'Administrator', '0735893878', '117 Rammala Street, Sun Valley, Mamelodi West'),
(6, 'Andzani', 'Ntimane', 'Minister', '0736093619', '117 Rammala Street, Sun Valley, Mamelodi West'),
(11, 'Tinyiko', 'Ntimane', 'Attorney', '08725682921', '117 Rammala Street, Sun Valley, Mamelodi West');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `my_contacts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
