-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2022 at 08:02 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pptik`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id_event` int(11) NOT NULL,
  `judul` varchar(55) NOT NULL,
  `tanggal` date NOT NULL,
  `artikel` text NOT NULL,
  `img` varchar(255) NOT NULL,
  `img_size` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id_event`, `judul`, `tanggal`, `artikel`, `img`, `img_size`) VALUES
(1, 'Lorem Ipsum', '2022-08-25', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti a repudiandae corporis magnam aspernatur sapiente ex veniam quae aliquid dolores, dolorem unde, aperiam architecto excepturi voluptas ratione natus ab rem placeat earum est amet eaque. Unde provident sequi labore necessitatibus porro animi officia, quam eum, tempora et mollitia sapiente laboriosam?', 'event1.png', ''),
(2, 'Lorem 2', '2022-08-24', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti a repudiandae corporis magnam aspernatur sapiente ex veniam quae aliquid dolores, dolorem unde, aperiam architecto excepturi voluptas ratione natus ab rem placeat earum est amet eaque. Unde provident sequi labore necessitatibus porro animi officia, quam eum, tempora et mollitia sapiente laboriosam?', 'event1.png', ''),
(3, 'Lorem 3', '2022-08-17', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti a repudiandae corporis magnam aspernatur sapiente ex veniam quae aliquid dolores, dolorem unde, aperiam architecto excepturi voluptas ratione natus ab rem placeat earum est amet eaque. Unde provident sequi labore necessitatibus porro animi officia, quam eum, tempora et mollitia sapiente laboriosam?', 'user3.jpg', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id_event`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
