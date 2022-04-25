-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 10 avr. 2022 à 14:52
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `m2l`
--

-- --------------------------------------------------------

--
-- Structure de la table `emplois`
--

DROP TABLE IF EXISTS `emplois`;
CREATE TABLE IF NOT EXISTS `emplois` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` text NOT NULL,
  `date_creation` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `emplois`
--

INSERT INTO `emplois` (`id`, `libelle`, `date_creation`) VALUES
(1, 'développeur .Net + SQL', '2021-02-08'),
(2, 'Chef de Projet Technique JAVA/J2EE H/F', '2020-12-08'),
(3, 'Ingénieur Poste de Travail', '2021-03-09'),
(4, 'INGÉNIEUR QA TEST/VVQ (H/F)', '2021-02-19'),
(5, 'développeur HTML', '2021-02-10'),
(6, 'Chef de Projet web', '2020-12-30'),
(7, 'Ingénieur numerique', '2021-03-23'),
(8, 'Data Scientiste ', '2021-02-18');

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(20) NOT NULL,
  `type` text NOT NULL,
  `message` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MRG_MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `date_res` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `salles`
--

DROP TABLE IF EXISTS `salles`;
CREATE TABLE IF NOT EXISTS `salles` (
  `id_salle` int(11) NOT NULL AUTO_INCREMENT,
  `nom_salle` text NOT NULL,
  `disponible` tinyint(1) NOT NULL DEFAULT '0',
  `heuredebut` time DEFAULT NULL,
  `heurefin` time DEFAULT NULL,
  `jour` date DEFAULT NULL,
  `type` varchar(20) NOT NULL,
  `capacite` int(11) NOT NULL,
  PRIMARY KEY (`id_salle`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `salles`
--

INSERT INTO `salles` (`id_salle`, `nom_salle`, `disponible`, `heuredebut`, `heurefin`, `jour`, `type`, `capacite`) VALUES
(1, 'Salle Majorelle', 1, NULL, NULL, NULL, 'reunion', 25),
(2, 'Amphitheatre ', 1, NULL, NULL, NULL, 'Amphitheatre ', 30),
(3, 'Salle Longwy', 1, NULL, NULL, NULL, 'reunion', 4),
(4, 'Salle Daum', 1, NULL, NULL, NULL, 'reunion', 4),
(5, 'Salle multimedia', 1, NULL, NULL, NULL, 'multimedia ', 12),
(6, 'Salle Lamour', 1, NULL, NULL, NULL, 'Reunion', 25),
(7, 'Salle Galle', 1, NULL, NULL, NULL, 'multimedia ', 8),
(8, 'Salle Corbin', 1, NULL, NULL, NULL, 'multimedia', 8),
(9, 'Salle Baccarat', 1, NULL, NULL, NULL, 'reunion', 8),
(10, 'Salle Robert', 1, NULL, NULL, NULL, 'multimedia', 12);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `date_naissance` date NOT NULL,
  `telephone` varchar(15) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `login` varchar(50) NOT NULL,
  `mdp` varchar(50) NOT NULL,
  `cfrm_mdp` varchar(50) NOT NULL,
  PRIMARY KEY (`id_utilisateur`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id_utilisateur`, `nom`, `prenom`, `date_naissance`, `telephone`, `mail`, `login`, `mdp`, `cfrm_mdp`) VALUES
(3, 'Riou', 'Timothée', '2020-10-04', '34556666', 'tim@tim.com', 'timo', 'mdp', 'mdp'),
(4, 'Bacalao', 'Isabella', '2021-03-03', '0766030320', 'isabella@hotmail.com', 'isa ', 'isaisa', 'isaisa'),
(6, 'Guez', 'Frederic', '2020-02-02', '292939939', 'correcteur@gmail.com', 'correcteur', 'correcteur123', 'correcteur123'),
(8, 'darel', 'doudy', '2000-03-25', '096561234564', 'doudy.darel@gmail.com', 'DOUDY123', 'femme1', 'femme1'),
(9, 'jean', 'lasalle', '2022-03-29', '184546542', 'ribertoguez@protonmail.com', 'Jean', 'Azerty95*', 'Azerty95*'),
(10, 'zert', 'zert', '2022-03-03', 'zert', 'zert@gmail.com', 'zert', 'zert', 'zert'),
(14, 'totoche', 'jean', '2022-03-11', '51651', 'sdfgsdfg@gmail.com', 'totoche', '1234', '1234'),
(16, 'test1', 'test1', '2022-03-31', '01', 'test1@gmail.com', 'Test1', '1234', '1234'),
(17, 'test1', 'test1', '2022-03-31', '01', 'test1@gmail.com', 'Test1', '1234', '1234'),
(18, 'test1', 'test1', '2022-03-31', '01', 'test1@gmail.com', 'Test1', '1234', '1234'),
(20, 'douglas', 'riberto', '2022-03-31', '02', 'douglas@gmail.com', 'Douglas', '1234', '1234'),
(21, 'riberto', 'douglas', '2022-04-13', '07', 'riberto@gmail.com', 'riberto', '1234', '1234'),
(22, 'Jean ', 'dd', '2022-04-15', '050151', 'jean@gmail.com', 'Jean', '1234', '1235'),
(23, 'users2', '2', '2022-04-08', '08', 'users2@gmail.com', 'users2', '12', '13'),
(24, 'users3', 's', '2022-04-10', 'd', 'user3@gmail.com', 'users3', '1', '2'),
(25, 'Md', 'Ds', '2022-04-08', '09', 'md@gmail.com', 'Md', '12', '12'),
(26, 'p', 'p', '2022-04-08', '12', 'p@gmail.com', 'p', '12', '12'),
(27, 'x', 'x', '2022-04-10', '3', 'x@gmail.com', 'x', '1', ''),
(28, 'ff', 'dd', '2022-04-13', '09', 'ff@gmail.com', 'dd', '1234', ''),
(29, 'xx', 'cc', '2022-04-22', '06', 'pp@gmail.com', 'pp', '15', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
