Create Database: `aplikasisampel2`;
CREATE TABLE `login` (
  `IdPetugas` varchar(20) NOT NULL,
  `NamaPetugas` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
INSERT INTO `login` (`IdPetugas`, `NamaPetugas`, `Password`) VALUES
('1', 'Admin', '4Dm1n');
