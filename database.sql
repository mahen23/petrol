-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 09, 2011 at 07:17 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `stationwagon`
--

-- --------------------------------------------------------

--
-- Table structure for table `sw_articles`
--

DROP TABLE IF EXISTS `sw_articles`;
CREATE TABLE IF NOT EXISTS `sw_articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(140) DEFAULT NULL,
  `body` text,
  `created_time` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `sw_articles`
--


-- --------------------------------------------------------

--
-- Table structure for table `sw_categories`
--

DROP TABLE IF EXISTS `sw_categories`;
CREATE TABLE IF NOT EXISTS `sw_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(140) DEFAULT NULL,
  `description` tinytext,
  `created_time` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `sw_categories`
--

INSERT INTO `sw_categories` (`id`, `name`, `description`, `created_time`) VALUES
(1, 'Uncategorized', 'Uncategorized', 1294585518);
