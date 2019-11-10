-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2019 at 05:45 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vh_auctionproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `bidtbl`
--

CREATE TABLE `bidtbl` (
  `bid` int(11) NOT NULL,
  `pid` int(11) DEFAULT NULL,
  `bidderi` int(11) DEFAULT NULL,
  `price` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bidtbl`
--

INSERT INTO `bidtbl` (`bid`, `pid`, `bidderi`, `price`) VALUES
(6, 2, 1, 12100000),
(7, 4, 1, 88350000);

-- --------------------------------------------------------

--
-- Table structure for table `denousertbl`
--

CREATE TABLE `denousertbl` (
  `userid` int(11) NOT NULL,
  `username` varchar(1000) DEFAULT NULL,
  `emailid` varchar(1000) DEFAULT NULL,
  `phone` varchar(1000) DEFAULT NULL,
  `address` varchar(1000) DEFAULT NULL,
  `usrpass` varchar(1000) DEFAULT NULL,
  `isadmin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `logintbl`
--

CREATE TABLE `logintbl` (
  `userid` int(11) NOT NULL,
  `usrpass` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logintbl`
--

INSERT INTO `logintbl` (`userid`, `usrpass`) VALUES
(1, 'hello1'),
(2, 'hello2'),
(3, 'hello3'),
(10, 'girish');

-- --------------------------------------------------------

--
-- Table structure for table `productimgtbl`
--

CREATE TABLE `productimgtbl` (
  `pid` int(11) NOT NULL,
  `imgsrc` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productimgtbl`
--

INSERT INTO `productimgtbl` (`pid`, `imgsrc`) VALUES
(1, '1.jpg'),
(1, '2.jpg'),
(1, '3.jpg'),
(1, '4.jpg'),
(1, '5.jpg'),
(1, '6.jpg'),
(2, '1.jpg'),
(2, '2.jpg'),
(2, '3.jpg'),
(2, '4.jpg'),
(2, '5.jpg'),
(2, '6.jpg'),
(3, '1.jpg'),
(3, '2.jpg'),
(3, '3.jpg'),
(3, '4.jpg'),
(3, '5.jpg'),
(3, '6.jpg'),
(3, '7.jpg'),
(4, '1.jpg'),
(4, '2.jpg'),
(4, '3.jpg'),
(4, '4.jpg'),
(4, '5.jpg'),
(5, '1.jpg'),
(5, '2.jpg'),
(5, '3.jpg'),
(5, '4.jpg'),
(5, '5.jpg'),
(6, '1.jpg'),
(6, '2.jpg'),
(6, '3.jpg'),
(6, '4.jpg'),
(6, '5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `producttbl`
--

CREATE TABLE `producttbl` (
  `pid` int(11) NOT NULL,
  `pname` varchar(1000) DEFAULT NULL,
  `ptypeid` int(11) DEFAULT NULL,
  `sellerid` int(11) DEFAULT NULL,
  `startingbid` bigint(20) DEFAULT NULL,
  `auth` int(11) DEFAULT NULL,
  `area_sq_feet` int(11) DEFAULT NULL,
  `prop_address` varchar(200) DEFAULT NULL,
  `page` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `producttbl`
--

INSERT INTO `producttbl` (`pid`, `pname`, `ptypeid`, `sellerid`, `startingbid`, `auth`, `area_sq_feet`, `prop_address`, `page`) VALUES
(1, 'Isec Apartment', 4, 1, 69000000, 1, 5123, 'Babugali, Malad (E),Mumbai, Maharashtra', 7),
(2, 'Two Bedroom Apartment In City Center', 4, 2, 12000000, 1, 1765, 'Jain Mandir, Malad (W),Mumbai, Maharashtra', 15),
(3, 'AMIDST ABUNDANT GREEN', 3, 3, 55600000, 1, 8982, 'Boriwali (E), S.V road, Jambligali', 35),
(4, 'Residency Hotel', 2, 4, 88000000, 1, 15193, 'Sujujain Road, Delhi', 13),
(5, 'The Resort', 1, 2, 100000000, 1, 8123, 'Ghodbunder Road, Thane(W),Mumbai,Mahashtra', 8),
(6, 'The Roseate Delhi', 1, 2, 40000000, 1, 5123, 'High land, Mahi high RD,Delhi', 15);

-- --------------------------------------------------------

--
-- Table structure for table `producttypetbl`
--

CREATE TABLE `producttypetbl` (
  `ptypeid` int(11) NOT NULL,
  `typename` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `producttypetbl`
--

INSERT INTO `producttypetbl` (`ptypeid`, `typename`) VALUES
(1, 'Resorts'),
(2, 'Hotels'),
(3, 'Cottages'),
(4, 'Apartments');

-- --------------------------------------------------------

--
-- Table structure for table `usertbl`
--

CREATE TABLE `usertbl` (
  `userid` int(11) NOT NULL,
  `username` varchar(1000) DEFAULT NULL,
  `emailid` varchar(1000) DEFAULT NULL,
  `phone` varchar(1000) DEFAULT NULL,
  `address` varchar(1000) DEFAULT NULL,
  `isadmin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertbl`
--

INSERT INTO `usertbl` (`userid`, `username`, `emailid`, `phone`, `address`, `isadmin`) VALUES
(1, 'vikram bhavsar', 'vikram.bhavsar@somaiya.edu', '9875754378', 'Thane (W)', 1),
(2, 'Heet Savla', 'heet.savla@somaiya.edu', '9875755378', 'Malad (W)', 1),
(3, 'Vishvesh Pandey', 'vishvesh.p@somaiya.edu', '9845754378', 'Thane (W)', 0),
(4, 'Anzal Shaik', 'anzal.s@somaiya.edu', '9687456453', 'Kalwa (E)', 0),
(10, 'girish thatte', 'girish@gmail.com', '987654321', 'Mulund', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bidtbl`
--
ALTER TABLE `bidtbl`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `denousertbl`
--
ALTER TABLE `denousertbl`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `logintbl`
--
ALTER TABLE `logintbl`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `producttbl`
--
ALTER TABLE `producttbl`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `producttypetbl`
--
ALTER TABLE `producttypetbl`
  ADD PRIMARY KEY (`ptypeid`);

--
-- Indexes for table `usertbl`
--
ALTER TABLE `usertbl`
  ADD PRIMARY KEY (`userid`),
  ADD KEY `userid` (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bidtbl`
--
ALTER TABLE `bidtbl`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `producttbl`
--
ALTER TABLE `producttbl`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `usertbl`
--
ALTER TABLE `usertbl`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
