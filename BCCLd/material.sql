-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2021 at 02:50 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
-- Database: `bccld`
-- Table structure for table `material`
CREATE TABLE `material` (
  `item_code` varchar(255) NOT NULL,
  `item_desc` varchar(255) NOT NULL,
  `bal_qty` varchar(255) NOT NULL,
  `UOM` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
INSERT INTO `material` (`item_code`, `item_desc`, `bal_qty`, `UOM`) VALUES
('1234', '1234', '1234', '1234');
-- Indexes for dumped tables
-- Indexes for table `material`
ALTER TABLE `material`
  ADD PRIMARY KEY (`item_code`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
