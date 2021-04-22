-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2021 at 01:05 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tp4`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_isi`
--

CREATE TABLE `tb_isi` (
  `id` int(10) NOT NULL,
  `name_td` varchar(255) NOT NULL,
  `address_td` text NOT NULL,
  `name_train_td` varchar(255) NOT NULL,
  `class_td` varchar(255) NOT NULL,
  `date_td` date NOT NULL,
  `checkin_td` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_isi`
--

INSERT INTO `tb_isi` (`id`, `name_td`, `address_td`, `name_train_td`, `class_td`, `date_td`, `checkin_td`) VALUES
(1, 'Bambang', 'Jl. Herlambang No.6 Cicalengka', 'Argo Wilis', 'Eksekutif', '2021-04-22', 'Sudah'),
(2, 'Retno Sri', 'Kp.Cangkring RT 02/07 Bandung', 'Taksaka', 'Ekonomi', '2021-04-28', 'Belum'),
(4, 'Agus Pratama', 'Lembang', 'Logawa', 'Bisnis', '2021-05-01', 'Belum'),
(7, 'Blabla', 'Jl. GegerKalong No.54 Bandung', 'Taksaka', 'Ekonomi', '2021-05-08', 'Sudah'),
(8, 'Regi Ismail', 'Bandung', 'Logawa', 'Eksekutif', '2021-04-023', 'Sudah'),
(9, 'Dwi Susono', 'Desa Ciwuruk RT 04/04 Kec. Pameunpeuk Kab. Bandung', 'Argo Wilis', 'Bisnis', '2021-05-04', 'Belum'),
(10, 'Atep Supratman', 'Komplek Permai No.6 Dago', 'Taksaka', 'Ekonomi', '2021-04-22', 'Belum'),
(11, 'Haikal Firmansyah', 'Komplek Bersama No. 7 RT 05/11 Tegalega', 'Logawa', 'Premium', '2021-04-30', 'Belum');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_isi`
--
ALTER TABLE `tb_isi`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_isi`
--
ALTER TABLE `tb_isi`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
