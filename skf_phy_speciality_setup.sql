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
-- Table structure for table `skf_phy_speciality_setup`
--

CREATE TABLE `skf_phy_speciality_setup` (
  `SL` int(11) NOT NULL,
  `PHY_SPECIALITY` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `PHY_SPE_SEG` varchar(225) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `skf_phy_speciality_setup`
--

INSERT INTO `skf_phy_speciality_setup` (`SL`, `PHY_SPECIALITY`, `PHY_SPE_SEG`) VALUES
(1, 'ANESTHESIOLOGY', 'ANESTHESIOLOGY'),
(2, 'ASTHMA', 'ASTHMA'),
(3, 'ASTHMA, ALLERGY', 'ASTHMA'),
(4, 'ASTHMA, ALLERGY, CHILD', 'ASTHMA'),
(5, 'ASTHMA, CHEST', 'ASTHMA'),
(6, 'ASTHMA, CHEST, MEDICINE', 'ASTHMA'),
(7, 'ASTHMA, CHEST, MEDICINE, CARDIOLOGY', 'ASTHMA'),
(8, 'ASTHMA, CHEST, TB', 'ASTHMA'),
(9, 'ASTHMA, CHEST, TB, MEDICINE', 'ASTHMA'),
(10, 'BIOCHEMIST', 'BIOCHEMIST'),
(11, 'CARDIOLOGY', 'CARDIOLOGY'),
(12, 'CARDIOLOGY, CHEST', 'CARDIOLOGY'),
(13, 'CARDIOLOGY, DIABETICS', 'CARDIOLOGY'),
(14, 'CARDIOLOGY, DIABETOLOGY', 'CARDIOLOGY'),
(15, 'CARDIOLOGY, GASTROENTEROLOGY, MEDICINE', 'CARDIOLOGY'),
(16, 'CARDIOLOGY, MEDICINE', 'CARDIOLOGY'),
(17, 'CARDIOLOGY, MEDICINE, CHEST, ASTHMA', 'CARDIOLOGY'),
(18, 'CARDIOLOGY, MEDICINE, DIABETICS', 'CARDIOLOGY'),
(19, 'CARDIOLOGY, MEDICINE, RHEUMATIC FEVER', 'CARDIOLOGY'),
(20, 'CARDIOLOGY, MEDICINE, RHEUMATICFEVER', 'CARDIOLOGY'),
(21, 'CARDIOLOGY, PEDIATRIC', 'CARDIOLOGY'),
(22, 'CARDIOLOGY, RHEUMATOLOGY', 'CARDIOLOGY'),
(23, 'CARDIOLOGY, SURGERY', 'CARDIOLOGY'),
(24, 'CHEST', 'CHEST'),
(25, 'CHEST, CARDIOLOGY', 'CHEST'),
(26, 'CHEST, CARDIOLOGY, ASTHMA, DIABETICS, MEDICINE', 'CHEST'),
(27, 'CHEST, CARDIOLOGY, MEDICINE', 'CHEST'),
(28, 'CHEST, CHILD', 'CHEST'),
(29, 'CHEST, GASTROENTEROLOGY, MEDICINE', 'CHEST'),
(30, 'CHEST, MEDICINE', 'CHEST'),
(31, 'CHEST, MEDICINE, CHILD', 'CHEST'),
(32, 'CHEST, TB', 'CHEST'),
(33, 'CHEST, TB, CARDIOLOGY, MEDICINE', 'CHEST'),
(34, 'CHILD', 'CHILD'),
(35, 'CHILD, ENT', 'CHILD'),
(36, 'CHILD, GASTROENTROLOGY', 'CHILD'),
(37, 'CHILD, GYNECOLOGY', 'CHILD'),
(38, 'CHILD, KIDNEY', 'CHILD'),
(39, 'CHILD, MEDICINE', 'CHILD'),
(40, 'CHILD, MOTHER', 'CHILD'),
(41, 'CHILD, NEONATOLOGY', 'CHILD'),
(42, 'CHILD, NEPHROLOGY', 'CHILD'),
(43, 'CHILD, NUTRITION', 'CHILD'),
(44, 'CHILD, NUTRITION, GASTROENTEROLOGY', 'CHILD'),
(45, 'CHILD, SKIN, MEDICINE', 'CHILD'),
(46, 'CHILD, SKIN, VD', 'CHILD'),
(47, 'CHILD, SKIN, VD, MEDICINE', 'CHILD'),
(48, 'CHILD, SURGERY', 'CHILD'),
(49, 'CHILD, TROPICAL MEDICINE', 'CHILD'),
(50, 'COLORECTAL SURGERY', 'SURGERY'),
(51, 'COLORECTALSURGERY', 'SURGERY'),
(52, 'COMMUNITY MEDICINE', 'MEDICINE'),
(53, 'COMMUNITYMEDICINE', 'MEDICINE'),
(54, 'COSMETIC SURGERY', 'SURGERY'),
(55, 'DENTAL', 'DENTAL'),
(56, 'DIABETICS', 'DIABETICS'),
(57, 'DIABETICS, CARDIOLOGY', 'DIABETICS'),
(58, 'DIABETICS, CARDIOLOGY, MEDICINE', 'DIABETICS'),
(59, 'DIABETICS, CHEST', 'DIABETICS'),
(60, 'DIABETICS, CHILD', 'DIABETICS'),
(61, 'DIABETICS, ENDOCRINOLOGY', 'DIABETICS'),
(62, 'DIABETICS, ENDOCRINOLOGY, MEDICINE', 'DIABETICS'),
(63, 'DIABETICS, EYE', 'DIABETICS'),
(64, 'DIABETICS, GASTROENTEROLOGY, MEDICINE', 'DIABETICS'),
(65, 'DIABETICS, HORMONE', 'DIABETICS'),
(66, 'DIABETICS, HORMONE, MEDICINE', 'DIABETICS'),
(67, 'DIABETICS, MEDICINE', 'DIABETICS'),
(68, 'DIABETICS, MEDICINE, CHILD', 'DIABETICS'),
(69, 'DIABETICS, RHEUMATICFEVER, MEDICINE', 'DIABETICS'),
(70, 'DIABETICS, SKIN, SEX', 'DIABETICS'),
(71, 'DIABETICS, SONOLOGY', 'DIABETICS'),
(72, 'ENDOCRINOLOGY', 'ENDOCRINOLOGY'),
(73, 'ENDOCRINOLOGY, MEDICINE', 'ENDOCRINOLOGY'),
(74, 'ENDOSCOPY', 'ENDOSCOPY'),
(75, 'ENDOSCOPY, LIVER, MEDICINE', 'ENDOSCOPY'),
(76, 'ENDOSCOPY, MEDICINE', 'ENDOSCOPY'),
(77, 'ENT', 'ENT'),
(78, 'EURO-SURGERY', 'SURGERY'),
(79, 'EYE', 'EYE'),
(80, 'EYE, PHACO', 'EYE'),
(81, 'EYE, SURGERY', 'EYE'),
(82, 'FAMILY MEDICINE', 'MEDICINE'),
(83, 'FAMILY MEDICINE, DIABETICS', 'MEDICINE'),
(84, 'FAMILYMEDICINE', 'MEDICINE'),
(85, 'FAMILYMEDICINE, DIABETICS', 'MEDICINE'),
(86, 'FOREIGNSIC MEDICINE', 'MEDICINE'),
(87, 'FOREIGNSICMEDICINE', 'MEDICINE'),
(88, 'GASTROENTEROLOGY', 'GASTROENTEROLOGY'),
(89, 'GASTROENTEROLOGY, LIVER', 'GASTROENTEROLOGY'),
(90, 'GASTROENTEROLOGY, LIVER, MEDICINE', 'GASTROENTEROLOGY'),
(91, 'GASTROENTEROLOGY, MEDICINE', 'GASTROENTEROLOGY'),
(92, 'GASTROINTESTINAL, LIVER', 'GASTROINTESTINAL'),
(93, 'GENERAL SURGERY', 'SURGERY'),
(94, 'GENERALSURGERY', 'SURGERY'),
(95, 'GP', 'GP'),
(96, 'GYNECOLOGY', 'GYNECOLOGY'),
(97, 'GYNECOLOGY, CHILD', 'GYNECOLOGY'),
(98, 'GYNECOLOGY, DIABETICS', 'GYNECOLOGY'),
(99, 'GYNECOLOGY, MEDICINE', 'GYNECOLOGY'),
(100, 'GYNECOLOGY, OBSTETRICS', 'GYNECOLOGY'),
(101, 'GYNECOLOGY, SKIN, VD', 'GYNECOLOGY'),
(102, 'GYNECOLOGY, SONOLOGY', 'GYNECOLOGY'),
(103, 'HEMATOLOGY', 'HEMATOLOGY'),
(104, 'HEPATOLOGY', 'HEPATOLOGY'),
(105, 'KIDNEY', 'KIDNEY'),
(106, 'KIDNEY, MEDICINE', 'KIDNEY'),
(107, 'LAPAROSCOPIC SURGERY', 'SURGERY'),
(108, 'LAPAROSCOPICSURGERY', 'SURGERY'),
(109, 'LIVER', 'LIVER'),
(110, 'LIVER, CHILD, FAMILY MEDICINE', 'LIVER'),
(111, 'LIVER, CHILD, FAMILYMEDICINE', 'LIVER'),
(112, 'LIVER, MEDICINE', 'LIVER'),
(113, 'MEDICINE', 'MEDICINE'),
(114, 'MEDICINE & CARDIOLOGY', 'MEDICINE'),
(115, 'MEDICINE, DIABETICS, CHEST, SKIN, SEX', 'MEDICINE'),
(116, 'MEDICINE, ANESTHESIOLOGY', 'MEDICINE'),
(117, 'MEDICINE, CARDIOLOGY', 'MEDICINE'),
(118, 'MEDICINE, CARDIOLOGY, DIABETICS', 'MEDICINE'),
(119, 'MEDICINE, CARDIOLOGY, RHEUMATICFEVER, DIABETICS', 'MEDICINE'),
(120, 'MEDICINE, CHEST', 'MEDICINE'),
(121, 'MEDICINE, CHEST, DIABETICS', 'MEDICINE'),
(122, 'MEDICINE, CHILD', 'MEDICINE'),
(123, 'MEDICINE, CHILD , SKIN, SEX', 'MEDICINE'),
(124, 'MEDICINE, CHILD, PSYCHIATRY', 'MEDICINE'),
(125, 'MEDICINE, CHILD, SKIN, SEX', 'MEDICINE'),
(126, 'MEDICINE, DIABETICS', 'MEDICINE'),
(127, 'MEDICINE, DIABETICS, CARDIOLOGY', 'MEDICINE'),
(128, 'MEDICINE, DIABETICS, CHILD, GYNECOLOGY', 'MEDICINE'),
(129, 'MEDICINE, DIABETICS, GASTROENTEROLOGY', 'MEDICINE'),
(130, 'MEDICINE, DIABETICS, HORMONE', 'MEDICINE'),
(131, 'MEDICINE, DIABETICS, KIDNEY', 'MEDICINE'),
(132, 'MEDICINE, DIABETICS, SKIN, SEX, CHILD', 'MEDICINE'),
(133, 'MEDICINE, DIABETICS, THYROID, HORMONE', 'MEDICINE'),
(134, 'MEDICINE, EYE', 'MEDICINE'),
(135, 'MEDICINE, GASTROENTEROLOGY', 'MEDICINE'),
(136, 'MEDICINE, GASTROENTEROLOGY, DIABETICS', 'MEDICINE'),
(137, 'MEDICINE, GASTROENTEROLOGY, DIABETICS, CARDIOLOGY', 'MEDICINE'),
(138, 'MEDICINE, GASTROLIVER, CHEST, SKIN, SEX', 'MEDICINE'),
(139, 'MEDICINE, GASTROLIVER, LIVER', 'MEDICINE'),
(140, 'MEDICINE, GYNECOLOGY', 'MEDICINE'),
(141, 'MEDICINE, GYNECOLOGY, MOTHER, CHILD', 'MEDICINE'),
(142, 'MEDICINE, HEMATOLOGY', 'MEDICINE'),
(143, 'MEDICINE, LIVER', 'MEDICINE'),
(144, 'MEDICINE, NEPHROLOGY', 'MEDICINE'),
(145, 'MEDICINE, NEUROLOGY', 'MEDICINE'),
(146, 'MEDICINE, NEURO-MEDICINE', 'MEDICINE'),
(147, 'MEDICINE, PAIN', 'MEDICINE'),
(148, 'MEDICINE, REHABILITATION', 'MEDICINE'),
(149, 'MEDICINE, SKIN', 'MEDICINE'),
(150, 'MEDICINE, SKIN, SEX, MOTHER, CHILD', 'MEDICINE'),
(151, 'MOTHER, CHILD', 'MOTHER'),
(152, 'MOTHER, CHILD, MEDICINE', 'MOTHER'),
(153, 'MOTHER, CHILD, MEDICINE, DIABETICS', 'MOTHER'),
(154, 'NEPHROLOGY', 'NEPHROLOGY'),
(155, 'NEUROLOGY', 'NEUROLOGY'),
(156, 'NEUROLOGY, GASTROLIVER, CHEST, DIABETICS', 'NEUROLOGY'),
(157, 'NEURO-MEDICINE', 'MEDICINE'),
(158, 'NEURO-MEDICINE, DIABETICS', 'MEDICINE'),
(159, 'NEURO-SURGERY', 'SURGERY'),
(160, 'ONCOLOGY', 'ONCOLOGY'),
(161, 'ONCOLOGY, HEMATOLOGY', 'ONCOLOGY'),
(162, 'ONCOLOGY, MEDICINE', 'ONCOLOGY'),
(163, 'ORTHO, SURGERY', 'ORTHO'),
(164, 'ORTHOPEDICS', 'ORTHOPEDICS'),
(165, 'ORTHOPEDICS, MEDICINE', 'ORTHOPEDICS'),
(166, 'ORTHOPEDICS, SURGERY', 'ORTHOPEDICS'),
(167, 'ORTHOPEDICS, TRAUMA', 'ORTHOPEDICS'),
(168, 'PAIN', 'PAIN'),
(169, 'PATHOLOGY', 'PATHOLOGY'),
(170, 'PHYSICAL MEDICINE', 'PHYSICAL'),
(171, 'PHYSICALMEDICINE', 'PHYSICALMEDICINE'),
(172, 'PHYSIOTHERAPHY', 'PHYSIOTHERAPHY'),
(173, 'PILES', 'PILES'),
(174, 'PLASTIC SURGERY', 'PLASTIC'),
(175, 'PLASTICSURGERY', 'PLASTICSURGERY'),
(176, 'PSYCHIATRY', 'PSYCHIATRY'),
(177, 'PSYCHIATRY, DRUG ADDICTION', 'PSYCHIATRY'),
(178, 'PSYCHIATRY, DRUGADDICTION', 'PSYCHIATRY'),
(179, 'PSYCHIATRY, MEDICINE', 'PSYCHIATRY'),
(180, 'PSYCHIATRY, NEUROLOGY', 'PSYCHIATRY'),
(181, 'PSYCHIATRY, REUMETOLOGY', 'PSYCHIATRY'),
(182, 'RADIOLOGY', 'RADIOLOGY'),
(183, 'RADIOTHARAPHY', 'RADIOTHARAPHY'),
(184, 'RHEUMATIC FEVER', 'RHEUMATIC'),
(185, 'RHEUMATICFEVER', 'RHEUMATICFEVER'),
(186, 'RHEUMATOLOGY', 'RHEUMATOLOGY'),
(187, 'RHEUMATOLOGY, MEDICINE', 'RHEUMATOLOGY'),
(188, 'RMP', 'RMP'),
(189, 'SKIN', 'SKIN'),
(190, 'SKIN, MEDICINE', 'SKIN'),
(191, 'SKIN, SEX', 'SKIN'),
(192, 'SKIN, SEX, ALLERGY', 'SKIN'),
(193, 'SKIN, SEX, ALLERGY, CHEST, MEDICINE', 'SKIN'),
(194, 'SKIN, SEX, ALLERGY, MEDICINE', 'SKIN'),
(195, 'SKIN, SEX, DIABETICS', 'SKIN'),
(196, 'SKIN, SEX, LIVER, ALLERGY', 'SKIN'),
(197, 'SKIN, SEX, MEDICINE', 'SKIN'),
(198, 'SKIN, VD', 'SKIN'),
(199, 'SKIN, VD, MEDICINE', 'SKIN'),
(200, 'SKIN,VD', 'SKIN'),
(201, 'SONOLOGY', 'SONOLOGY'),
(202, 'SONOLOGY, DIABETICS', 'SONOLOGY'),
(203, 'SONOLOGY, MEDICINE', 'SONOLOGY'),
(204, 'SURGERY', 'SURGERY'),
(205, 'SURGERY, MEDICINE', 'SURGERY'),
(206, 'SURGERY, MEDICINE, MOTHER, CHILD', 'SURGERY'),
(207, 'THYROIDOLOGY, IMAGING', 'THYROIDOLOGY'),
(208, 'TROPICAL MEDICINE', 'MEDICINE'),
(209, 'TROPICALMEDICINE', 'MEDICINE'),
(210, 'UROLOGY', 'UROLOGY'),
(211, 'UROLOGY, SURGERY, MEDICINE', 'UROLOGY'),
(212, 'VIROLOGY', 'VIROLOGY'),
(213, 'CHILD, FAMILY MEDICINE', 'CHILD'),
(214, 'DIABETICS, RHEUMATICFEVER, CARDIOLOGY', 'DIABETICS'),
(215, 'MEDICINE, GASTROENTEROLOGY, DIABETICS, PAIN', 'MEDICINE'),
(216, 'PHYSIOTHERAPHY, RHEUMATICFEVER', 'PHYSIOTHERAPHY'),
(217, 'SKIN, SEX, COSMETICSURGERY', 'SKIN'),
(218, 'CARDIOLOGY, HYPERTENSION, RHEUMATICFEVER', 'CARDIOLOGY'),
(219, 'GASTROLIVER, NEURO, SEX, ALERGY', 'GASTROLIVER'),
(220, 'NUTRITION', 'NUTRITION'),
(221, 'THERAPY', 'THERAPY');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `skf_phy_speciality_setup`
--
ALTER TABLE `skf_phy_speciality_setup`
  ADD PRIMARY KEY (`SL`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `skf_phy_speciality_setup`
--
ALTER TABLE `skf_phy_speciality_setup`
  MODIFY `SL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=222;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;