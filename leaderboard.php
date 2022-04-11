<?php
error_reporting (E_ALL ^ E_NOTICE);
// Include config file
require_once "config.php";
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
$id=$_SESSION['id'];
$r=1;
  $sql = "SELECT `username`, `score` FROM `users` ORDER BY score DESC limit 10";

        
$result = mysqli_query($link, $sql);
?>
 
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http.equiv="X-UA-Compatible" content="ie-edge">
<title>CTF</title>
 <link rel="stylesheet" href="lstyle.css">

</head>
<body>
  <h1><b>SCORE BOARD</b></h1>

<h3 black>
<a href="welcome.php" class="btn btn-warning">Back to map</a>
<br>
<a href="logout.php" class="btn btn-danger">Log Out</a>   
</h3>
<section class="wrapper">
  <div id="stars"></div>
  <div id="stars2"></div>
  <div id="stars3"></div>>

<center>
    <table >
<tr>
<th> USERNAME </th>
<th> SCORE </th>
</tr>
<?php 
 
while($row = mysqli_fetch_array($result)){

                echo "<tr><td><center>" . $row['username'] . "</center></td><td><center>" . $row['score'] . "<center></td></tr>";
        } ?>
</center>
</section>
</body>
</html>