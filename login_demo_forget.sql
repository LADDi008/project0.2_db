-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2023 at 07:19 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `mech_signup`
--

CREATE TABLE `mech_signup` (
  `id` int(11) NOT NULL,
  `fname` int(11) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `addres` varchar(15) NOT NULL,
  `services` text NOT NULL,
  `phone_number` int(15) NOT NULL,
  `pass` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mech_signup`
--

INSERT INTO `mech_signup` (`id`, `fname`, `lname`, `email`, `addres`, `services`, `phone_number`, `pass`) VALUES
(2, 12, '', 'mech@gmail.com', 'q', 'q', 0, '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `otp`
--

CREATE TABLE `otp` (
  `id` int(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `otp` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `otp`
--

INSERT INTO `otp` (`id`, `email`, `otp`) VALUES
(1, 'laddiy009@gmail.com', 740946),
(2, 'laddiy009@gmail.com', 682598),
(3, 'laddiy009@gmail.com', 309338),
(4, 'laddiy009@gmail.com', 116812),
(5, 'laddiy009@gmail.com', 865348),
(6, 'laddiy009@gmail.com', 541236),
(7, 'laddiy009@gmail.com', 800397),
(8, 'laddiy009@gmail.com', 302201),
(9, 'laddiy009@gmail.com', 479729);

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `user` varchar(15) NOT NULL,
  `pws` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_signup`
--

CREATE TABLE `user_signup` (
  `id` int(11) NOT NULL,
  `fname` varchar(15) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pass` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_signup`
--

INSERT INTO `user_signup` (`id`, `fname`, `lname`, `email`, `pass`) VALUES
(1, 'user', '1', '9876005823@gmail.com', '11111111'),
(2, 'user', '2', '98760058@gmail.com', '12345678'),
(3, '12', '12', '983@gmail.com', ''),
(4, '12', '12', '9875823@gmail.com', '12341234'),
(5, '12', '12', 'user12@gmail.com', '12341234'),
(6, '12', '12', 'user121@gmail.com', '12341234'),
(7, '12', '12', 'user121@gmail.com', '12341234'),
(8, '12', '12', 'user121@gmail.com', '12341234'),
(9, '12', '12', 'user121@gmail.com', '12341234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mech_signup`
--
ALTER TABLE `mech_signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `otp`
--
ALTER TABLE `otp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_signup`
--
ALTER TABLE `user_signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mech_signup`
--
ALTER TABLE `mech_signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `otp`
--
ALTER TABLE `otp`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_signup`
--
ALTER TABLE `user_signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
