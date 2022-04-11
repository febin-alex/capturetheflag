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
$id=$_SESSION["id"];
  $sql = "SELECT t1,t2,t3,t4,t5,t6,t7,t8,t9,t10,t11,t12,t13,t14,t15, SUM(`t1`+ `t2`+ `t3`+ `t4`+ `t5`+ `t6`+ `t7`+ `t8`+ `t9`+ `t10`+ `t11`+ `t12`+ `t13`+ `t14`+ `t15`) AS sum FROM `users` WHERE id ='".$id."'";

        
if($result = mysqli_query($link, $sql)){
      
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
                $tot=  $row['sum'];
                $_SESSION["sum"]=$tot;
                $_SESSION["t1"]=$row["t1"];
                $_SESSION["t2"]=$row["t2"];
                $_SESSION["t3"]=$row["t3"];
                $_SESSION["t4"]=$row["t4"];
                $_SESSION["t5"]=$row["t5"];
                $_SESSION["t6"]=$row["t6"];
                $_SESSION["t7"]=$row["t7"];
                $_SESSION["t8"]=$row["t8"];
                $_SESSION["t9"]=$row["t9"];
                $_SESSION["t10"]=$row["t10"];
                $_SESSION["t11"]=$row["t11"];
                $_SESSION["t12"]=$row["t12"];
                $_SESSION["t13"]=$row["t13"];
                $_SESSION["t14"]=$row["t14"];
                $_SESSION["t15"]=$row["t15"];
                
        }
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

  
    // Close connection
    mysqli_close($link);

     $_SESSION["sum"]=$tot;

?>
<!DOCTYPE html>
<html>
<head>
<title>CTF</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
<style>
body {
  background-color: black;
  text-align: center;
  color: white;
  font-family: Arial, Helvetica, sans-serif;
  background-image: url('https://wallpaperset.com/w/full/8/c/6/519967.jpg');
  background-repeat: no-repeat;
    background-attachment: fixed;
  background-size: cover;
}
h3 {
    text-align: right;
}
h2{
    text-align:left;
}
</style>
</head>
<body>

<h1>Capture most flags!</h1>
<h2>Captured Flags : <?php echo $tot; ?></h2>
<div>
<a href="hiddent.php">
<img src="https://www.seekpng.com/png/full/9-96475_red-flag-red-flag-transparent-background.png" alt="indianpin" 
style="width:50px; position : fixed ; right:32%; bottom:42%; width:35px; height:35px; border:none;"></a>
</div>
<div>
<a href="binary.php">
<img src="https://www.seekpng.com/png/full/9-96475_red-flag-red-flag-transparent-background.png" alt="russianpin" 
style="width:50px;position : fixed ; right:38%; bottom:65%; width:35px; height:35px; border:none;"></a>
</div>
<div>
<a href="binary1.php">
<img src="https://www.seekpng.com/png/full/9-96475_red-flag-red-flag-transparent-background.png" alt="africanpin" 
style="width:50px;position : fixed ; right:50%; bottom:40%; width:35px; height:35px; border:none;"></a>
</div>
<div>
<a href="comingsoon.html">
<img src="https://www.seekpng.com/png/full/9-96475_red-flag-red-flag-transparent-background.png" alt="americannpin" 
style="width:50px;position : fixed ; right:80%; bottom:65%; width:35px; height:35px; border:none;"></a>
</div>
<div>
<a href="comingsoon.html">
<img src="https://www.seekpng.com/png/full/9-96475_red-flag-red-flag-transparent-background.png" alt="americanspin" 
style="width:50px;position : fixed ; right:67%; bottom:20%; width:35px; height:35px; border:none;"></a>
</div>
<div>
<a href="morse.php">
<img src="https://www.seekpng.com/png/full/9-96475_red-flag-red-flag-transparent-background.png" alt="icelandpin" 
style="width:50px;position : fixed ; right:63%; bottom:82%; width:35px; height:35px; border:none;"></a>
</div>
    <p>
        <h3>
        <a href="leaderboard.php" class="btn btn-danger">Leaderboard</a>
        <br>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <br>
        <a href="logout.php" class="btn btn-danger">Log Out</a></h3>
    </p>
</body>
</html>