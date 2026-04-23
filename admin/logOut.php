<?php
session_start();

$_SESSION = [];        // clear all session data
session_unset();       // unset variables
session_destroy();     // destroy session

header("Location: ../adminlogin.php");
exit();
?>
