<?php

session_start();
include_once 'class.user.php';
$user = new User();
$uid = $_SESSION['uid'];
if (!$user->get_session()) {
    header("location:login.php");
}

if (isset($_GET['q'])) {
    $user->user_logout();
    header("location:login.php");
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        h1 {
            font-family: 'Georgia', Times New Roman, Times, serif;
        }
    </style>
</head>

<body>

    <div id="container">
        <div id="header"><a href="home.php?q=logout">LOGOUT</a></div>
        <div id="main-body">
            <h1>Hello <?php $user->get_fullname($uid); ?></h1>
        </div>
        <div id="footer"></div>
    </div>
</body>

</html>