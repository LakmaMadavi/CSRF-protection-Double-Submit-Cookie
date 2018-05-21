<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/sketchy/bootstrap.min.css">
    <style media="screen">
        #notice{display: none;}
    </style>
</head>
<body background="bg3.png" style="background-position: right top;background-attachment: fixed;background-size:cover;">
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Log In To Get Services</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation" style="">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor03">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="https://cyscorpioneye.wordpress.com/">Blog <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <?php
        if(!(isset($_COOKIE['user_cookie'])))
        {
            require_once('structure.php');
            showForm();
        }
    ?>
    <?php
        if((isset($_COOKIE['user_cookie'])))
        {
            require_once('structure.php');
            showProfileButton();
            showLogout();
            if(isset($_POST['logout'])){
                header('Location:logout.php');
            }
            if(isset($_POST['prof'])){
                header('Location:user.php');
            }
        }
    ?>
  </div>
  
</nav> 
<?php
        if(!(isset($_COOKIE['user_cookie'])))
        {
            require_once('structure.php');
            showInformation();
            showSSStask();
        }
    ?>


</body>
</html>


<?php 
        if(isset($_POST['login'])){
            require_once('validate.php');
            login();
            
        }
?>