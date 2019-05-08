-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2019 at 12:39 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adresar`
--

-- --------------------------------------------------------

--
-- Table structure for table `kontakti`
--

CREATE TABLE `kontakti` (
  `Id` int(11) NOT NULL,
  `Ime` varchar(50) COLLATE utf8_croatian_ci NOT NULL,
  `Adresa` varchar(200) COLLATE utf8_croatian_ci NOT NULL,
  `Grad` varchar(50) COLLATE utf8_croatian_ci NOT NULL,
  `Email` varchar(50) COLLATE utf8_croatian_ci NOT NULL,
  `Spol` char(2) COLLATE utf8_croatian_ci NOT NULL,
  `Prijatelj` char(2) COLLATE utf8_croatian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `kontakti`
--

INSERT INTO `kontakti` (`Id`, `Ime`, `Adresa`, `Grad`, `Email`, `Spol`, `Prijatelj`) VALUES
(1, 'Ivo Ivić', 'Ivanjska ulica 2', 'Rijeka', 'ivo.ivic@gmail.com', 'M', 'Da'),
(2, 'Ana Anić', 'Anina ulica 8', 'Split', 'ana.anic@gmail.com', 'Ž', 'Ne');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kontakti`
--
ALTER TABLE `kontakti`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kontakti`
--
ALTER TABLE `kontakti`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
