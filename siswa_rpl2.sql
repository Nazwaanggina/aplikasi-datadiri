-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Sep 2022 pada 05.06
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siswa_rpl2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `akun_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_akun` varchar(100) NOT NULL,
  `role` enum('admin','teller') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`akun_id`, `username`, `password`, `nama_akun`, `role`) VALUES
(1, 'farelvandin', '1b78b10964f4530a3fe5e5e1a119c3e5', 'Farel Vandin', 'teller'),
(2, 'yoshikardiana', '1b78b10964f4530a3fe5e5e1a119c3e5', 'Yoshi Kardiana', 'teller'),
(3, 'agung', '8b6bc5d8046c8466359d3ac43ce362ab', 'Agung Ganteng', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `datadiri`
--

CREATE TABLE `datadiri` (
  `nis` char(8) NOT NULL,
  `namalengkap` varchar(200) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `nilai` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `datadiri`
--

INSERT INTO `datadiri` (`nis`, `namalengkap`, `tanggal_lahir`, `nilai`) VALUES
('12100303', 'Udinnn', '2003-08-08', 89),
('12100707', 'Satrio ', '2005-08-04', 90);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`akun_id`);

--
-- Indeks untuk tabel `datadiri`
--
ALTER TABLE `datadiri`
  ADD PRIMARY KEY (`nis`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
