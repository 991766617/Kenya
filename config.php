<?php
session_start();
//error_reporting(0);
date_default_timezone_set('PRC');
header("Content-type: text/html; charset=utf-8"); 

$dbhost='localhost';
$dbname='���ݿ���';
$dbuser='�û��� ';
$dbpwd='����';
$con=mysqli_connect($dbhost,$dbuser,$dbpwd,$dbname);

$appId='';
$appSecret='';

$search = array('%','\\','/','"','\'','.','<','>','?','*','(',')',',','#','insert','create','drop','alter','select','from','delete','union','update');


















