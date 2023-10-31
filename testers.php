<?php
//Разрешение браузеру на осуществление кроссдоменных запросов
//header('Access-Control-Allow-Origin: http://www.ajmaker.ru');
header('Access-Control-Allow-Origin: *');
//переменные для доступа к БД
$mysql_host = "localhost";
$mysql_database = "1138790";
$mysql_user = "1138790";
$mysql_password = "AJAJa1j6m0a5";
// Create connection
$conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_database);
//Проверяем наличие передеваемых данных
if(isset($_POST['start'])) $q1 = mysqli_query($conn,"UPDATE `PITESTERS` SET `STARTS`=`STARTS`+1");
if(isset($_POST['result'])) $q2 = mysqli_query($conn,"UPDATE `PITESTERS` SET `RESULTS`=`RESULTS`+1");
mysqli_close($conn);
?>