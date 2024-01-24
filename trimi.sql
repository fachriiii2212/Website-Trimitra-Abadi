-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Jun 2022 pada 15.41
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `company_profile`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `jabatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `jabatan`) VALUES
(1, 'Komisaris Utama\r\n'),
(3, 'Komisaris'),
(5, 'Direktur Utama'),
(7, 'Wakil Direktur Utama'),
(9, 'Direktur Keuangan & Investasi'),
(11, 'Direktur Pemasaran'),
(13, 'Direktur SDM & Tata Kelola'),
(15, 'Direktur Produksi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jajaran`
--

CREATE TABLE `jajaran` (
  `id_jajaran` int(11) NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jajaran`
--

INSERT INTO `jajaran` (`id_jajaran`, `id_jabatan`, `foto`, `nama`) VALUES
(1, 9, '31935468_226625218097593_6127628578482814976_n.jpg', 'Allie Sinkula '),
(3, 7, 'Capture.PNG', 'Yola Valery'),
(4, 13, '165395018_434433797621551_2282056178087387331_n.jpg', 'Vanessa Breitne');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil`
--

CREATE TABLE `profil` (
  `id_profil` int(11) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `profil`
--

INSERT INTO `profil` (`id_profil`, `isi`) VALUES
(1, '<p>Perusahaan nasional berkelas dunia untuk nutrisi tanaman dan solusi pertanian yang berkelanjutan serta mampu memberikan dampak ekonomi dan sosial secara nasional.</p>\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `recruitment`
--

CREATE TABLE `recruitment` (
  `id_recruit` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ttl` date NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `tahun_lulus` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `recruitment`
--

INSERT INTO `recruitment` (`id_recruit`, `nama`, `alamat`, `email`, `ttl`, `jabatan`, `tahun_lulus`) VALUES
(2, 'Budi Santoso', 'Jl.Kaliurang 24', 'Budis@email.com', '1992-05-13', 'IT Suppport', '2008-01-11'),
(3, 'Fachri', 'Malang', 'email', '2001-01-01', 'It', '2021-09-09'),
(4, 'Fachri Imanudin hidayat', 'Jalan Raya Lemah Kemvar', 'imanudinfachri2212@gmail.com', '2001-10-10', 'IT', '2021-10-10'),
(8, 'Fauzan Athallah', 'Jalan Raya Lemah Kemvar', 'imanudinfachri2212@gmail.com', '0000-00-00', 'Admin', '2021-10-10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sejarah`
--

CREATE TABLE `sejarah` (
  `id_sejarah` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sejarah`
--

INSERT INTO `sejarah` (`id_sejarah`, `id_user`, `judul`, `isi`) VALUES
(2, 1, 'Sejarah Perusahaan', 'PT Pupuk Indonesia (Persero) adalah Badan Usaha Milik Negara (BUMN) yang melaksanakan kegiatan usaha utama sebagai berikut:\r\n\r\n \r\n\r\na. Perdagangan\r\n\r\nMenyelenggarakan kegiatan distribusi dan perdagangan pada umumnya termasuk ekspor, impor, lokal dan interinsulair, bahan baku, bahan penolong/pembantu, peralatan produksi di bidang perpupukan, petrokimia, agrokimia, agroindustri dan kimia lainnya.\r\n\r\n \r\n\r\nb. Jasa Pengelolaan Perusahaan dan Jasa Konsultasi Manajemen\r\n\r\n \r\n\r\nc. Jasa Lainnya\r\n\r\nMelaksanakan studi penelitian, pendidikan, pengembangan, desain engineering, pengantongan (bagging station), konstruksi manajemen, pengoperasian pabrik, perbaikan, reparasi, pemeliharaan, konsultasi (kecuali konsultasi bidang hukum) dan jasa teknis lainnya dalam sektor industri pupuk, petrokimia, industri kimia lainnya serta jasa dalam bidang pertanian dan perkebunan.\r\n\r\n \r\n\r\nSelain kegiatan usaha utama sebagaimana tersebut, Perseroan dapat melakukan kegiatan usaha:\r\n\r\nKegiatan Penunjang Kegiatan Utama berupa: Pengangkutan Menjalankan kegiatan-kegiatan usaha dalam bidang angkutan, ekspedisi dan pergudangan serta kegiatan lainnya yang merupakan sarana perlengkapan guna melancarkan dan melaksanakan kegiatan-kegiatan usaha tersebut.\r\nMelaksanakan penugasan Pemerintah sesuai dengan prinsip-prinsip pengelolaan perusahaan dan peraturan perundang-undangan.\r\n \r\n\r\nPada tanggal 3 April 2012, sebagai Investment and Strategic Holding, nama Perusahaan resmi menjadi PT Pupuk Indonesia (Persero).'),
(7, 1, 'Kedua', '<p>Sejarah runtuhnya perusahaan ini</p>\r\n\r\n<p>&nbsp;</p>\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `level` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `password`, `username`, `level`, `foto`) VALUES
(1, 'Agassi', 'agassi@email.com', '869e6b24288603dff00067ac9365b913', 'agassi', 'Superadmin', '143354154_4225153247498786_1305204207012065109_n.jpg'),
(6, 'Allie', 'allie@email.com', 'd41d8cd98f00b204e9800998ecf8427e', 'allie', 'Superadmin', '31935468_226625218097593_6127628578482814976_n.jpg'),
(7, 'Harun', 'harun@email.com', '6a144723835bf8d2ca3241a6535d3cff', 'harun', 'Superadmin', '84ba255f318da989ec750011840ef230.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indeks untuk tabel `jajaran`
--
ALTER TABLE `jajaran`
  ADD PRIMARY KEY (`id_jajaran`),
  ADD UNIQUE KEY `id_jabatan` (`id_jabatan`),
  ADD UNIQUE KEY `id_jabatan_2` (`id_jabatan`);

--
-- Indeks untuk tabel `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indeks untuk tabel `recruitment`
--
ALTER TABLE `recruitment`
  ADD PRIMARY KEY (`id_recruit`);

--
-- Indeks untuk tabel `sejarah`
--
ALTER TABLE `sejarah`
  ADD PRIMARY KEY (`id_sejarah`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `jajaran`
--
ALTER TABLE `jajaran`
  MODIFY `id_jajaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `profil`
--
ALTER TABLE `profil`
  MODIFY `id_profil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `recruitment`
--
ALTER TABLE `recruitment`
  MODIFY `id_recruit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `sejarah`
--
ALTER TABLE `sejarah`
  MODIFY `id_sejarah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `jajaran`
--
ALTER TABLE `jajaran`
  ADD CONSTRAINT `jajaran_ibfk_1` FOREIGN KEY (`id_jabatan`) REFERENCES `jabatan` (`id_jabatan`);

--
-- Ketidakleluasaan untuk tabel `sejarah`
--
ALTER TABLE `sejarah`
  ADD CONSTRAINT `sejarah_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
