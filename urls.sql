-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2017 at 10:24 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mitosis`
--

-- --------------------------------------------------------

--
-- Table structure for table `urls`
--

CREATE TABLE `urls` (
  `id` int(11) NOT NULL,
  `url` varchar(255) NOT NULL,
  `short_url` varchar(10) DEFAULT NULL,
  `creation_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `urls`
--

INSERT INTO `urls` (`id`, `url`, `short_url`, `creation_date`) VALUES
(10000, 'https://www.youtube.com/watch?v=QN2VXBNujRs&t=747s', '7ps', '2017-05-23 01:33:55'),
(10001, 'http://abc.com', '7pt', '2017-05-23 01:54:21'),
(10002, 'http://google.com', '7pu', '2017-05-23 02:28:22'),
(10003, 'https://online.mmu.edu.my', '7pv', '2017-05-23 02:29:52'),
(10004, 'http://www.livescore.com/', '7pw', '2017-05-23 02:46:20'),
(10005, 'http://www.google.com', '7px', '2017-05-23 15:19:05'),
(10006, 'https://www.facebook.com', '7py', '2017-05-23 15:19:52'),
(10007, 'http://www.lazada.com.my', '7pz', '2017-05-23 15:29:27'),
(10008, 'http://www.mitosis.my', '7q0', '2017-05-23 15:32:51'),
(10009, 'http://mitosis.my', '7q1', '2017-05-23 15:34:01'),
(10010, 'http://www.mmu.edu.my', '7q2', '2017-05-23 15:36:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `urls`
--
ALTER TABLE `urls`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `urls`
--
ALTER TABLE `urls`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10011;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
