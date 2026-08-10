<?php

require_once "functions.php";

requireLogin();

if($_SESSION["user"]["role"]!="admin"){

die("Yetkisiz erişim");

}

$users=loadUsers();

?>
<!DOCTYPE html>

<html lang="tr">

<head>

<meta charset="UTF-8">

<link rel="stylesheet" href="assets/style.css">

<title>Kullanıcılar</title>

</head>

<body>

<div class="topbar">

<div class="logo">

Kullanıcı Yönetimi

</div>

<div class="userinfo">

<a href="dashboard.php">

Dashboard

</a>

</div>

</div>

<div class="container">

<table border="1" cellpadding="8" cellspacing="0">

<tr>

<th>ID</th>

<th>Ad Soyad</th>

<th>Kullanıcı</th>

<th>Rol</th>

</tr>

<?php foreach($users as $u){ ?>

<tr>

<td><?=$u["id"]?></td>

<td><?=$u["name"]?></td>

<td><?=$u["username"]?></td>

<td><?=$u["role"]?></td>

</tr>

<?php } ?>

</table>

</div>

</body>

</html>
