<?php

require_once "functions.php";

requireLogin();

$user=$_SESSION["user"];

?>
<!DOCTYPE html>

<html lang="tr">

<head>

<meta charset="UTF-8">

<title>Dashboard</title>

<link rel="stylesheet" href="assets/style.css">

</head>

<body>

<div class="topbar">

<div class="logo">

Sistem Faaliyet Portalı

</div>

<div class="userinfo">

Hoşgeldiniz

<b><?=htmlspecialchars($user["name"])?></b>

|

<a href="logout.php">Çıkış</a>

</div>

</div>

<div class="container">

<div class="menu">

<a href="report.php" class="card">

📝

<h2>Yeni Rapor</h2>

</a>

<a href="reports.php" class="card">

📂

<h2>Raporlarım</h2>

</a>

<?php if($user["role"]=="admin"){ ?>

<a href="admin.php" class="card">

👥

<h2>Kullanıcılar</h2>

</a>

<?php } ?>

</div>

</div>

</body>

</html>
