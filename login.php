<?php
if(isset($_SESSION['logged'])){header("location:GhostSite.php");}
if(isset($_POST['login']) && isset($_POST['pass'])){
  require_once 'db.php';
  $login = $_POST['login'];
  $pass = $_POST['pass'];
  $query = "SELECT * FROM users WHERE login = '".$login."';";
  $result = mysqli_query($conn,$result);
  $row = mysqli_fetch_array($result);
  
  if($row){
  if($row['password'] == $pass){
   $_SESSION['logged'] = true;
   header("location:GhostSite.php");
  }else{
  $alert = "Wrong Password!";
  }
  }else{
   $alert = "Wrong Login!";
  }
 }
?>
<html>
  <head>
    <title>GhostSite - login</title>
    <link rel="stylesheet" href="GhostSite.css" type="text/css">
  </head>
  <body>
    <div class="loginbox">
      <form method="POST" action="">
        <input class="login" type="text" name="login" placeholder="Login"><br>
        <input class="login" type="password" name="pass" placeholder="Password123"><br>
        <input class="loginbutton" type="submit" value="Login">
      </form>
    </div>
  </body>
</html>
