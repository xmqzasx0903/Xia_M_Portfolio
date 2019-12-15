-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 08, 2019 at 10:22 AM
-- Server version: 5.7.26
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_protfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_protfolio`
--

CREATE TABLE `tbl_protfolio` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Type` varchar(30) NOT NULL,
  `Date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_protfolio`
--

INSERT INTO `tbl_protfolio` (`ID`, `Name`, `Type`, `Date`) VALUES
(1, 'TRAA ', 'website', '01 Dec 2019'),
(2, 'Home Secure', 'website', '07 Nov 2019'),
(3, 'Bootcamp', 'website', '02 Oct 2019'),
(4, 'Royal Chickenix', 'Brand Visual Identity System', '17 July 2017'),
(5, 'AiLi advertising', 'Creative poster', '15 Jan 2017'),
(6, 'Wufushun marketing', 'Video', '04 Jan 2016');



--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_protfolio`
--
ALTER TABLE `tbl_protfolio`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_protfolio`
--
ALTER TABLE `tbl_protfolio`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
