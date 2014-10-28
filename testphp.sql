/*
SQLyog Community Edition- MySQL GUI v7.02 
MySQL - 5.5.36 : Database - testphp
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

/*Table structure for table `colors` */

DROP TABLE IF EXISTS `colors`;

CREATE TABLE `colors` (
  `color_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `color_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`color_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `colors` */

insert  into `colors`(`color_id`,`color_name`) values (1,'Red'),(2,'Orange'),(3,'Yellow'),(4,'Green'),(5,'Blue'),(6,'Indigo'),(7,'Violet');

/*Table structure for table `votes` */

DROP TABLE IF EXISTS `votes`;

CREATE TABLE `votes` (
  `vote_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `color_id` int(11) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `votes` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`vote_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `votes` */

insert  into `votes`(`vote_id`,`color_id`,`city`,`votes`) values (1,5,'Anchorage',10000),(2,3,'Anchorage',15000),(3,1,'Brooklyn',100000),(4,5,'Brooklyn',250000),(5,1,'Detroit',160000),(6,3,'Selma',15000),(7,7,'Selma',5000);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
