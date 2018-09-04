-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 04, 2018 at 03:17 PM
-- Server version: 5.6.39-cll-lve
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hanuplus_ci`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `products` varchar(100) DEFAULT NULL,
  `brands` varchar(100) DEFAULT NULL,
  `price` varchar(100) DEFAULT NULL,
  `color` varchar(1000) DEFAULT NULL,
  `img_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `products`, `brands`, `price`, `color`, `img_name`) VALUES
(0, 'product 1', 'red', 'T-shirt', '100', '0', 'rt.jpg'),
(2, 'product 2', 'gray', 'T-shirt', '300', '0', 'gt.jpg'),
(3, 'product 3', 'black', 'shirt', '100', '0', 'bs.jpg'),
(4, 'product 4', 'red', 'shirt', '200', '0', 'rs.jpg'),
(5, 'product 5', 'gray', 'shirt', '200', '1', 'gs.jpg'),
(6, 'product 6', 'black', 'T-shirt', '300', '0', 'bt.jpg'),
(7, 'product 7', 'red', 'T-shirt', '200', '0', 'rt2.jpg'),
(8, 'product 8', 'gray', 'jeans', '100', '1', 'gj.jpg'),
(9, 'product 9', 'black', 'jeans', '200', '1', 'bj.jpg'),
(10, 'product 10', 'red', 'jeans', '200', '1', 'rj.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
