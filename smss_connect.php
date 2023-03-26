<?php
$hostname="localhost";
$user="root";
$password="";
$dbname="";
$system_office_code=""; 

$connect=mysqli_connect($hostname,$user,$password,$dbname) or die("Could not connect MySql");
mysqli_query($connect,"SET NAMES utf8");
?> 