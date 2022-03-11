-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2022 at 01:38 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `idcat` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`idcat`, `name`) VALUES
(6, 'السياسة'),
(7, 'الطبخ'),
(8, 'الاقتصاد');

-- --------------------------------------------------------

--
-- Table structure for table `prudocts`
--

CREATE TABLE `prudocts` (
  `idp` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `descr` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prudocts`
--

INSERT INTO `prudocts` (`idp`, `name`, `descr`, `price`, `image`) VALUES
(1, 'mm', 'mm> ', 'mmn', 'mm>'),
(2, 'lkjn', 'Lm', 'knm.,', '?.'),
(4, 'lkjn', 'Lm/', 'knm.,', '?.'),
(5, 'lkjn', 'Lm/', 'knm.,', '?.'),
(6, 'lkjn', 'Lm/', 'knm.,', '?.'),
(7, 'lkjn', 'Lm/', 'knm.,', '?.'),
(8, 'lkjn', 'Lm/', 'knm.,', '?.'),
(9, 'lkjn', 'Lm/', 'knm.,', '?.'),
(10, 'xc', 'DSC', 'sDCXA', 'DCASFDC'),
(11, 'xc', 'DSC', 'sDCXA', 'DCASFDC'),
(12, 'lkjn', '/lk', ';lj', '/lknh'),
(13, ',mdb', 'kh', 'kj', ';lj');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`idcat`);

--
-- Indexes for table `prudocts`
--
ALTER TABLE `prudocts`
  ADD PRIMARY KEY (`idp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `prudocts`
--
ALTER TABLE `prudocts`
  MODIFY `idp` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
