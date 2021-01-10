DROP DATABASE IF EXISTS `nwhack2021`;
CREATE DATABASE `nwhack2021`;
USE `nwhack2021`;

CREATE TABLE `Account` (
  `Company_Name` VARCHAR(255) NOT NULL,
  `Password` VARCHAR(255) NOT NULL,
  `Location` VARCHAR(255) NOT NULL,
  `Name_Of_Owner` VARCHAR(255) NOT NULL,
  `Email` VARCHAR(255)  UNIQUE,
  `Description` VARCHAR(255) UNIQUE,
  `Category` VARCHAR(100) UNIQUE,
  PRIMARY KEY (`Company_Name`)
); 
INSERT INTO `Account` VALUES ('1','Admin', '2205 Lower Mall','Admin', 'he0qiuhan@gmail.com','abc', 'Byproduct');
INSERT INTO `Account` VALUES ('2','William1', '2205 Lower Mall','123456','wenhan.wu26@gmail.com','xxxx', 'others');


CREATE TABLE `Posts` (
  `Product_Name` VARCHAR(255) NOT NULL,
  `Location` VARCHAR(255) NOT NULL UNIQUE,
  `Time` VARCHAR(255)  UNIQUE,
  `Detail` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`Product_Name`, `Location`, `Time`)
); 
INSERT INTO `Posts` VALUES ('a','bb', 'cc','BACKPACK');
INSERT INTO `Posts` VALUES ('c','s','ds','WORKERS');