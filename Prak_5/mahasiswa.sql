-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2022 at 10:44 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugas`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` bigint(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `prodi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `prodi`) VALUES
(120140000, 'Rdsadf', 'Teknik Geologi'),
(120140012, 'gdhdf', 'Teknik Mesin'),
(120140015, 'Rsadf', 'Teknik Mesin'),
(120140016, 'tomu', 'Teknik Mesin'),
(120140018, 'parsi', 'Teknik Mesin'),
(120140111, 'Riyan', 'Teknik Elektro'),
(120140112, 'sadfas', 'Teknik Geofisika'),
(120140115, 'sirna', 'Teknik Geofisika'),
(120140117, 'ahmad', 'Teknik Geologi'),
(120140119, 'dota', 'Teknik Informatika'),
(120140121, 'zoin', 'Teknik Informatika'),
(120140210, 'Risadf', 'Teknik Geofisika'),
(120140211, 'Rsdf', 'Teknik Elektro'),
(120140212, 'Riyan', 'Teknik Informatika'),
(120140213, 'haris', 'Teknik Informatika'),
(120140214, 'domi', 'Teknik Geologi'),
(120140215, 'Rsdfas', 'Teknik Geologi'),
(120140220, 'irwan', 'Teknik Geofisika'),
(120140222, 'Rfds', 'Teknik Elektro'),
(120140223, 'Rsdf', 'Teknik Elektro'),
(120140224, 'Rdsadf', 'Teknik Geologi'),
(120140228, 'Rfds', 'Teknik Elektro'),
(120150000, 'folan', 'Teknik Elektro'),
(120150666, 'folan', 'Teknik Elektro');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
