-- MariaDB dump 10.18  Distrib 10.4.16-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: LibraryDB
-- ------------------------------------------------------
-- Server version	10.4.16-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Temporary table structure for view `admins`
--

DROP TABLE IF EXISTS `admins`;
/*!50001 DROP VIEW IF EXISTS `admins`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `admins` (
  `id` tinyint NOT NULL,
  `roll` tinyint NOT NULL,
  `gender` tinyint NOT NULL,
  `name` tinyint NOT NULL,
  `dept` tinyint NOT NULL,
  `year` tinyint NOT NULL,
  `emailid` tinyint NOT NULL,
  `password` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `book`
--

DROP TABLE IF EXISTS `book`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `book` (
  `b_id` varchar(255) NOT NULL,
  `booksname` varchar(50) NOT NULL,
  `authorname` varchar(50) NOT NULL,
  `copies` varchar(20) NOT NULL,
  `avl_cpy` int(100) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `path` varchar(200) NOT NULL,
  PRIMARY KEY (`b_id`),
  UNIQUE KEY `b_id` (`b_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `book`
--

LOCK TABLES `book` WRITE;
/*!40000 ALTER TABLE `book` DISABLE KEYS */;
INSERT INTO `book` VALUES ('3939','LGS110','Abdullah','7',3,'Law','3939.pdf','ebooks/3939.pdf'),('4545','The fault in out stars ','Ajmal','15',11,'PoliticalScience','4545.pdf','ebooks/4545.pdf'),('LAWOF','LG','NOMAN','1',1,'Law','LAWOF.pdf','ebooks/LAWOF.pdf'),('121212','ITC110','COmputer','1',1,'CS','121212.pdf','ebooks/121212.pdf'),('6000','LGS100','ALi','1',1,'Law','6000.pdf','ebooks/6000.pdf');
/*!40000 ALTER TABLE `book` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary table structure for view `booksneeded`
--

DROP TABLE IF EXISTS `booksneeded`;
/*!50001 DROP VIEW IF EXISTS `booksneeded`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `booksneeded` (
  `b_id` tinyint NOT NULL,
  `booksname` tinyint NOT NULL,
  `authorname` tinyint NOT NULL,
  `avl_cpy` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `student_book`
--

DROP TABLE IF EXISTS `student_book`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student_book` (
  `emailid` varchar(200) NOT NULL,
  `book_1_id` varchar(100) NOT NULL,
  `book_1` varchar(100) NOT NULL,
  `recive_date_1` varchar(100) NOT NULL,
  `submisson_date_1` varchar(100) NOT NULL,
  `book_2_id` varchar(100) DEFAULT NULL,
  `book_2` varchar(100) DEFAULT NULL,
  `recive_date_2` varchar(100) DEFAULT NULL,
  `submisson_date_2` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`emailid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student_book`
--

LOCK TABLES `student_book` WRITE;
/*!40000 ALTER TABLE `student_book` DISABLE KEYS */;
INSERT INTO `student_book` VALUES ('a@gmail.com','3939','LGS110','18-12-2021','','4545','The fault in out stars ','18-12-2021',''),('usman@gmail.com','3939','LGS110','18-12-2021','','4545','The fault in out stars ','18-12-2021',''),('amin@gmail.com','4545','The fault in out stars ','18-12-2021','','3939','LGS110','18-12-2021','');
/*!40000 ALTER TABLE `student_book` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student_registration`
--

DROP TABLE IF EXISTS `student_registration`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student_registration` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `roll` varchar(100) NOT NULL,
  `type` varchar(10) NOT NULL DEFAULT 'student',
  `gender` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `year` varchar(20) NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roll` (`roll`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student_registration`
--

LOCK TABLES `student_registration` WRITE;
/*!40000 ALTER TABLE `student_registration` DISABLE KEYS */;
INSERT INTO `student_registration` VALUES (1,'001','admin','m','admin','blank','blank','admin001','admin123'),(20,'22','student','m','QadirPacha','CS','1st_year','Qadir@gmail.com','q'),(19,'21','student','m','GG','CS','1st_year','GG@gmail.com','gg'),(18,'sdf','student','m','fssdf','CS','1st_year','sdf@g','sdf'),(17,'asd','student','m','asdd','CS','1st_year','asd@g','sds'),(16,'69','student','m','QadirPacha','CS','1st_year','Qadir@gmail.com','q'),(15,'1','student','m','QadirPacha','Law','1st_year','Qadir@gmail.com','q'),(10,'4040','admin','m','Abdullah','CS','1st_year','abdullahfazli8.af@gmail.com','abdullah'),(14,'55','student','m','AMin','CS','1st_year','amin@gmail.com','amin'),(13,'40400','student','m','Usman','CS','1st_year','usman@gmail.com','usman'),(12,'a','student','m','a','CS','1st_year','a@gmail.com','1'),(21,'F1','student','m','Farzan','CS','1st_year','Fazzan@gmail.com','f');
/*!40000 ALTER TABLE `student_registration` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary table structure for view `studentsregistered`
--

DROP TABLE IF EXISTS `studentsregistered`;
/*!50001 DROP VIEW IF EXISTS `studentsregistered`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `studentsregistered` (
  `id` tinyint NOT NULL,
  `roll` tinyint NOT NULL,
  `gender` tinyint NOT NULL,
  `name` tinyint NOT NULL,
  `dept` tinyint NOT NULL,
  `year` tinyint NOT NULL,
  `emailid` tinyint NOT NULL,
  `password` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Final view structure for view `admins`
--

/*!50001 DROP TABLE IF EXISTS `admins`*/;
/*!50001 DROP VIEW IF EXISTS `admins`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `admins` AS select `student_registration`.`id` AS `id`,`student_registration`.`roll` AS `roll`,`student_registration`.`gender` AS `gender`,`student_registration`.`name` AS `name`,`student_registration`.`dept` AS `dept`,`student_registration`.`year` AS `year`,`student_registration`.`emailid` AS `emailid`,`student_registration`.`password` AS `password` from `student_registration` where `student_registration`.`type` = 'admin' */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `booksneeded`
--

/*!50001 DROP TABLE IF EXISTS `booksneeded`*/;
/*!50001 DROP VIEW IF EXISTS `booksneeded`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `booksneeded` AS select `book`.`b_id` AS `b_id`,`book`.`booksname` AS `booksname`,`book`.`authorname` AS `authorname`,`book`.`avl_cpy` AS `avl_cpy` from `book` where `book`.`avl_cpy` < 5 */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `studentsregistered`
--

/*!50001 DROP TABLE IF EXISTS `studentsregistered`*/;
/*!50001 DROP VIEW IF EXISTS `studentsregistered`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `studentsregistered` AS select `student_registration`.`id` AS `id`,`student_registration`.`roll` AS `roll`,`student_registration`.`gender` AS `gender`,`student_registration`.`name` AS `name`,`student_registration`.`dept` AS `dept`,`student_registration`.`year` AS `year`,`student_registration`.`emailid` AS `emailid`,`student_registration`.`password` AS `password` from `student_registration` where `student_registration`.`type` <> 'admin' */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-12-20 12:12:56
