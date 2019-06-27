<?php
	function displayQ($which, $answer)
    {
    	echo "<form method=GET action='Action-06-27-";
        if($which < $_SESSION["nQ"] - 1) echo ($which + 1);
        else echo "last";
        echo ".php' >";
    	if($which == 0)
        {
        	echo "What is 1 + 1?<br/>";
            echo "<input type=radio name=choice value=A />A. 1 <br/>";
            echo "<input type=radio name=choice value=B />B. 2 <br/>";
            echo "<input type=radio name=choice value=C />C. 3 <br/>";
            echo "<input type=radio name=choice value=D />D. 4 <br/>";
            echo "<input type=radio name=choice value=E />E. 5 <br/>";
        }
        else if($which == 1)
        {
        	echo "What is 2 * 3?<br/>";
            echo "<input type=radio name=choice value=A />A. 2 <br/>";
            echo "<input type=radio name=choice value=B />B. 3 <br/>";
            echo "<input type=radio name=choice value=C />C. 4 <br/>";
            echo "<input type=radio name=choice value=D />D. 5 <br/>";
            echo "<input type=radio name=choice value=E />E. 6 <br/>";  
        }
        else if($which == 2)
        {
        	echo "What is 1 * 3?<br/>";
            echo "<input type=radio name=choice value=A />A. 3 <br/>";
            echo "<input type=radio name=choice value=B />B. 3 <br/>";
            echo "<input type=radio name=choice value=C />C. 4 <br/>";
            echo "<input type=radio name=choice value=D />D. 5 <br/>";
            echo "<input type=radio name=choice value=E />E. 6 <br/>";  
        }
        
        echo "<input type=hidden name=answer value=".$answer." />";

        echo "<input type=submit value=Prev name=submit formaction='Action-06-27-".($which - 1).".php' ";
        if($which == 0) echo " disabled";
        echo "/>";
        echo "<input type=submit name=submit ";
        if($which == $_SESSION["nQ"] - 1) echo " value='Submit Test'";
        else echo " value=Next ";
        echo "/><br/>";
        
        echo "<form/>";
    }
    
    function showWrongInfo()
    {
    	echo "Your username or password was incorrect.<br/>";
        echo "Click <a href='Activity-06-26.php'>here</a> to try again<br/>";
    }
?>