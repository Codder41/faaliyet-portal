<?php

require_once "functions.php";

if(isLogin()){

    header("Location:dashboard.php");
    exit;

}

$error="";

if($_SERVER["REQUEST_METHOD"]=="POST"){

    if(login($_POST["username"],$_POST["password"])){

        header("Location:dashboard.php");
        exit;

    }

    $error="Kullanıcı adı veya şifre hatalı.";

}

?>
<!DOCTYPE html>

<html lang="tr">

<head>

<meta charset="UTF-8">

<title><?=APP_NAME?></title>

<link rel="stylesheet" href="assets/style.css">

</head>

<body>

<div class="login-box">

<h1><?=APP_NAME?></h1>

<?php if($error){ ?>

<p class="error"><?=$error?></p>

<?php } ?>

<form method="post">

<input
type="text"
name="username"
placeholder="Kullanıcı Adı"
required>

<input
type="password"
name="password"
placeholder="Şifre"
required>

<button type="submit">

Giriş Yap

</button>

</form>

</div>

</body>

</html>
