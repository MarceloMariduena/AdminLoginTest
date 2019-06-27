<?php 
	session_start(); 
	require_once("showAllQ.php");    
?>

<?php
	if($_SESSION["user"] == "admin")
    {   
    	if($_GET["choice"] == $_GET["answer"]) $_SESSION["grade"] += 1;
        displayQ(2, "A");
    }
    else 
    {
    	showWrongInfo();
    }
?>
