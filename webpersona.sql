-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 19 Mei 2016 pada 15.15
-- Versi Server: 5.5.27
-- Versi PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `webpersona`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_admin`
--

CREATE TABLE IF NOT EXISTS `daftar_admin` (
  `Nama` text NOT NULL,
  `ID` varchar(100) NOT NULL,
  `Password` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `daftar_admin`
--

INSERT INTO `daftar_admin` (`Nama`, `ID`, `Password`) VALUES
('Maulana Fauzi A', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_pembeli`
--

CREATE TABLE IF NOT EXISTS `daftar_pembeli` (
  `ID_pemesan` int(100) NOT NULL AUTO_INCREMENT,
  `Nama` text NOT NULL,
  `Nomor_Kontak_Email` varchar(100) NOT NULL,
  `Jumlah_Barang` int(100) NOT NULL,
  `Nomor_Rekening` varchar(100) NOT NULL,
  `Alamat` text NOT NULL,
  `Tanggal` date NOT NULL,
  `Status_pembayaran` varchar(100) NOT NULL,
  PRIMARY KEY (`ID_pemesan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data untuk tabel `daftar_pembeli`
--

INSERT INTO `daftar_pembeli` (`ID_pemesan`, `Nama`, `Nomor_Kontak_Email`, `Jumlah_Barang`, `Nomor_Rekening`, `Alamat`, `Tanggal`, `Status_pembayaran`) VALUES
(7, 'Alan', 'alan@gmail.com', 2, 'alan@gmail.com', 'Jl Raya Cibeureum No.67', '2016-05-18', 'Lunas'),
(11, 'Abdul', 'Adbul@gmail.com', 4, 'Adbul@gmail.com', 'Jl Ksatria No 51', '2016-05-19', 'Belum Lunas');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
