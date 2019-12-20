-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2019 at 05:03 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perhitunganwaktu`
--

-- --------------------------------------------------------

--
-- Table structure for table `waktutempuh`
--

CREATE TABLE `waktutempuh` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jarak` int(11) NOT NULL,
  `kecepatan` int(11) NOT NULL,
  `w_berangkat` varchar(5) NOT NULL,
  `w_macet` int(11) NOT NULL,
  `w_istirahat` int(11) NOT NULL,
  `w_sampai` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `waktutempuh`
--

INSERT INTO `waktutempuh` (`id`, `nama`, `jarak`, `kecepatan`, `w_berangkat`, `w_macet`, `w_istirahat`, `w_sampai`) VALUES
(34, 'aa', 10, 10, '8:0', 30, 10, '9:40'),
(41, 'iii', 10, 10, '8:0', 30, 10, '9'),
(43, 'o', 10, 10, '8:0', 30, 10, '9:40'),
(44, 'manasya', 10, 10, '8:0', 30, 10, '9:40'),
(45, 'coba ya', 10, 10, '8:0', 30, 10, '9:40'),
(46, 'ani', 10, 10, '8:0', 30, 10, '9:40'),
(47, 'ani', 10, 10, '8:0', 30, 10, '9:40'),
(48, 'i', 180, 60, '7:0', 0, 0, '10:0'),
(49, 'i', 180, 60, '7:30', 0, 0, '10:30'),
(50, 'ani', 10, 10, '9:0', 10, 20, '10:30'),
(51, 'diyah', 10, 10, '8:0', 30, 10, '9:40'),
(52, 'asha', 10, 10, '9:0', 30, 10, '10:40'),
(53, 'Asha', 90, 60, '7:20', 0, 60, '9:50'),
(54, '&lt;h1&gt;diyah&lt;/h1&gt;', 10, 10, '1:0', 10, 10, '2:20'),
(55, '<h1>DIyah</h1>', 10, 10, '8:0', 30, 10, '9:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `waktutempuh`
--
ALTER TABLE `waktutempuh`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `waktutempuh`
--
ALTER TABLE `waktutempuh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
