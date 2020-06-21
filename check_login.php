<?php
error_reporting(E_ALL^E_NOTICE^E_WARNING);
session_start();
if(!isset($_SESSION['admin_name'])){
	echo "<script>parent.location.href='login.php';</script>";
}
?>
