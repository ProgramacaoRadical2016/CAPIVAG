-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Tempo de geração: 15/11/2016 às 04:08
-- Versão do servidor: 5.5.51-38.2
-- Versão do PHP: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de dados: `redco269_clinica`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `atendimentos`
--

CREATE TABLE IF NOT EXISTS `atendimentos` (
  `id_atend` int(11) NOT NULL,
  `nomepaciente_atend` varchar(255) NOT NULL,
  `dtcadastro_atend` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dtconsulta_atend` timestamp NULL DEFAULT NULL,
  `nomemedico_atend` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `atendimentos`
--

INSERT INTO `atendimentos` (`id_atend`, `nomepaciente_atend`, `dtcadastro_atend`, `dtconsulta_atend`, `nomemedico_atend`) VALUES
(1, 'Alesi', '2016-11-15 02:00:00', '2016-11-15 02:00:00', '1'),
(2, 'Alesi Henrique da Silva', '2016-11-15 05:43:05', '2016-11-01 02:00:00', 'Dr. Carlos Andreazza');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usu` int(11) NOT NULL,
  `login_usu` varchar(50) NOT NULL,
  `senha_usu` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usu`, `login_usu`, `senha_usu`) VALUES
(1, 'admin', 'admin');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `atendimentos`
--
ALTER TABLE `atendimentos`
  ADD PRIMARY KEY (`id_atend`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usu`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `atendimentos`
--
ALTER TABLE `atendimentos`
  MODIFY `id_atend` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usu` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
