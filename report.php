<?php

require_once "functions.php";

requireLogin();

$user = $_SESSION["user"];

$month = date("Y-m");

if (isset($_GET["month"])) {
    $month = $_GET["month"];
}

$start = new DateTime($month . "-01");
$end   = new DateTime($month . "-01");
$end->modify("last day of this month");

?>
<!DOCTYPE html>

<html lang="tr">

<head>

<meta charset="UTF-8">

<link rel="stylesheet" href="assets/style.css">

<title>Yeni Rapor</title>

</head>

<body>

<div class="topbar">

<div class="logo">

Yeni Faaliyet Raporu

</div>

<div class="userinfo">

<a href="dashboard.php">

Ana Sayfa

</a>

</div>

</div>

<div class="container">

<h1>Bu sayfa bir sonraki bölümde hazırlanacak.</h1>

</div>

</body>

</html>
