
CREATE TABLE `dosen` (
  `nip` int(255)  PRIMARY KEY NOT NULL ,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `prodi` varchar(255) NOT NULL,
  `jurusan` varchar(255) NOT NULL,
  `hp` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

