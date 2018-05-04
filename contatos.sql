-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 04-Maio-2018 às 07:48
-- Versão do servidor: 5.7.21
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bancophp`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `contatos`
--

DROP TABLE IF EXISTS `contatos`;
CREATE TABLE IF NOT EXISTS `contatos` (
  `nome` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `assunto` varchar(30) NOT NULL,
  `mensagem` varchar(250) NOT NULL,
  `data_envio` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `contatos`
--

INSERT INTO `contatos` (`nome`, `email`, `assunto`, `mensagem`, `data_envio`) VALUES
('Gabriel Araujo', 'matadoxx@gmail.com', 'Teste', 'Teste mensagem.', '2018-05-04 04:42:16');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
