-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 29, 2026 at 03:56 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portofolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `certificates`
--

CREATE TABLE `certificates` (
  `id` int NOT NULL,
  `judul` varchar(200) DEFAULT NULL,
  `provider` varchar(100) DEFAULT NULL,
  `tahun` varchar(10) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `icon` varchar(50) DEFAULT NULL,
  `link` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `certificates`
--

INSERT INTO `certificates` (`id`, `judul`, `provider`, `tahun`, `status`, `icon`, `link`) VALUES
(1, 'Web Programming Practicum – Teaching Assistant', 'University Laboratory', '2025', 'Completed', 'bi bi-laptop', 'certificates/ASLEB.pdf'),
(2, 'Leadership Training – INForsa', 'INForsa Organization', '2024', 'Completed', 'bi bi-people', 'certificates/inforsa.png'),
(3, 'National Seminar Committee', 'University Event', '2024', 'Completed', 'bi bi-calendar-event', 'certificates/kepanitiaan.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `id` int NOT NULL,
  `tahun` varchar(10) DEFAULT NULL,
  `role` varchar(150) DEFAULT NULL,
  `organisasi` varchar(150) DEFAULT NULL,
  `deskripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`id`, `tahun`, `role`, `organisasi`, `deskripsi`) VALUES
(1, '2025', 'Teaching Assistant (Laboratory Assistant)', 'University Laboratory', 'Assisted students in practical sessions and supported laboratory activities.'),
(2, '2024', 'INFORSA – Information System Association', 'INFORSA Organization', 'Coordinator of Knowledge Center division.'),
(3, '2024', 'Event Committee', 'Faculty of Computer Science', 'Handled coordination and logistics for faculty events.');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int NOT NULL,
  `nama_skill` varchar(50) DEFAULT NULL,
  `LEVEL` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `nama_skill`, `LEVEL`) VALUES
(1, 'Python', 85),
(2, 'HTML', 80),
(3, 'CSS', 75),
(4, 'JavaScript', 60),
(5, 'Flutter ', 50);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `certificates`
--
ALTER TABLE `certificates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `certificates`
--
ALTER TABLE `certificates`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
