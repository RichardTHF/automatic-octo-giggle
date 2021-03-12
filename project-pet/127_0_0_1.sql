-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2019-05-30 03:36:20
-- 服务器版本： 10.1.38-MariaDB
-- PHP 版本： 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `movie`
--
CREATE DATABASE IF NOT EXISTS `movie` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `movie`;

-- --------------------------------------------------------

--
-- 表的结构 `films`
--

CREATE TABLE `films` (
  `id` int(100) NOT NULL,
  `name` varchar(100) COLLATE utf8_bin NOT NULL,
  `time` varchar(100) COLLATE utf8_bin NOT NULL,
  `cover` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- 表的结构 `introduction`
--

CREATE TABLE `introduction` (
  `id` int(100) NOT NULL,
  `name` varchar(100) COLLATE utf8_bin NOT NULL,
  `synopsis` varchar(100) COLLATE utf8_bin NOT NULL,
  `achievement` varchar(100) COLLATE utf8_bin NOT NULL,
  `movies` varchar(100) COLLATE utf8_bin NOT NULL,
  `cover` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 转存表中的数据 `introduction`
--

INSERT INTO `introduction` (`id`, `name`, `synopsis`, `achievement`, `movies`, `cover`) VALUES
(1, 'Audrey Hepburn', 'Britain', 'Best Actress Oscar', 'Funny face', './hepburn/1.jpg'),
(2, 'Audrey Hepburn', 'Taurus', 'British Film Academy Best Actress', 'in the world', './hepburn/2.jpeg'),
(3, 'Audrey Kathleen ', ' 170cm', 'Best Actress at the Golden Globe Awards', 'Nun biography', './hepburn/3.jpeg'),
(4, 'Audrey Hepburn', '1920/5/4-1993/1/20', 'American Actor Guild Award', 'Stealing dragon and changing Phoenix', './hepburn/4.jpeg'),
(5, 'Audrey Hepburn', 'performer', 'Lifelong Achevement Award', 'Roman Holiday', './hepburn/5.jpg');

-- --------------------------------------------------------

--
-- 表的结构 `movies`
--

CREATE TABLE `movies` (
  `id` int(100) NOT NULL,
  `name` varchar(100) COLLATE utf8_bin NOT NULL,
  `time` varchar(100) COLLATE utf8_bin NOT NULL,
  `cover` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 转存表中的数据 `movies`
--

INSERT INTO `movies` (`id`, `name`, `time`, `cover`) VALUES
(1, 'Funny Face', '1957', ''),
(1, 'Funny Face', '1957', ''),
(2, '1959-06-18', 'Nun biography', ''),
(2, '1959-06-18', 'Nun biography', ''),
(3, 'Stealing dragon and changing Phoenix', '1989', ''),
(3, 'Stealing dragon and changing Phoenix', '1989', ''),
(4, 'Roman Holiday', '1953', ''),
(4, 'Roman Holiday', '1953', ''),
(5, 'Tiffany\'s Breakfast', '1961', ''),
(5, 'Tiffany\'s Breakfast', '1961', '');

--
-- 转储表的索引
--

--
-- 表的索引 `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`cover`);

--
-- 表的索引 `introduction`
--
ALTER TABLE `introduction`
  ADD PRIMARY KEY (`id`,`name`,`synopsis`,`achievement`,`movies`,`cover`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
