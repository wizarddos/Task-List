-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 04 Lis 2020, 10:06
-- Wersja serwera: 10.4.14-MariaDB
-- Wersja PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `zadania`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `id` int(11) NOT NULL,
  `user` text COLLATE utf8_polish_ci NOT NULL,
  `haslo` text COLLATE utf8_polish_ci NOT NULL,
  `tittsk1` text COLLATE utf8_polish_ci NOT NULL,
  `tsk1` text COLLATE utf8_polish_ci NOT NULL,
  `tittsk2` text COLLATE utf8_polish_ci NOT NULL,
  `tsk2` text COLLATE utf8_polish_ci NOT NULL,
  `tittsk3` text COLLATE utf8_polish_ci NOT NULL,
  `tsk3` text COLLATE utf8_polish_ci NOT NULL,
  `tittsk4` text COLLATE utf8_polish_ci NOT NULL,
  `tsk4` text COLLATE utf8_polish_ci NOT NULL,
  `tittsk5` text COLLATE utf8_polish_ci NOT NULL,
  `tsk5` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`id`, `user`, `haslo`, `tittsk1`, `tsk1`, `tittsk2`, `tsk2`, `tittsk3`, `tsk3`, `tittsk4`, `tsk4`, `tittsk5`, `tsk5`) VALUES
(1, 'administrator', '$2y$10$syF4mz/IOuKVTi8rGhFN2uKtWI7fUmpkWQxwAcyhxyH1iaf5N6ff2', 'Lorem Ipsum', 'Lorem ipsum dolor sit amet, consectetur vestibulum tincidunt. Curabitur nisl lectus, posuere sit amet purus nec, tristique semper nisl. Mauris non metus est. Donec egestas scelerisque diam, eu pellentesque massa auctor et. 1', 'Tytuł2', 'Lorem ipsum dolor sit amet, consectetur vestibulum tincidunt. Curabitur nisl lectus, posuere sit amet purus nec, tristique semper nisl. Mauris non metus est. Donec egestas scelerisque diam, eu pellentesque massa auctor et. 2', 'Tytuł3', 'Lorem ipsum dolor sit amet, consectetur vestibulum tincidunt. Curabitur nisl lectus, posuere sit amet purus nec, tristique semper nisl. Mauris non metus est. Donec egestas scelerisque diam, eu pellentesque massa auctor et. 3', 'tytuł4', 'Lorem ipsum dolor sit amet, consectetur vestibulum tincidunt. Curabitur nisl lectus, posuere sit amet purus nec, tristique semper nisl. Mauris non metus est. Donec egestas scelerisque diam, eu pellentesque massa auctor et. 4', 'tytuł5', 'Lorem ipsum dolor sit amet, consectetur vestibulum tincidunt. Curabitur nisl lectus, posuere sit amet purus nec, tristique semper nisl. Mauris non metus est. Donec egestas scelerisque diam, eu pellentesque massa auctor et. 5'),
(2, 'adam', '$2y$10$tG5M9tbtK7wByMe939g1B.3r7KRqVC0XFdODeyYO3vv6tVJlx.WAS', '', '', '', '', '', '', '', '', '', ''),
(4, '2w1', '$2y$10$fKgErDzGt8iFyv2/TAVLWu0HzsL3VEOWOJU1mhIcK1LO7xbEdgCea', '', '', '', '', '', '', '', '', '', ''),
(5, 'jestemNowy', '$2y$10$pFbq4B0gtmj1BkDBGmpofOkJSLd36R0ic18wrUzir.0hUgRxgAqjS', '', '', '', '', '', '', '', '', '', '');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
