<?php  
session_start();
unset($_SESSION['instagram']);
unset($_SESSION['igObject']);
header("Location: http://mashd.it/#/social");
?>