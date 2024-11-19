-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2024 at 04:31 AM
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
-- Database: `post office`
--

-- --------------------------------------------------------

--
-- Table structure for table `post office_a`
--

CREATE TABLE `post office_a` (
  `firstname_a` varchar(200) NOT NULL,
  `lastname_a` varchar(200) NOT NULL,
  `phonenumber_a` int(20) NOT NULL,
  `name_a` varchar(200) NOT NULL,
  `province_a` varchar(200) NOT NULL,
  `district_a` varchar(200) NOT NULL,
  `Subdistrict_a` varchar(200) NOT NULL,
  `s_a` int(20) NOT NULL,
  `o_a` date NOT NULL,
  `firstname_b` varchar(200) NOT NULL,
  `lastname_b` varchar(200) NOT NULL,
  `phonenumber_b` int(20) NOT NULL,
  `name_b` varchar(200) NOT NULL,
  `province_b` varchar(200) NOT NULL,
  `district_b` varchar(200) NOT NULL,
  `Subdistrict_b` varchar(200) NOT NULL,
  `s_b` int(20) NOT NULL,
  `o_b` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
