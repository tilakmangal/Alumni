-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 13, 2023 at 03:50 AM
-- Server version: 5.7.24
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alumni`
--

-- --------------------------------------------------------

--
-- Table structure for table `alum`
--

CREATE TABLE `alum` (
  `Alum_id` int(11) NOT NULL,
  `Name` varchar(32) NOT NULL,
  `Branch` varchar(8) NOT NULL,
  `Graduation_year` int(4) NOT NULL,
  `CGPA` float NOT NULL,
  `Employment` varchar(32) DEFAULT NULL,
  `Education` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `alum`
--

INSERT INTO `alum` (`Alum_id`, `Name`, `Branch`, `Graduation_year`, `CGPA`, `Employment`, `Education`) VALUES
(200001, 'Ananya Reddy', 'Mech', 2020, 9.2, 'Atlacean', 'M.Tech'),
(210001, 'Naina Gupta', 'EE', 2021, 8.5, 'JP Morgan', 'M.Tech'),
(220001, 'Arjun Desai', 'ECE', 2022, 8.23, NULL, 'PHD'),
(250001, 'Tilak Mangal', 'CSE', 2025, 9, 'Google', 'B.Tech'),
(250002, 'Rishi Gupta', 'CSE', 2025, 9, 'Microsoft', 'B.Tech');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Alum_id` int(11) NOT NULL,
  `mobile_no` bigint(11) NOT NULL,
  `email` varchar(32) NOT NULL,
  `linkedin` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Alum_id`, `mobile_no`, `email`, `linkedin`) VALUES
(200001, 9129399456, 'ananya@gmail.com', 'linkedin.com/ananyareddy'),
(210001, 7989695949, 'naina@gmail.com', 'linkedin.com/nainagupta'),
(220001, 9394959697, 'arjun@gmail.com', 'linkedin.com/arjundesai'),
(250001, 7489989470, 'tilak@gmail.com', 'linkedin.com/tilak'),
(250002, 8103963884, 'rishi@gmail.com', 'linkedin.com/rishigupta');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Alum_id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Alum_id`, `username`, `password`) VALUES
(250001, 'tilak', 'root'),
(250002, 'rishi', 'root');

-- --------------------------------------------------------

--
-- Table structure for table `society`
--

CREATE TABLE `society` (
  `s_name` varchar(16) NOT NULL,
  `s_type` varchar(16) NOT NULL,
  `Alum_id` int(11) NOT NULL,
  `position` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `society`
--

INSERT INTO `society` (`s_name`, `s_type`, `Alum_id`, `position`) VALUES
('E-cell', 'Technical', 210001, 'Treasurer'),
('IEEE', 'Technical', 200001, 'Chairperson'),
('IEEE', 'Technical', 250001, 'Aarambh Head'),
('ISTE', 'Technical', 220001, 'General Secretary'),
('ISTE', 'Technical', 250001, 'Event Head'),
('Roobaroo', 'Cultural', 250002, 'Singer');

-- --------------------------------------------------------

--
-- Table structure for table `temp`
--

CREATE TABLE `temp` (
  `Alum_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `temp`
--

INSERT INTO `temp` (`Alum_id`) VALUES
(250001);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alum`
--
ALTER TABLE `alum`
  ADD PRIMARY KEY (`Alum_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`Alum_id`),
  ADD UNIQUE KEY `unique` (`mobile_no`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`Alum_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `society`
--
ALTER TABLE `society`
  ADD PRIMARY KEY (`s_name`,`Alum_id`);

--
-- Indexes for table `temp`
--
ALTER TABLE `temp`
  ADD PRIMARY KEY (`Alum_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
