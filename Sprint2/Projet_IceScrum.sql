-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mar 16 Mai 2023 à 13:49
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet_icescrum`
--

-- --------------------------------------------------------

--
-- Structure de la table `t_developpeur`
--

CREATE TABLE `t_developpeur` (
  `idDeveloppeur` int(11) NOT NULL,
  `devSnapchat` varchar(20) DEFAULT NULL,
  `devInstagram` varchar(20) DEFAULT NULL,
  `devMailPro` varchar(254) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `t_developpeur`
--

INSERT INTO `t_developpeur` (`idDeveloppeur`, `devSnapchat`, `devInstagram`, `devMailPro`) VALUES
(1, 'alan_bitter', 'alan_b', 'alan.bitter@icloud.com'),
(2, 'lucas_karawa,', 'lucas_k"', 'lucas.karawa@icloud.com'),
(3, 'amir_zeqiri', 'amir_z', 'amir.zeqiri@icloud.com'),
(4, 'rui_roque', 'rui_r', 'rui.roque@icloud.com');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `t_developpeur`
--
ALTER TABLE `t_developpeur`
  ADD PRIMARY KEY (`idDeveloppeur`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `t_developpeur`
--
ALTER TABLE `t_developpeur`
  MODIFY `idDeveloppeur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
