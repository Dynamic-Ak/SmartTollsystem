-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2024 at 08:10 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tollsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `ts`
--

CREATE TABLE `ts` (
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(20) NOT NULL,
  `numberplate` varchar(20) NOT NULL,
  `accountNo` int(20) NOT NULL,
  `wallet` int(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `lang` varchar(20) NOT NULL,
  `distance` int(20) NOT NULL,
  `speed` int(20) NOT NULL,
  `obu` varchar(20) NOT NULL,
  `tollcalc` int(20) NOT NULL,
  `none` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ts`
--

INSERT INTO `ts` (`username`, `email`, `phone`, `numberplate`, `accountNo`, `wallet`, `country`, `lang`, `distance`, `speed`, `obu`, `tollcalc`, `none`) VALUES
('ak', '596135ak@gmail.com', 2147483647, 'DL0001', 45678, 9870, 'India', 'Hindi', 10, 1, 'green', 10, ''),
('ak', '5965435ak@gmail.com', 2147483647, 'DL00115', 123456, 880, 'India', 'English', 10, 12, 'red', 120, ''),
('ak', '9654393ak@gmail.com', 2147483647, 'DL9', 45678, 9899, 'India', 'English', 10, 10, 'green', 100, ''),
('ak', '9654435ak@gmail.com', 2147483647, 'DL001', 123456, 880, 'India', 'English', 12, 10, 'green', 120, ''),
('ak', '9654439533ak@gmail.com', 2147483647, 'DL010', 45678, 9880, 'India', 'English', 10, 12, 'green', 120, ''),
('ak', '965443953ak@gmail.com', 2147483647, 'DL0100', 45678, 9880, 'India', 'English', 10, 12, 'green', 120, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ts`
--
ALTER TABLE `ts`
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `numberplate` (`numberplate`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
