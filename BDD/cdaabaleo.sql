SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Base de données : `cdaabaleo`
--

-- --------------------------------------------------------

CREATE DATABASE `CDAABALEO`;
USE `CDAABALEO`;

--
-- Structure de la table `ville`
--

DROP TABLE IF EXISTS `ville`;
CREATE TABLE IF NOT EXISTS `ville` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `dep` varchar(30) NOT NULL,
  `cp` int(5) NOT NULL,
  `datemodif` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ville`
--

INSERT INTO `ville` (`id`, `nom`, `dep`, `cp`, `datemodif`) VALUES
(1, 'Amiens', 'Somme', 80000, '2021-09-06 14:04:23'),
(2, 'Lyon', 'Rhône', 69000, '2021-09-06 14:08:16'),
(3, 'Nantes', 'Loire-Atlantique', 44000, '2021-09-06 16:34:15'),
(4, 'Marseille', 'Bouches-du-Rhône', 13000, '2021-09-06 16:34:15');
COMMIT;
