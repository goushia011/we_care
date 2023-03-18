-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2023 at 02:52 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `we_care`
--

-- --------------------------------------------------------

--
-- Table structure for table `users_registration`
--

CREATE TABLE `users_registration` (
  `id` int(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_registration`
--

INSERT INTO `users_registration` (`id`, `name`, `gender`, `username`, `email`, `mobile`, `password`, `status`) VALUES
(1, 'hk', 'on', 'hkrajmax', 'admin@gmail.com', '1234567890', '$2y$10$NW.9Fketo69JqdEz2ptJp.NZqLMPSuOxV/wnlHZjxyCpb5kf3EyUO', 0),
(17, 'Diksha', 'on', 'Diksha321', 'dikshamohan444@gmail.com', '765423876', '$2y$10$oGFyOMsDbgc8qBM5dJ9rqeC0SG0gmR5v4uK0GRCQZqZvG0ht5LNx6', 1),
(24, 'Swarnali', 'on', 'swarnali', 'swarnaliganguly2805@gmail.com', '9876543210', '$2y$10$NeuW1QbS4hKvkS38OKKhx.4kiKypC4uGn.gK407dvQa0WEYqz9wL.', 0),
(25, 'diks', 'on', '205', 'dikshamohan555@gmail.com', '9876543210', '$2y$10$gu4W/loXXbwqtAsSVuVwT.pDr38i/tZkAVUCKBSg01AP7YQfATKdK', 0),
(27, 'goushia', 'on', '205', 'dilkashgoushia@gmail.com', '9876543210', '$2y$10$i18T9nZnUyvB4bamfVvDdOQ/IMVFWmxDflKMSCbRw4qS6.Ew6fqSu', 0),
(28, 'heera', 'on', '205', 'heeralkmax@gmail.com', '9876543210', '$2y$10$1ezQ7qTxX0d6ysdNRnMciOLBJy9yrXCoZVAbZ6lhk6MEmIlspnABK', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users_verification`
--

CREATE TABLE `users_verification` (
  `id` int(50) NOT NULL,
  `code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_verification`
--

INSERT INTO `users_verification` (`id`, `code`) VALUES
(1, 'jkbhfljdsbhvkdjsnfdsjkfbndsfjk'),
(17, '0be64cf0887d84b01d77'),
(24, '8da94f94815b3d23ad37'),
(25, '3df6f75f21f5f7bcb868'),
(27, '66c84f123e77184b9720'),
(28, '237e8f2d457b671d5462');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users_registration`
--
ALTER TABLE `users_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_verification`
--
ALTER TABLE `users_verification`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users_registration`
--
ALTER TABLE `users_registration`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_verification`
--
ALTER TABLE `users_verification`
  ADD CONSTRAINT `UV_ID` FOREIGN KEY (`id`) REFERENCES `users_registration` (`id`) ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
