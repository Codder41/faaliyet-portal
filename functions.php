<?php

require_once "config.php";

function loadUsers()
{
    if(!file_exists(USER_FILE))
        return [];

    $json=file_get_contents(USER_FILE);

    return json_decode($json,true);
}

function saveUsers($users)
{
    file_put_contents(
        USER_FILE,
        json_encode(
            $users,
            JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE
        ),
        LOCK_EX
    );
}

function login($username,$password)
{
    $users=loadUsers();

    foreach($users as $user){

        if(
            $user["username"]==$username &&
            $user["password"]==$password
        ){

            $_SESSION["login"]=true;
            $_SESSION["user"]=$user;

            return true;

        }

    }

    return false;
}

function isLogin()
{
    return !empty($_SESSION["login"]);
}

function requireLogin()
{
    if(!isLogin()){

        header("Location:index.php");
        exit;

    }
}

function logoutUser()
{
    session_destroy();
}
