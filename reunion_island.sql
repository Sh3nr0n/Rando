SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données: `reunion_island`
--
CREATE DATABASE IF NOT EXISTS `reunion_island` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `reunion_island`;

-- --------------------------------------------------------

--
-- Structure de la table `hiking`
--

DROP TABLE IF EXISTS `hiking`;
CREATE TABLE IF NOT EXISTS `hiking` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `difficulty` enum('très facile','facile','moyen','difficile','très difficile') NOT NULL,
  `distance` int(11) NOT NULL COMMENT 'in km',
  `duration` time NOT NULL,
  `height_difference` int(6) NOT NULL COMMENT 'in m',
  `available` Boolean NOT NULL Default 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

INSERT INTO `hiking` (`name`, `difficulty`, `distance`, `duration`, `height_difference`)
VALUES  ('Le tour du Morne Langevin', 'très facile', '7km', '5:00:00', '350m'),
        ('Une boucle à Granite Gorge', 'facile', '2.8km', '1:30:00', '-'),
        ('De la Plaine des Sables au Piton de Bert', 'moyen', '13km', '3:30:00', '140m'),
        ('De Saint-Joseph au Nez de Boeuf par Roche Plate', 'difficile', '24.5km', '7:30:00', '2150m'),
        ('La Forêt du Tapcal depuis l\'Ilet Totor', 'très difficile', '7.5km', '6:15:00', '720m');