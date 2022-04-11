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
$id = $_SESSION['id'];

 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

        
        // Prepare an insert statement
        $sql = "UPDATE users SET t2=?, score=? WHERE id=?";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "iii", $param_t2, $param_score, $param_id);
            
            // Set parameters
            $param_t2 = 1;
            $param_score=$_SESSION["sum"]+1;
            $param_id = $id;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: home.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
$_SESSION[t2]=1;
?>
 
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Congrats</title>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
            <style>
             body {
                 color:white;
                background-image: url('https://ewscripps.brightspotcdn.com/dims4/default/074e940/2147483647/strip/true/crop/5760x3240+0+300/resize/1280x720!/quality/90/?url=http%3A%2F%2Fewscripps-brightspot.s3.amazonaws.com%2Fc6%2Ff7%2F2fe2062f4c85a0689a74f11f0ebc%2Fmarkus-spiske-iar-afb0qqw-unsplash.jpg');
                }
                h3{
                    text-align:right;
                }
                </style>
    </head>
    <body>
        <center>
        <h1>Get the Flag!</h1>
        
        <br>
        <br>
        <br>
<a href="welcome.php">
<img src="https://www.seekpng.com/png/full/9-96475_red-flag-red-flag-transparent-background.png" alt="americanspin" 
style="width:300px;position : fixed ;right: 37%; bottom :35%; height:300px; border:none;"></a>
        </center>
    </body>
</html>