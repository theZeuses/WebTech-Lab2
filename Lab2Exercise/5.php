 <?php

 	echo "The odd numbers between 10 and 100 are:<br>";
	for ($x = 10; $x <= 100; $x++) {
		$remainder=$x%2;
		if($remainder!="0"){
			echo "$x <br>";
		}	    
	}
?> 