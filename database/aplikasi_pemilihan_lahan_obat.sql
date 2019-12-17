-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 16, 2019 at 03:54 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aplikasi_pemilihan_lahan_obat`
--

-- --------------------------------------------------------

--
-- Table structure for table `factor`
--

CREATE TABLE `factor` (
  `id_factor` int(50) NOT NULL,
  `nama_factor` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bobot_factor` double NOT NULL,
  `id_user` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `factor`
--

INSERT INTO `factor` (`id_factor`, `nama_factor`, `bobot_factor`, `id_user`) VALUES
(3, 'cf', 0.55, 1),
(4, 'sf', 0.45, 1);

-- --------------------------------------------------------

--
-- Table structure for table `id_sub_kriteria_user`
--

CREATE TABLE `id_sub_kriteria_user` (
  `id_sub_kriteria_user` int(50) NOT NULL,
  `id_factor` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` int(50) NOT NULL,
  `id_sub_kriteria` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `id_sub_kriteria_user`
--

INSERT INTO `id_sub_kriteria_user` (`id_sub_kriteria_user`, `id_factor`, `id_user`, `id_sub_kriteria`) VALUES
(1, 'cf', 1, 1),
(2, 'cf', 1, 2),
(3, 'sf', 1, 3),
(4, 'cf', 1, 4),
(5, 'sf', 1, 5),
(6, 'cf', 1, 6),
(7, 'cf', 1, 7),
(8, 'sf', 1, 8),
(9, 'cf', 1, 9),
(10, 'sf', 1, 10);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_tanaman`
--

CREATE TABLE `jenis_tanaman` (
  `id_tanaman` int(50) NOT NULL,
  `nama_tanaman` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jenis_tanaman`
--

INSERT INTO `jenis_tanaman` (`id_tanaman`, `nama_tanaman`) VALUES
(1, 'Jahe'),
(2, 'Tumulawak'),
(3, 'Kencur'),
(4, 'Kapulaga'),
(5, 'Kunyit');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` int(50) NOT NULL,
  `nama_kriteria` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `nama_kriteria`) VALUES
(1, 'Jarak'),
(2, 'Lokasi'),
(3, 'Iklim');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria_user`
--

CREATE TABLE `kriteria_user` (
  `id_kriteria_user` int(50) NOT NULL,
  `id_kriteria` int(50) NOT NULL,
  `bobot_kriteria` double NOT NULL,
  `id_user` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kriteria_user`
--

INSERT INTO `kriteria_user` (`id_kriteria_user`, `id_kriteria`, `bobot_kriteria`, `id_user`) VALUES
(1, 1, 0.4, 1),
(2, 2, 0.35, 1),
(3, 3, 0.25, 1);

-- --------------------------------------------------------

--
-- Table structure for table `lahan`
--

CREATE TABLE `lahan` (
  `id_lahan` int(50) NOT NULL,
  `id_user` int(50) NOT NULL,
  `nama_lahan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_tanaman` int(50) NOT NULL,
  `hasil` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lahan`
--

INSERT INTO `lahan` (`id_lahan`, `id_user`, `nama_lahan`, `id_tanaman`, `hasil`) VALUES
(10, 1, 'lahan1', 1, 0),
(11, 1, 'lahan2', 1, 0),
(12, 1, 'lahan3', 1, 0),
(13, 1, 'lahan4', 1, 0),
(14, 1, 'lahan5', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `options_kriteria`
--

CREATE TABLE `options_kriteria` (
  `id_options` int(50) NOT NULL,
  `options` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bobot` int(50) NOT NULL,
  `id_sub_kriteria` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `options_kriteria`
--

INSERT INTO `options_kriteria` (`id_options`, `options`, `bobot`, `id_sub_kriteria`) VALUES
(1, '<500', 4, 1),
(2, '501-1000', 3, 1),
(3, '1000-2000', 2, 1),
(4, '2000<', 1, 1),
(5, '<500', 4, 2),
(6, '501-1000', 3, 2),
(7, '1000-2000', 2, 2),
(8, '2000<', 1, 2),
(9, '<500', 4, 3),
(10, '501-1000', 3, 3),
(11, '1000-2000', 2, 3),
(12, '2000<', 1, 3),
(13, '<10m2', 1, 4),
(14, '11-50m2', 2, 4),
(15, '50-100m2', 3, 4),
(16, '100m2<', 4, 4),
(17, '<100', 5, 5),
(18, '100-250', 4, 5),
(19, '251-500', 3, 5),
(20, '501-1000', 2, 5),
(21, '1000<', 1, 5),
(22, 'Gembur', 3, 6),
(23, 'Lempung', 2, 6),
(24, 'Pasir', 1, 6),
(25, '20jt<', 1, 7),
(26, '5jt-10jt', 3, 7),
(27, '10jt-20jt', 2, 7),
(28, '<20jt', 1, 7),
(29, '20-30 C', 3, 8),
(30, '30-40 C', 2, 8),
(31, '40-45 C', 1, 8),
(32, '5-10 C', 1, 9),
(33, '10-15 C', 2, 9),
(34, '15-20 C', 3, 9),
(35, 'Tinggi', 1, 10),
(36, 'Sedang', 2, 10),
(37, 'Rendah', 3, 10);

-- --------------------------------------------------------

--
-- Table structure for table `pilihan_user`
--

CREATE TABLE `pilihan_user` (
  `id_pilihan_user` int(50) NOT NULL,
  `id_kriteria` int(50) NOT NULL,
  `id_sub_kriteria` int(50) NOT NULL,
  `id_options` int(50) NOT NULL,
  `id_lahan` int(50) NOT NULL,
  `fuzzy_user` float NOT NULL,
  `bobotSelisihUser` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pilihan_user`
--

INSERT INTO `pilihan_user` (`id_pilihan_user`, `id_kriteria`, `id_sub_kriteria`, `id_options`, `id_lahan`, `fuzzy_user`, `bobotSelisihUser`) VALUES
(17, 1, 1, 3, 10, 0.333333, 8),
(18, 1, 2, 6, 10, 0.666667, 8),
(19, 1, 3, 12, 10, 0, 11),
(20, 2, 4, 15, 10, 0.666667, 8.5),
(21, 2, 5, 17, 10, 1, 8.5),
(22, 2, 6, 24, 10, 0, 6),
(23, 2, 7, 27, 10, 0.333333, 4),
(24, 3, 8, 30, 10, 0.5, 6),
(25, 3, 9, 32, 10, 0, 1),
(26, 3, 10, 36, 10, 0.5, 11),
(27, 1, 1, 1, 11, 1, 8.5),
(28, 1, 2, 6, 11, 0.666667, 8),
(29, 1, 3, 11, 11, 0.333333, 8.5),
(30, 2, 4, 15, 11, 0.666667, 8.5),
(31, 2, 5, 21, 11, 0, 3),
(32, 2, 6, 24, 11, 0, 6),
(33, 2, 7, 25, 11, 1, 11),
(34, 3, 8, 30, 11, 0.5, 6),
(35, 3, 9, 32, 11, 0, 1),
(36, 3, 10, 36, 11, 0.5, 11),
(37, 1, 1, 4, 12, 0, 4),
(38, 1, 2, 8, 12, 0, 1),
(39, 1, 3, 10, 12, 0.666667, 4.5),
(40, 2, 4, 13, 12, 0, 8),
(41, 2, 5, 20, 12, 0.25, 6),
(42, 2, 6, 23, 12, 0.5, 11),
(43, 2, 7, 26, 12, 0.666667, 8),
(44, 3, 8, 31, 12, 0, 1),
(45, 3, 9, 33, 12, 0.5, 6),
(46, 3, 10, 35, 12, 0, 6),
(47, 1, 1, 3, 13, 0.333333, 8),
(48, 1, 2, 6, 13, 0.666667, 8),
(49, 1, 3, 10, 13, 0.666667, 4.5),
(50, 2, 4, 14, 13, 0.333333, 11),
(51, 2, 5, 20, 13, 0.25, 6),
(52, 2, 6, 22, 13, 1, 6.5),
(53, 2, 7, 28, 13, 0, 1),
(54, 3, 8, 30, 13, 0.5, 6),
(55, 3, 9, 34, 13, 1, 11),
(56, 3, 10, 35, 13, 0, 6),
(57, 1, 1, 1, 14, 1, 8.5),
(58, 1, 2, 7, 14, 0.333333, 4),
(59, 1, 3, 12, 14, 0, 11),
(60, 2, 4, 16, 14, 1, 4.5),
(61, 2, 5, 19, 14, 0.5, 8),
(62, 2, 6, 22, 14, 1, 6.5),
(63, 2, 7, 25, 14, 0, 1),
(64, 3, 8, 30, 14, 0.5, 6),
(65, 3, 9, 32, 14, 0, 1),
(66, 3, 10, 35, 14, 0, 6);

-- --------------------------------------------------------

--
-- Table structure for table `selisih_bobot`
--

CREATE TABLE `selisih_bobot` (
  `id_selisih` int(50) NOT NULL,
  `selisih` double NOT NULL,
  `bobot` double NOT NULL,
  `id_tanaman` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `selisih_bobot`
--

INSERT INTO `selisih_bobot` (`id_selisih`, `selisih`, `bobot`, `id_tanaman`) VALUES
(1, 0, 11, 1),
(2, 0.1, 10.5, 1),
(3, -0.1, 10, 1),
(4, 0.2, 9.5, 1),
(5, -0.2, 9, 1),
(6, 0.3, 8.5, 1),
(7, -0.3, 8, 1),
(8, 0.4, 7.5, 1),
(9, -0.4, 7, 1),
(10, 0.5, 6.5, 1),
(11, -0.5, 6, 1),
(12, 0.6, 5.5, 1),
(13, -0.6, 5, 1),
(14, 0.7, 4.5, 1),
(15, -0.7, 4, 1),
(16, 0.8, 3.5, 1),
(17, -0.8, 3, 1),
(18, 0.9, 2.5, 1),
(19, -0.9, 2, 1),
(20, 1, 1.5, 1),
(21, -1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sub_kriteria`
--

CREATE TABLE `sub_kriteria` (
  `id_sub_kriteria` int(50) NOT NULL,
  `nama_sub_kriteria` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_kriteria` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_kriteria`
--

INSERT INTO `sub_kriteria` (`id_sub_kriteria`, `nama_sub_kriteria`, `id_kriteria`) VALUES
(1, 'Jarak Lahan dengan petani (meter)', 1),
(2, 'Jarak lahan dengan pasar (meter)', 1),
(3, 'Jarak lahan dengan pemukiman (meter)', 1),
(4, 'Luas Tanah (m2)', 3),
(5, 'Ketinggian Tanah (mdpl)', 3),
(6, 'Jenis Tanah', 3),
(7, 'Harga Tanah', 3),
(8, 'Panas', 2),
(9, 'Dingin', 2),
(10, 'Curah Hujan', 2);

-- --------------------------------------------------------

--
-- Table structure for table `target_lahan`
--

CREATE TABLE `target_lahan` (
  `id_target` int(50) NOT NULL,
  `id_tanaman` int(50) NOT NULL,
  `id_kriteria` int(50) NOT NULL,
  `id_sub_kriteria` int(50) NOT NULL,
  `id_options` int(50) NOT NULL,
  `id_factor` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fuzzy` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `target_lahan`
--

INSERT INTO `target_lahan` (`id_target`, `id_tanaman`, `id_kriteria`, `id_sub_kriteria`, `id_options`, `id_factor`, `fuzzy`) VALUES
(11, 1, 1, 1, 2, 'cf', 0.66666666666667),
(12, 1, 1, 2, 5, 'cf', 1),
(13, 1, 1, 3, 12, 'sf', 0),
(14, 1, 2, 4, 14, 'cf', 0.33333333333333),
(15, 1, 2, 5, 18, 'sf', 0.75),
(16, 1, 2, 6, 23, 'cf', 0.5),
(17, 1, 2, 7, 25, 'cf', 1),
(18, 1, 3, 8, 29, 'sf', 1),
(19, 1, 3, 9, 34, 'cf', 1),
(20, 1, 3, 10, 36, 'sf', 0.5);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(50) NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(1, 'syarif', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `factor`
--
ALTER TABLE `factor`
  ADD PRIMARY KEY (`id_factor`);

--
-- Indexes for table `id_sub_kriteria_user`
--
ALTER TABLE `id_sub_kriteria_user`
  ADD PRIMARY KEY (`id_sub_kriteria_user`);

--
-- Indexes for table `jenis_tanaman`
--
ALTER TABLE `jenis_tanaman`
  ADD PRIMARY KEY (`id_tanaman`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `kriteria_user`
--
ALTER TABLE `kriteria_user`
  ADD PRIMARY KEY (`id_kriteria_user`);

--
-- Indexes for table `lahan`
--
ALTER TABLE `lahan`
  ADD PRIMARY KEY (`id_lahan`);

--
-- Indexes for table `options_kriteria`
--
ALTER TABLE `options_kriteria`
  ADD PRIMARY KEY (`id_options`);

--
-- Indexes for table `pilihan_user`
--
ALTER TABLE `pilihan_user`
  ADD PRIMARY KEY (`id_pilihan_user`);

--
-- Indexes for table `selisih_bobot`
--
ALTER TABLE `selisih_bobot`
  ADD PRIMARY KEY (`id_selisih`);

--
-- Indexes for table `sub_kriteria`
--
ALTER TABLE `sub_kriteria`
  ADD PRIMARY KEY (`id_sub_kriteria`);

--
-- Indexes for table `target_lahan`
--
ALTER TABLE `target_lahan`
  ADD PRIMARY KEY (`id_target`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `factor`
--
ALTER TABLE `factor`
  MODIFY `id_factor` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `id_sub_kriteria_user`
--
ALTER TABLE `id_sub_kriteria_user`
  MODIFY `id_sub_kriteria_user` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `jenis_tanaman`
--
ALTER TABLE `jenis_tanaman`
  MODIFY `id_tanaman` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kriteria_user`
--
ALTER TABLE `kriteria_user`
  MODIFY `id_kriteria_user` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lahan`
--
ALTER TABLE `lahan`
  MODIFY `id_lahan` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `options_kriteria`
--
ALTER TABLE `options_kriteria`
  MODIFY `id_options` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `pilihan_user`
--
ALTER TABLE `pilihan_user`
  MODIFY `id_pilihan_user` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `selisih_bobot`
--
ALTER TABLE `selisih_bobot`
  MODIFY `id_selisih` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `sub_kriteria`
--
ALTER TABLE `sub_kriteria`
  MODIFY `id_sub_kriteria` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `target_lahan`
--
ALTER TABLE `target_lahan`
  MODIFY `id_target` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
