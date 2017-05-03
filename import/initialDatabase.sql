# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.6.25)
# Database: is218final
# Generation Time: 2017-04-29 19:35:12 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table accounts
# ------------------------------------------------------------

DROP TABLE IF EXISTS `accounts`;

CREATE TABLE `accounts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(60) DEFAULT NULL,
  `fname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `accounts` WRITE;
/*!40000 ALTER TABLE `accounts` DISABLE KEYS */;

INSERT INTO `accounts` (`id`, `email`, `fname`, `lname`, `phone`, `birthday`, `gender`, `password`)
VALUES
	(1,'mjlee@njit.edu','Mike','Lee','974-555-5555','2000-05-05','male','1234'),
	(2,'janedoe@njit.edu','John','Doe','555-555-5555','1950-07-07','female','1234');

/*!40000 ALTER TABLE `accounts` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table todos
# ------------------------------------------------------------

DROP TABLE IF EXISTS `todos`;

CREATE TABLE `todos` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `owneremail` varchar(60) DEFAULT NULL,
  `ownerid` int(11) DEFAULT NULL,
  `createddate` datetime DEFAULT NULL,
  `duedate` datetime DEFAULT NULL,
  `message` text,
  `isdone` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `todos` WRITE;
/*!40000 ALTER TABLE `todos` DISABLE KEYS */;

INSERT INTO `todos` (`id`, `owneremail`, `ownerid`, `createddate`, `duedate`, `message`, `isdone`)
VALUES
	(1,'mjlee@njit.edu',1,'2017-01-01 00:00:00','2017-05-01 00:00:00','This is test #1',0),
	(2,'janedoe@njit.edu',2,'2017-01-01 00:00:00','2017-05-03 00:00:00','This is test #B',1),
	(3,'mjlee@njit.edu',1,'2017-01-02 00:00:00','2017-05-05 00:00:00','This is test #2',0),
	(4,'mjlee@njit.edu',1,'2017-01-02 00:00:00','2017-04-02 00:00:00','This is test #3',1),
	(5,'mjlee@njit.edu',1,'2017-01-01 00:00:00','2017-05-01 00:00:00','This is test #4',0),
	(6,'mjlee@njit.edu',1,'2017-01-01 00:00:00','2017-05-07 00:00:00','This is test #6',0),
	(7,'janedoe@njit.edu',2,'2017-01-01 00:00:00','2017-05-01 00:00:00','This is test #A',0),
	(8,'mjlee@njit.edu',1,'2017-01-01 00:00:00','2017-03-01 00:00:00','This is test #5',1);

/*!40000 ALTER TABLE `todos` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
