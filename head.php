<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="/">SESSION</a>

  <?php if(isset($_SESSION['name'])) { ?>
    <a class="navbar-brand" href="logout.php">logout</a>
  <?php } else { ?>
    <a class="navbar-brand" href="login.php">login</a>

  <?php } ?>
</nav>