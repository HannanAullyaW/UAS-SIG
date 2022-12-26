-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2022 at 12:34 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gis`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pertanian`
--

CREATE TABLE `pertanian` (
  `idpertanian` int(11) NOT NULL,
  `kategoripertanian` varchar(70) NOT NULL,
  `kecamatanpertanian` varchar(100) NOT NULL,
  `keteranganpertanian` text NOT NULL,
  `latitudepertanian` varchar(100) NOT NULL,
  `longitudepertanian` varchar(100) NOT NULL,
  `lokasipertanian` varchar(100) NOT NULL,
  `idAdmin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pertanian`
--

INSERT INTO `pertanian` (`idpertanian`, `kategoripertanian`, `kecamatanpertanian`, `keteranganpertanian`, `latitudepertanian`, `longitudepertanian`, `lokasipertanian`, `idAdmin`) VALUES
(19, 'kebun teh', 'Aceh', 'frtetwet', '5.051701', '97.318123', 'Acehh', 0),
(20, 'kebun sawit', 'jkaarrta', 'etsetet', '-6.200000', '106.816666', 'jakarta', 0),
(24, 'kebun tebu', 'bali', 'afwafaws', '-8.409518', '115.188919', 'bali', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `idUsers` int(11) NOT NULL,
  `namaLengkap` varchar(150) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `status` enum('admin','users') NOT NULL,
  `md4` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idUsers`, `namaLengkap`, `username`, `password`, `status`, `md4`) VALUES
(1, 'Adminstrator', 'admin', '$2y$10$U73DK4qGu7HDmu6iPv9kB.Ai9EC.mdsJ82XymCKXF/Cwkp4KZ5iEe', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(4, 'aull', 'aullya.hanan', '$2y$10$h46IdbWzflmcUM3ZeCPjTe5JOarg8iaFr9bgMzniTg43bcpeEQc6y', 'admin', '81dc9bdb52d04dc20036dbd8313ed055'),
(5, 'iin', 'iin', '$2y$10$Jhqdxew1gX5hp0Eo1fiBiuj6mPmkqb7Z7/q10Z5V.m0AVlpTpJpAm', 'users', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pertanian`
--
ALTER TABLE `pertanian`
  ADD PRIMARY KEY (`idpertanian`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUsers`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pertanian`
--
ALTER TABLE `pertanian`
  MODIFY `idpertanian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idUsers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
