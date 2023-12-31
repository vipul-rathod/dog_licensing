<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "db_doglicense";

$table = "owner_data";

$conn = mysqli_connect($servername, $username, $password);

// Create database if does not exists
$dbSql = "CREATE DATABASE IF NOT EXISTS `{$database}`";
$dbResult = mysqli_query($conn, $dbSql);

// Create tables if does not exists
$tableSql = "CREATE TABLE IF NOT EXISTS `{$database}`.`{$table}` (
    `id` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `siteStreetName` VARCHAR(25) NOT NULL,
    `siteStreetNumber` VARCHAR(25) NOT NULL,
    `siteUnitNumber` VARCHAR(10),
    `mapBlockLot` VARCHAR(25),
    `zone` VARCHAR(25),
    `ownerName` VARCHAR(25) NOT NULL,
    `ownerStreetNumber` INT(11) NOT NULL,
    `ownerStreetName` VARCHAR(25) NOT NULL,
    `ownerCity` VARCHAR(25) NOT NULL,
    `ownerState` VARCHAR(25),
    `ownerZipcode` VARCHAR(25) NOT NULL,
    `ownerUnitNumber` VARCHAR(10),
    `dogOwnerName` VARCHAR(25) NOT NULL,
    `dogOwnerStreetNumber` INT(11),
    `dogOwnerStreetName` VARCHAR(25),
    `dogOwnerCity` VARCHAR(25),
    `dogOwnerState` VARCHAR(25),
    `dogOwnerZipcode` VARCHAR(25),
    `dogOwnerTelephone` VARCHAR(12) NOT NULL,
    `dogOwnerEmail` VARCHAR(25),
    `dogPhone` VARCHAR(12),
    `dogOwnerUnitNumber` VARCHAR(10))";

$result = mysqli_query($conn, $tableSql);

?>