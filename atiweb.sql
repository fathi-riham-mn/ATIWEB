-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2023 at 06:14 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atiweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `CourseID` int(11) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `TitleInShort` varchar(255) NOT NULL,
  `Description` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`CourseID`, `Title`, `TitleInShort`, `Description`) VALUES
(1, 'Higher National Diploma in Accountancy', 'HNDA', 'The HNDA holders can start their own careers as a registered auditor and can conduct the audit of companies except for public sector organizations and quoted companies.'),
(2, 'Higher National Diploma in Information Technology', 'HNDIT', 'This course covers a range of information technology topics, including software development, data security, and ethical issues in computing'),
(3, 'Higher National Diploma in English', 'HNDE', 'The HND in English may cover a range of topics related to the English language, literature, and communication skills'),
(4, 'Higher National Diploma in Tourism and Hospitality Management', 'HNDTHM', 'This qualification provides a pathway to work in any hospitality industry sector as a departmental or small business manager. The diversity of employers includes restaurants, hotels, motels, catering operations, clubs, pubs, cafés, and coffee shops.');

-- --------------------------------------------------------

--
-- Table structure for table `lecturer`
--

CREATE TABLE `lecturer` (
  `LecID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Designation` enum('Assistant Lecturer','Lecturer','Senior Lecturer I','Senior Lecturer II') NOT NULL,
  `CourseID` int(11) NOT NULL,
  `Gender` enum('Male','Female') NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lecturer`
--

INSERT INTO `lecturer` (`LecID`, `Name`, `Email`, `Designation`, `CourseID`, `Gender`, `Password`) VALUES
(6, 'Mohamed Nazeer Fathima Riham', 'riham@gmail.com', 'Assistant Lecturer', 1, 'Female', '$2y$10$xQJfZEhEKIShG7D7BEpdr.EDoscdUmaNTb607c2m7ev7z.UMgImPC'),
(7, 'MNF Riham', 'nazeerreeha@gmail.com', 'Lecturer', 2, 'Female', '$2y$10$v0Va1YV60wsFjEfQsJQ8..pLVAg47vA4GOQJEWtk/UDefA8sYJPUq'),
(8, 'admin', 'admin@gmail.com', '', 54, 'Male', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`CourseID`);

--
-- Indexes for table `lecturer`
--
ALTER TABLE `lecturer`
  ADD PRIMARY KEY (`LecID`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `CourseID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `lecturer`
--
ALTER TABLE `lecturer`
  MODIFY `LecID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
