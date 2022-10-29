-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `netflix`
--
-- Estrutura das tabelas
--

CREATE TABLE `titulos` (
  `titulo` varchar(60) NOT NULL,
  `genero` varchar(60) NOT NULL,
  `ano` int(4) NOT NULL,
  `classificacao` int(2) NOT NULL
)

CREATE TABLE `usuarios` (
  `usuario` varchar(60) NOT NULL,
  `senha` varchar(60) NOT NULL
)

 ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Inserir dados nas tabelas
--

INSERT INTO `titulos` (`titulo`, `genero`, `ano`, `classificacao`) VALUES
('Pulp Fiction', 'Crime, Drama', '1994', '18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `titulos`
--
ALTER TABLE `titulos`
  ADD PRIMARY KEY (`tituloID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `titulos`
--
ALTER TABLE `titulos`
  MODIFY `tituloID` int(80) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
