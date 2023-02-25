-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 25 fév. 2023 à 17:44
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `spotifay`
--

-- --------------------------------------------------------

--
-- Structure de la table `sereses`
--

CREATE TABLE `sereses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name_of_create` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `date_creation` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `sereses`
--

INSERT INTO `sereses` (`id`, `name`, `image`, `name_of_create`, `category`, `date_creation`, `created_at`, `updated_at`) VALUES
(1, 'wxcvbn', 'hjklsdfghj', 'sdfghjk', 'qsdfghjk', 'xcvbnxcvbn', NULL, NULL),
(2, 'MILOUDA KADMAR', 'zze', 'sdfgh', 'dfgbn', 'vbn,', '2023-02-25 15:21:03', '2023-02-25 15:21:03'),
(3, 'MILOUDA KADMAR', 'zze', 'sdfgh', 'dfgbn', 'vbn,', '2023-02-25 15:21:13', '2023-02-25 15:21:13'),
(4, 'sdfghjk', 'sdfghj', 'dfghj', 'dfghj', 'xcfghjklm', '2023-02-25 15:22:24', '2023-02-25 15:22:24'),
(5, 'Js', 'fghjklm', 'qsdfghjkl', 'zertyuiop', '^zertyuio', '2023-02-25 15:37:32', '2023-02-25 15:37:32');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `sereses`
--
ALTER TABLE `sereses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `sereses`
--
ALTER TABLE `sereses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
