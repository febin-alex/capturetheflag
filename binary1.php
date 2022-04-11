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
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viesport" content="width=device-width,initial-scale=1">  
        <title>Question 3</title>
 <link rel="stylesheet" href="bstyle.css">
        
    </head>  
    <body>
        <script>
            function myfun()
            {
                var a= document.getElementById("password").value;
               
                if(a==""){
                    document.getElementById("messages").innerHTML="** Please Enter password";
                    return false;
                }
                if(a=="bits"){
                    document.getElementById("messages").innerHTML="** LOGIN SUCCESS :***)";
                    return true;
                }
                if(a !="julius"){
                    document.getElementById("messages").innerHTML="** Sorry wrong password";
                    return false;
                }

            }
        </script>
        <center>  
        <h1>Decode the <b>binary code :</b></h1>  
        <h3><a href="welcome.php" class="btn btn-warning">Back to Map</a>
        <br>    
        <a href="logout.php" class="btn btn-danger">Log Out</a></h3>
            
            <h2>(hint: text)</h2><br>
            <h4>01100010 01101001 01110100 01110011</h4>
 
            <div class="wrapper">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span> 
            </div>

            <div class="container">
                <h1 class="label">Enter Password</h1>
                <form class="login_form" action="home3.php" method="post" name="form" onsubmit="return myfun()">
                    <div class="font font2"></div>
                    <input autocomplete="off" type="password" id="password" value="">
                    <span id="messages" style="color: red;"></span>
                    <br>
                    <button type="submit"<?php if($_SESSION["t3"]==1){
                        echo "disabled title='already attempted'"; }?>>Continue</button>

                </form>
            </div>
             
        </center> 

        </body>
</html>