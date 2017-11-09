-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2017 at 05:13 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cake-auth`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `Type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `phone`, `created`, `modified`, `Type`) VALUES
(1, 'razin2good@gmail.com', '123456', '3374428237', '2017-10-14 07:05:20', '2017-10-14 07:05:20', ''),
(2, 'razinfh@outlook.com', '123', '124532651', '2017-10-14 07:26:46', '2017-10-14 07:26:46', ''),
(3, 'Shivanjali.khare@gmail.com', '$2y$10$eMl0r.vbGG4EexlIws0qsOul9jU.RkKX/P0./xWk7NZfb7v6Rm5ZK', '13375048386', '2017-10-14 20:47:50', '2017-10-14 20:47:50', ''),
(5, 'razinfh@yahoo.com', '$2y$10$H8sIwCMbjqaIL.zm2D/KSeuOy7IopbU8NqePIHX1IuKQccafheNgq', '23153456', '2017-10-15 06:33:12', '2017-10-15 06:33:12', ''),
(6, 'razinabc@gmail.com', '$2y$10$ZFzP4bW3p3lSSvn8eGJakevz1rhpdb4e4mVkj4TIOEBpu.JJG7ztS', '123-5512-21616', '2017-10-15 22:46:17', '2017-10-15 22:46:17', ''),
(7, 'sxk@edu.com', '$2y$10$UMXYy.Zpj.tmBj0/BGcEkOlMEoLUDjxsYvznK9y.MyRddTpSZJ.PW', '12132424354', '2017-10-15 23:56:59', '2017-10-15 23:56:59', ''),
(9, '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(10, '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(11, 'abc@gmail.com', '123456', '123456789', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(12, 'priya@gmail.com', '123456', '32145956262', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(13, 'p@gmail.com', '121324343545', '123456', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(14, 's@gmail.com', '123456', '123456', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(15, 'r@gmail.com', '123456', '123456', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(16, 'xyz@gmail.com', '1234567', '3345049856', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
