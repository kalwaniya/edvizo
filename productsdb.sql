-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 04, 2018 at 04:36 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

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
  `img_name` text NOT NULL,
  `size` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `products`, `brands`, `price`, `color`, `img_name`, `size`) VALUES
(1, 'product 1', 'red', 'T-shirt', '100', '0', 'rt.jpg', 'Large'),
(2, 'product 2', 'gray', 'T-shirt', '300', '0', 'gt.jpg', 'Large'),
(3, 'product 3', 'black', 'shirt', '100', '0', 'bs.jpg', 'Large'),
(4, 'product 4', 'red', 'shirt', '200', '0', 'rs.jpg', 'Large'),
(5, 'product 5', 'gray', 'shirt', '200', '1', 'gs.jpg', 'Medium'),
(6, 'product 6', 'black', 'T-shirt', '300', '0', 'bt.jpg', 'Medium'),
(7, 'product 7', 'red', 'T-shirt', '200', '0', 'rt2.jpg', 'Medium'),
(8, 'product 8', 'gray', 'jeans', '100', '1', 'gj.jpg', 'Medium'),
(9, 'product 9', 'black', 'jeans', '200', '1', 'bj.jpg', 'Medium'),
(10, 'product 10', 'red', 'jeans', '200', '1', 'rj.jpg', 'Small'),
(11, 'product 11', 'black', 'T-shirt', '100', '1', 'r2.jpg', 'Small'),
(12, 'product 112', 'black', 'T-shirt', '300', '1', 'r1.jpg', 'Small');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
