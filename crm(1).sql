-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 30, 2020 at 05:32 AM
-- Server version: 5.6.42
-- PHP Version: 7.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crm`
--
CREATE DATABASE IF NOT EXISTS `crm` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `crm`;

-- --------------------------------------------------------

--
-- Table structure for table `bill_form`
--

CREATE TABLE `bill_form` (
  `Id` int(11) NOT NULL,
  `Customer` int(11) NOT NULL,
  `Create_Date` varchar(32) NOT NULL,
  `Total_Price` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Id` int(11) NOT NULL,
  `First_Name` varchar(32) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `Last_Name` varchar(32) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `Phone` char(11) DEFAULT NULL,
  `Job` varchar(32) CHARACTER SET utf8 COLLATE utf8_persian_ci DEFAULT NULL,
  `Insta_Id` varchar(32) DEFAULT NULL,
  `Ref` int(11) DEFAULT '0',
  `Way` int(2) DEFAULT NULL,
  `Address` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci DEFAULT NULL,
  `Description` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci DEFAULT NULL,
  `Join_Date` varchar(255) DEFAULT NULL,
  `Credit` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Id`, `First_Name`, `Last_Name`, `Phone`, `Job`, `Insta_Id`, `Ref`, `Way`, `Address`, `Description`, `Join_Date`, `Credit`) VALUES
(66, 'llllll', 'llllllllll', '9764321324', 'llll', 'lllll', NULL, 1, '', '', '', 0),
(74, 'bbbb', 'xxxx', '1121212', 'aaaaaaaa', 'xxxxx', 74, 2, '', 'zzzzzz', '', 1111),
(75, 'aaa', 'Nkt', '09134566646', 'Tattoo ', '@zohaa', 74, 2, 'yazddddddddddddddd', 'iran', '', 111);

-- --------------------------------------------------------

--
-- Table structure for table `day`
--

CREATE TABLE `day` (
  `Id` int(2) NOT NULL,
  `Day` char(2) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `day`
--

INSERT INTO `day` (`Id`, `Day`) VALUES
(1, '۱'),
(2, '۲'),
(3, '۳'),
(4, '۴'),
(5, '۵'),
(6, '۶'),
(7, '۷'),
(8, '۸'),
(9, '۹'),
(10, '۱۰'),
(11, '۱۱'),
(12, '۱۲'),
(13, '۱۳'),
(14, '۱۴'),
(15, '۱۵'),
(16, '۱۶'),
(17, '۱۷'),
(18, '۱۸'),
(19, '۱۹'),
(20, '۲۰'),
(21, '۲۱'),
(22, '۲۲'),
(23, '۲۳'),
(24, '۲۴'),
(25, '۲۵'),
(26, '۲۶'),
(27, '۲۷'),
(28, '۲۸'),
(29, '۲۹'),
(30, '۳۰'),
(31, '۳۱');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `Id` int(2) NOT NULL,
  `Job` varchar(32) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`Id`, `Job`) VALUES
(1, 'کارمند'),
(2, 'مدیر'),
(3, 'سایر');

-- --------------------------------------------------------

--
-- Table structure for table `month`
--

CREATE TABLE `month` (
  `Id` int(2) NOT NULL,
  `Month` char(10) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `month`
--

INSERT INTO `month` (`Id`, `Month`) VALUES
(1, 'فروردین'),
(2, 'اردیبهشت'),
(3, 'خرداد'),
(4, 'تیر'),
(5, 'مرداد'),
(6, 'شهریور'),
(7, 'مهر'),
(8, 'آبان'),
(9, 'آذر'),
(10, 'دی'),
(11, 'بهمن'),
(12, 'اسفند');

-- --------------------------------------------------------

--
-- Table structure for table `reminder`
--

CREATE TABLE `reminder` (
  `Id` int(11) NOT NULL,
  `C1` int(11) NOT NULL,
  `Type` int(2) NOT NULL,
  `Title` varchar(32) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `Year` int(4) DEFAULT NULL,
  `Month` int(2) NOT NULL,
  `Day` int(2) NOT NULL,
  `Phone` char(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `reminder_type`
--

CREATE TABLE `reminder_type` (
  `Id` int(2) NOT NULL,
  `Type` varchar(32) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reminder_type`
--

INSERT INTO `reminder_type` (`Id`, `Type`) VALUES
(1, 'تولد مشتری'),
(2, 'تولد دوست'),
(3, 'تولد اعضای خانواده'),
(4, 'سالگرد نامزدی'),
(5, 'سالگرد ازدواج'),
(6, 'غیره');

-- --------------------------------------------------------

--
-- Table structure for table `way`
--

CREATE TABLE `way` (
  `Id` int(2) NOT NULL,
  `Way` varchar(32) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `way`
--

INSERT INTO `way` (`Id`, `Way`) VALUES
(1, 'instagram'),
(2, 'معرفی دوستان');

-- --------------------------------------------------------

--
-- Table structure for table `year`
--

CREATE TABLE `year` (
  `Id` int(4) NOT NULL,
  `Year` char(4) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `year`
--

INSERT INTO `year` (`Id`, `Year`) VALUES
(1300, '۱۳۰۰'),
(1301, '۱۳۰۱'),
(1302, '۱۳۰۲'),
(1303, '۱۳۰۳'),
(1304, '۱۳۰۴'),
(1305, '۱۳۰۵'),
(1306, '۱۳۰۶'),
(1307, '۱۳۰۷'),
(1308, '۱۳۰۸'),
(1309, '۱۳۰۹'),
(1310, '۱۳۱۰'),
(1311, '۱۳۱۱'),
(1312, '۱۳۱۲'),
(1313, '۱۳۱۳'),
(1314, '۱۳۱۴'),
(1315, '۱۳۱۵'),
(1316, '۱۳۱۶'),
(1317, '۱۳۱۷'),
(1318, '۱۳۱۸'),
(1319, '۱۳۱۹'),
(1320, '۱۳۲۰'),
(1321, '۱۳۲۱'),
(1322, '۱۳۲۲'),
(1323, '۱۳۲۳'),
(1324, '۱۳۲۴'),
(1325, '۱۳۲۵'),
(1326, '۱۳۲۶'),
(1327, '۱۳۲۷'),
(1328, '۱۳۲۸'),
(1329, '۱۳۲۹'),
(1330, '۱۳۳۰'),
(1331, '۱۳۳۱'),
(1332, '۱۳۳۲'),
(1333, '۱۳۳۳'),
(1334, '۱۳۳۴'),
(1335, '۱۳۳۵'),
(1336, '۱۳۳۶'),
(1337, '۱۳۳۷'),
(1338, '۱۳۳۸'),
(1339, '۱۳۳۹'),
(1340, '۱۳۴۰'),
(1341, '۱۳۴۱'),
(1342, '۱۳۴۲'),
(1343, '۱۳۴۳'),
(1344, '۱۳۴۴'),
(1345, '۱۳۴۵'),
(1346, '۱۳۴۶'),
(1347, '۱۳۴۷'),
(1348, '۱۳۴۸'),
(1349, '۱۳۴۹'),
(1350, '۱۳۵۰'),
(1351, '۱۳۵۱'),
(1352, '۱۳۵۲'),
(1353, '۱۳۵۳'),
(1354, '۱۳۵۴'),
(1355, '۱۳۵۵'),
(1356, '۱۳۵۶'),
(1357, '۱۳۵۷'),
(1358, '۱۳۵۸'),
(1359, '۱۳۵۹'),
(1360, '۱۳۶۰'),
(1361, '۱۳۶۱'),
(1362, '۱۳۶۲'),
(1363, '۱۳۶۳'),
(1364, '۱۳۶۴'),
(1365, '۱۳۶۵'),
(1366, '۱۳۶۶'),
(1367, '۱۳۶۷'),
(1368, '۱۳۶۸'),
(1369, '۱۳۶۹'),
(1370, '۱۳۷۰'),
(1371, '۱۳۷۱'),
(1372, '۱۳۷۲'),
(1373, '۱۳۷۳'),
(1374, '۱۳۷۴'),
(1375, '۱۳۷۵'),
(1376, '۱۳۷۶'),
(1377, '۱۳۷۷'),
(1378, '۱۳۷۸'),
(1379, '۱۳۷۹'),
(1380, '۱۳۸۰'),
(1381, '۱۳۸۱'),
(1382, '۱۳۸۲'),
(1383, '۱۳۸۳'),
(1384, '۱۳۸۴'),
(1385, '۱۳۸۵'),
(1386, '۱۳۸۶'),
(1387, '۱۳۸۷'),
(1388, '۱۳۸۸'),
(1389, '۱۳۸۹'),
(1390, '۱۳۹۰'),
(1391, '۱۳۹۱'),
(1392, '۱۳۹۲'),
(1393, '۱۳۹۳'),
(1394, '۱۳۹۴'),
(1395, '۱۳۹۵'),
(1396, '۱۳۹۶'),
(1397, '۱۳۹۷'),
(1398, '۱۳۹۸'),
(1399, '۱۳۹۹'),
(1400, '۱۴۰۰'),
(1401, '۱۴۰۱'),
(1402, '۱۴۰۲'),
(1403, '۱۴۰۳'),
(1404, '۱۴۰۴'),
(1405, '۱۴۰۵'),
(1406, '۱۴۰۶'),
(1407, '۱۴۰۷'),
(1408, '۱۴۰۸'),
(1409, '۱۴۰۹'),
(1410, '۱۴۱۰'),
(1411, '۱۴۱۱'),
(1412, '۱۴۱۲');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill_form`
--
ALTER TABLE `bill_form`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Customer` (`Customer`) USING BTREE;

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Insta_Id` (`Insta_Id`),
  ADD KEY `Ref` (`Ref`),
  ADD KEY `Way` (`Way`);

--
-- Indexes for table `day`
--
ALTER TABLE `day`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `reminder`
--
ALTER TABLE `reminder`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `C1` (`C1`) USING BTREE,
  ADD KEY `Type` (`Type`);

--
-- Indexes for table `reminder_type`
--
ALTER TABLE `reminder_type`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `way`
--
ALTER TABLE `way`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `year`
--
ALTER TABLE `year`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill_form`
--
ALTER TABLE `bill_form`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `day`
--
ALTER TABLE `day`
  MODIFY `Id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `Id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reminder`
--
ALTER TABLE `reminder`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `reminder_type`
--
ALTER TABLE `reminder_type`
  MODIFY `Id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `way`
--
ALTER TABLE `way`
  MODIFY `Id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `year`
--
ALTER TABLE `year`
  MODIFY `Id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1413;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bill_form`
--
ALTER TABLE `bill_form`
  ADD CONSTRAINT `bill_form_ibfk_1` FOREIGN KEY (`Customer`) REFERENCES `customer` (`Id`);

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`Ref`) REFERENCES `customer` (`Id`),
  ADD CONSTRAINT `customer_ibfk_2` FOREIGN KEY (`Way`) REFERENCES `way` (`Id`);

--
-- Constraints for table `reminder`
--
ALTER TABLE `reminder`
  ADD CONSTRAINT `reminder_ibfk_1` FOREIGN KEY (`C1`) REFERENCES `customer` (`Id`),
  ADD CONSTRAINT `reminder_ibfk_3` FOREIGN KEY (`Type`) REFERENCES `reminder_type` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
