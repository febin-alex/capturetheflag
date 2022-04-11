<?php
session_start();
unset($_SESSION["id"]);
unset($_SESSION["name"]);
unset($_SESSION["loggedin"]);
unset($_SESSION["t1"]);
unset($_SESSION["t2"]);
unset($_SESSION["t3"]);
unset($_SESSION["t4"]);
unset($_SESSION["t5"]);
unset($_SESSION["t6"]);
header("Location:login.php");

?>
