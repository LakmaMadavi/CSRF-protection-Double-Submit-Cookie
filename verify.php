<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/sketchy/bootstrap.min.css">

</head>
<body background="bg4.jpg" style="background-position: right top;background-attachment: fixed;background-size:cover;">
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Welcome</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation" style="">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor03">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="user.php">Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://cyscorpioneye.wordpress.com/" target="_blank">Super Admin Blog</a>
      </li>
      
    </ul>
    <form action='logout.php' method="POST" class="form-inline my-2 my-lg-0">
      <?php
        if(isset($_COOKIE['user_cookie'])){
            require_once('structure.php');
            showLogout();
        }
      ?>
    </form>
  </div>
 </nav>

<?php
    if(isset($_COOKIE['user_cookie'])){
        require_once('structure.php');
        session_start();
        if($_POST['csrf-token'] ==$_COOKIE['CSRF-token'])
        {
            $firstname=$_POST['fname'];
            $lastname=$_POST['lname'];
            $encode=$_POST['encode'];
            showVerify($firstname,$lastname);
        } else {
            showProfile();
        }
        
    }
?>


</body>
</html>