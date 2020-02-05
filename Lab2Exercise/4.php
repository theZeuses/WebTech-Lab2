<?php 
	$number1=5;
	$number2=6;
	$number3=7;

	if ($number1>$number2) {
		if ($number1>$number3) {
			echo "The number:".$number1." is the largest.";
		}
		else {
			echo "The number:".$number3." is the largest.";
		}
	}
	else {
		if ($number2>$number3) {
			echo "The number:".$number2." is the largest.";
		}
		else {
			echo "The number:".$number3." is the largest.";
		}
	}
?>