<?php 
	session_start(); 
	require_once("showAllQ.php");    
?>

<?php
	if($_SESSION["user"] == "admin" || ($_POST["user"] == "admin" && $_POST["pass"] == "admin"))
    {
    	$_SESSION["user"] = "admin";
        $_SESSION["grade"] = 0;
        $_SESSION["nQ"] = 3;
        
        displayQ(0, "C");
    }
    else 
    {
    	showWrongInfo();
    }
    
?>