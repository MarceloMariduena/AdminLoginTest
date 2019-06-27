<?php 
	session_start(); 
	require_once("showAllQ.php");    
?>

<?php 
	if($_SESSION["user"] == "admin")
    {
    	if($_GET["choice"] == $_GET["answer"])
        {
        	$_SESSION["grade"] += 1;
        }
        echo "<hr/>";
        echo "You answered " . $_SESSION["grade"] . " correctly out of " . $_SESSION["nQ"] . " questions. <br/>";
        echo "You grade is " . round($_SESSION["grade"]/$_SESSION["nQ"]*100,2) . "%<br/>";
        
        session_unset();
        session_destroy();
    }
    else 
    {
    	showWrongInfo();
    }
?>