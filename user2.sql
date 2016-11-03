-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2016 at 01:36 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `user2`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `about` text NOT NULL,
  `status` int(3) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `about`, `status`) VALUES
(1, 'rejoan khan', 'rejoan.er@gmail.com', 'I am rejoanul alam from webcoachbd', 0),
(2, 'adnan haque', 'adnan@gmail.com', 'I am adnan from bangladesh', 0),
(3, 'shuva', 'shuva@gmail.com', 'This is Shuva Chakraborty from kolkata', 0),
(4, 'nipa', 'khanr859@yahoo.com', 'nnn\r\n\r\n', 0),
(5, 'moshorof', 'moshorof@yahoo.com', 'male', 0),
(6, 'nipa', 'khanr859@yahoo.com', 'sssssss', 0),
(7, 'helal', 'helal@yahoo.com', 'male', 0),
(8, 'nasima', 'mn.mohon@gmail.com', 'gggggggggggggg', 1),
(9, 'uuuu', 'khanr859@yahoo.com', 'iiiii', 1),
(10, 'mohon@andi-it.com', 'eee@e.comdddd', 'gggggggggggggg', 1),
(11, 't', 't@t.com', 't', 1),
(12, 'h', 'h@gmci.com', 'h', 1),
(13, 'nimul', 't@t.com', 'nai', 1),
(14, 'ruma', 'ruma@yahoo.com', 'female', 1),
(15, '', '', '', 0),
(16, 'rity', 'ri2ty@yahoo.com', 'fel', 0),
(17, '', '', '', 0),
(18, '', '', '', 0),
(19, '', '', '', 0),
(20, 'hello mohon', 'hello@gmail.com', 'er', 0),
(21, 'numan', 'man@yahoo.com', 'male', 0),
(22, 'ji na', 'ji@gmail.com', 'male', 0),
(23, 'admin', 'mn.mohondf@gmail.com', 'gggggggggggggg', 0),
(24, 'tonu', 'tonu@yahoo.com', 'female', 0),
(25, 'rejoan2', 'mn.mohondf@gmail.com', 'female', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
