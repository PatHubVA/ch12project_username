-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 03, 2025 at 02:32 AM
-- Server version: 8.0.44
-- PHP Version: 8.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_directory`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `search_students` (IN `lName` VARCHAR(50))   BEGIN
    SELECT * FROM students
    WHERE last_name LIKE CONCAT(lName, '%');
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `first_name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`first_name`, `last_name`, `email`) VALUES
('John', 'Smith', 'john.smith@example.com'),
('Mary', 'Johnson', 'mary.johnson@example.com'),
('Alex', 'Smith', 'alex.smith@example.com'),
('Jennifer', 'Brown', 'jennifer.brown@example.com'),
('David', 'Williams', 'david.williams@example.com'),
('John', 'Smith', 'john.smith@example.com'),
('Mary', 'Johnson', 'mary.johnson@example.com'),
('Alex', 'Smith', 'alex.smith@example.com'),
('Jennifer', 'Brown', 'jennifer.brown@example.com'),
('David', 'Williams', 'david.williams@example.com'),
('John', 'Smith', 'john.smith@example.com'),
('Mary', 'Johnson', 'mary.johnson@example.com'),
('Alex', 'Smith', 'alex.smith@example.com'),
('Jennifer', 'Brown', 'jennifer.brown@example.com'),
('David', 'Williams', 'david.williams@example.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
