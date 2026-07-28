-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2026 at 07:26 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `roll_no` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `roll_no`, `email`, `branch`, `phone`, `created_at`) VALUES
(2, 'summi', '24E119D49', 'summi2005@gmail.com', 'CSIT', '7004162926', '2026-07-24 10:35:10'),
(3, 'Pragya ', '24E119D48', 'pragya@gmail.com', 'CSIT', '7004162922', '2026-07-27 07:48:03'),
(5, 'mansi', '24E119D67', 'mansii@gmail.com', 'CSIT', '7004162555', '2026-07-27 08:40:15'),
(6, 'nandini', '24E119D08', 'nandini05@gmail.com', 'CSIT', '7004166589', '2026-07-27 08:40:44'),
(7, 'sukanya', '24E119D32', 'sukanyaaa005@gmail.com', 'CSIT', '7004165679', '2026-07-27 08:41:16'),
(10, 'smruti', '24E119D41', 'smruuu@gmail.com', 'CSIT', '7004164307', '2026-07-27 08:41:52'),
(11, 'ayansh', '24E119D22', 'ayansh2018@gmail.com', 'CSIT', '7004162789', '2026-07-27 14:25:47'),
(17, 'chinu', '24E119D76', 'chinu5@gmail.com', 'CSIT', '7004166212', '2026-07-28 16:25:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
