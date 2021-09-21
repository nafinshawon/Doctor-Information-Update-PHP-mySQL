-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 21, 2021 at 03:53 AM
-- Server version: 5.7.35
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skfmis_doctorlist`
--

-- --------------------------------------------------------

--
-- Table structure for table `skf_speciality_degree`
--

CREATE TABLE `skf_speciality_degree` (
  `SL` int(11) NOT NULL,
  `Specialty` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Degree` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `skf_speciality_degree`
--

INSERT INTO `skf_speciality_degree` (`SL`, `Specialty`, `Degree`) VALUES
(1, 'Medicine Specialist', 'FCPS'),
(2, 'Medicine Specialist', 'MD'),
(3, 'Medicine Specialist', 'MRCP'),
(4, 'Medicine Specialist', 'FRCP'),
(5, 'Medicine Specialist', 'FACP'),
(6, 'Child Specialist/Pediatrician', 'FCPS'),
(7, 'Child Specialist/Pediatrician', 'MD'),
(8, 'Child Specialist/Pediatrician', 'MRCP'),
(9, 'Child Specialist/Pediatrician', 'FRCPed'),
(10, 'Chest Specialist/Pulmonologist', 'FCPS'),
(11, 'Chest Specialist/Pulmonologist', 'MD'),
(12, 'Chest Specialist/Pulmonologist', 'DTCD'),
(13, 'Chest Specialist/Pulmonologist', 'FCCP'),
(14, 'Hepatologist', 'MD'),
(15, 'Haematologist', 'FCPS'),
(16, 'Haematologist', 'MD'),
(17, 'Haematologist', 'Mphill'),
(18, 'Haematologist', 'DCP'),
(19, 'Nephrologist', 'MD'),
(20, 'Nephrologist', 'MRCP'),
(21, 'Neurologist', 'FCPS'),
(22, 'Neurologist', 'MD'),
(23, 'Psychiatrist', 'FCPS'),
(24, 'Psychiatrist', 'MD'),
(25, 'Psychiatrist', 'Mphill'),
(26, 'Psychiatrist', 'DPM'),
(27, 'Cardiologist', 'FCPS'),
(28, 'Cardiologist', 'MD'),
(29, 'Cardiologist', 'D Card'),
(30, 'Cardiologist', 'MRCP'),
(31, 'Cardiologist', 'FRCP'),
(32, 'Endocrinologist', 'FCPS'),
(33, 'Endocrinologist', 'MD'),
(34, 'Endocrinologist', 'DEM'),
(35, 'Gastroenterologist', 'FCPS'),
(36, 'Gastroenterologist', 'MD'),
(37, 'Physical Medicine Specialist', 'FCPS'),
(38, 'Physical Medicine Specialist', 'MD'),
(39, 'Rheumatologist', 'FCPS'),
(40, 'Rheumatologist', 'MD'),
(41, 'Dermatologist', 'FCPS'),
(42, 'Dermatologist', 'MD'),
(43, 'Dermatologist', 'DDV'),
(44, 'Dermatologist', 'DD'),
(45, 'Critical Care Medicine Specialist/ICU Specialist', 'FCPS'),
(46, 'Critical Care Medicine Specialist/ICU Specialist', 'MD'),
(47, 'Anesthesiologist ', 'FCPS'),
(48, 'Anesthesiologist ', 'MD'),
(49, 'Anesthesiologist ', 'DA'),
(50, 'Gynecologist   ', 'FCPS'),
(51, 'Gynecologist   ', 'MS'),
(52, 'Gynecologist   ', 'DGO'),
(53, 'Gynecologist   ', 'MRCOG'),
(54, 'Gynecologist   ', 'FRCOG'),
(55, 'Infertility Specialist', 'MS'),
(56, 'Surgeon', 'FCPS'),
(57, 'Surgeon', 'MS'),
(58, 'Surgeon', 'MRCS'),
(59, 'Surgeon', 'FRCS'),
(60, 'Otolaryngologist/Head Neck Surgeon/ENT Specialist', 'FCPS'),
(61, 'Otolaryngologist/Head Neck Surgeon/ENT Specialist', 'MS'),
(62, 'Otolaryngologist/Head Neck Surgeon/ENT Specialist', 'DLO'),
(63, 'Otolaryngologist/Head Neck Surgeon/ENT Specialist', 'MRCS'),
(64, 'Orthopedic Surgeon', 'FCPS'),
(65, 'Orthopedic Surgeon', 'MS'),
(66, 'Orthopedic Surgeon', 'D Ortho'),
(67, 'Cardiac Surgeon', 'FCPS'),
(68, 'Cardiac Surgeon', 'MS'),
(69, 'Cardiac Surgeon', 'MRCS'),
(70, 'Neurosurgeon', 'FCPS'),
(71, 'Neurosurgeon', 'MS'),
(72, 'Neurosurgeon', 'MRCS'),
(73, 'Ophthalmologist', 'FCPS'),
(74, 'Ophthalmologist', 'MS'),
(75, 'Ophthalmologist', 'DO'),
(76, 'Ophthalmologist', 'FRCOphth'),
(77, 'Pediatric Surgeon ', 'FCPS'),
(78, 'Pediatric Surgeon ', 'MS'),
(79, 'Pediatric Surgeon ', 'FRCS'),
(80, 'Urologist', 'FCPS'),
(81, 'Urologist', 'MS'),
(82, 'Urologist', 'FRCS'),
(83, 'Vascular Surgeon', 'FCPS'),
(84, 'Vascular Surgeon', 'MS'),
(85, 'Cardiro Thoracic Surgeon', 'FCPS'),
(86, 'Cardiro Thoracic Surgeon', 'MS'),
(87, 'Radiologist', 'FCPS'),
(88, 'Radiologist', 'MD'),
(89, 'Radiologist', 'DMRD'),
(90, 'Medical Oncologist', 'FCPS'),
(91, 'Medical Oncologist', 'MD'),
(92, 'Radiation Oncologist', 'FCPS'),
(93, 'Radiation Oncologist', 'MD');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `skf_speciality_degree`
--
ALTER TABLE `skf_speciality_degree`
  ADD PRIMARY KEY (`SL`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `skf_speciality_degree`
--
ALTER TABLE `skf_speciality_degree`
  MODIFY `SL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
