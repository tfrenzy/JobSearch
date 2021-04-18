-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 18, 2012 at 03:20 PM
-- Server version: 5.0.45
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jobsearch`
--
CREATE DATABASE `jobsearch` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `jobsearch`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Username` varchar(15) NOT NULL,
  `Password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Username`, `Password`) VALUES
('Spyke', 'lee'),
('Favor', 'Igwe');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `NameOfCompany` varchar(20) NOT NULL,
  `RegNo` varchar(15) NOT NULL,
  `Address` varchar(30) NOT NULL,
  `City` varchar(15) NOT NULL,
  `ContactPerson` varchar(30) NOT NULL,
  `ContactEmail` varchar(15) NOT NULL,
  `PostInComp` varchar(15) NOT NULL,
  `CompanyClassification` varchar(20) NOT NULL,
  `Logo` varchar(40) NOT NULL,
  `Username` varchar(15) NOT NULL,
  `Password` varchar(15) NOT NULL,
  `Status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--


-- --------------------------------------------------------

--
-- Table structure for table `jobalert`
--

CREATE TABLE `jobalert` (
  `JobType` varchar(15) NOT NULL,
  `JobDescription` varchar(50) NOT NULL,
  `IssuingCompany` varchar(15) NOT NULL,
  `Qualification` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobalert`
--


-- --------------------------------------------------------

--
-- Table structure for table `paymentdetails`
--

CREATE TABLE `paymentdetails` (
  `RealName` varchar(50) NOT NULL,
  `CreditCardName` varchar(30) NOT NULL,
  `IssuingBank` varchar(50) NOT NULL,
  `CardNumber` varchar(20) NOT NULL,
  `PIN` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paymentdetails`
--


-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `Name` varchar(30) default NULL,
  `Address` varchar(50) default NULL,
  `City` varchar(30) default NULL,
  `PhoneNo` varchar(15) default NULL,
  `Qualification` varchar(15) default NULL,
  `Passport` varchar(80) default NULL,
  `SchoolAttended` varchar(40) default NULL,
  `DegreeType` varchar(30) default NULL,
  `Discipline` varchar(50) default NULL,
  `CV` varchar(80) default NULL,
  `HighInstitute` varchar(80) default NULL,
  `NYSC` varchar(80) default NULL,
  `Username` varchar(15) default NULL,
  `Password` varchar(15) default NULL,
  `Status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`Name`, `Address`, `City`, `PhoneNo`, `Qualification`, `Passport`, `SchoolAttended`, `DegreeType`, `Discipline`, `CV`, `HighInstitute`, `NYSC`, `Username`, `Password`, `Status`) VALUES
('Emenike Worlu', 'Diobu', 'Port Harcourt', '3343444', 'Qualified', 'C:/wamp/www/emenike_worlu1.jpg', 'University of Port Harcourt', 'Bachelor''s Degree', 'Electrical/Electronics Engineering', 'C:/wamp/www/emenike_worlu2.pdf', 'C:/wamp/www/emenike_worlu3.pdf', 'C:/wamp/www/emenike_worlu4.pdf', 'emenike', 'emenike', '');
