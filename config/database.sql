SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE DATABASE `Contact`;

USE `Contact`;

CREATE TABLE `user` (
  `userid` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `comment` TEXT NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `user` (`userid`, `username`, `email`, `comment`) VALUES
(NULL, 'Khayreddine21', 'Khayreddine@gmail.com', 'My name is Khayreddine, I have a problem in my account, I can\'t login my account. Can you help me!'),
(NULL, 'AbdellahDJ', 'a.djaber@gmail.com', 'I vesite my profile but my page don\'t display. Can you help me!');
