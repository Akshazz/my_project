-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2023 at 07:30 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `userss`
--

CREATE TABLE `userss` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','admin1','admin2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userss`
--

INSERT INTO `userss` (`id`, `name`, `email`, `password`, `role`) VALUES
(1, 'Hans Airon Bangays', 'hansaironbangay@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'admin'),
(2, 'Harold Niegos', 'admin@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'admin'),
(3, 'Akshaz Masteh', 'akshaz.masteh@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'admin2'),
(10, 'Akira Mae Bucana', 'akiramaebucana@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'admin'),
(11, 'Ela May Alfonso', 'elamayalfonso@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'admin'),
(12, 'Vincent Clarin', 'vincentclarin@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'admin'),
(19, 'Vincent Furigay', 'vincentfurigay@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'admin'),
(20, 'Michael Bercasio', 'michaelbercasio@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'admin'),
(21, 'LMS', 'lms-username@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'admin'),
(22, 'FACULTY MANAGEMENT INFORMATION SYSTEM', 'fmis-username@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'admin'),
(23, 'ACADEMIC MANAGEMENT SYSTEM', 'ams-username@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'admin'),
(24, 'ENROLLMENT', 'enr-username@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'admin'),
(25, 'REGISTRAR', 'reg-username@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'admin'),
(26, 'HUMAN RESOURCE', 'hr-username@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'admin'),
(27, 'FINANCIALS', 'fcn-username@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'admin'),
(28, 'PAYMENT MANAGEMENT SYSTEM', 'pms-username@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'admin'),
(29, 'PROPERTY CUSTODIAN', 'pc-username@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'admin'),
(30, 'STUDENT PORTAL', 'sp-username@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'admin'),
(31, 'CRAD', 'cra-username@gmail.com', 'ec6a6536ca304edf844d1d248a4f08dc', 'admin'),
(32, 'PREFECT OF DISCIPLINE', 'pof-username@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'admin'),
(34, 'SAFETY AND SECURITY', 'sas-username@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'admin'),
(35, 'CLINIC', 'cli-username@gmail.com', 'ec6a6536ca304edf844d1d248a4f08dc', 'admin'),
(36, 'GUIDANCE', 'gui-username@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'admin'),
(37, 'EVENT MANAGEMENT SYSTEM', 'ems-username@gmail.com', 'ec6a6536ca304edf844d1d248a4f08dc', 'admin'),
(38, 'MANAGEMENT INFORMATION SYSTEM', 'mis-username@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'admin'),
(39, 'LOGISTIC MANAGEMENT SYSTEM', 'log-username@gmail.com', '2e99bf4e42962410038bc6fa4ce40d97', 'admin'),
(40, 'QUALITY ASSURANCE', 'qa-username@gmail.com', '2e99bf4e42962410038bc6fa4ce40d97', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userss`
--
ALTER TABLE `userss`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userss`
--
ALTER TABLE `userss`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
