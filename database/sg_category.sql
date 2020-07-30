-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2020 at 11:35 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `sg_category`
--

CREATE TABLE `sg_category` (
  `id` bigint(20) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `is_deleted` enum('0','1') NOT NULL DEFAULT '0',
  `created_on` datetime NOT NULL,
  `updated_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sg_category`
--

INSERT INTO `sg_category` (`id`, `category_name`, `status`, `is_deleted`, `created_on`, `updated_on`) VALUES
(1, 'Degital Marketing', '1', '0', '2020-02-13 20:14:40', '2020-02-13 14:44:40'),
(2, 'paresh', '1', '0', '2020-06-28 12:15:06', '2020-06-28 06:45:06'),
(3, 'paresh', '1', '1', '2020-07-09 17:06:55', '2020-07-09 11:36:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sg_category`
--
ALTER TABLE `sg_category`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sg_category`
--
ALTER TABLE `sg_category`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
