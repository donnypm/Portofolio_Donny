-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 12 Nov 2020 pada 14.31
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `HDS`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact_me`
--

CREATE TABLE `contact_me` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `contact_me`
--

INSERT INTO `contact_me` (`id`, `email`, `pesan`) VALUES
(1, 'donnypramudia04@gmail.com', 'Test dulu ya kawan '),
(2, 'primaputra@gmail.com', 'Saya mau menghubungi anda');

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact_me_project`
--

CREATE TABLE `contact_me_project` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `contact_me_project`
--

INSERT INTO `contact_me_project` (`id`, `email`, `pesan`) VALUES
(1, 'donnypramudia04@gmail.com', 'Test aja kawan'),
(2, 'donnypramudia04@gmail.com', 'HDS IS EASY'),
(3, 'donnypramudia04@gmail.com', 'testtt');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `contact_me`
--
ALTER TABLE `contact_me`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `contact_me_project`
--
ALTER TABLE `contact_me_project`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `contact_me`
--
ALTER TABLE `contact_me`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `contact_me_project`
--
ALTER TABLE `contact_me_project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
