<?php
	for($i=3;$i>0;$i--){
		for($j=1;$j<=$i;$j++){
			echo "*";
		}
		echo '<br>';
	}
	echo '<br>';
	for($i=3;$i>0;$i--){
		for($j=1;$j<=$i;$j++){
			echo $j;
		}
		echo '<br>';
	}
	echo '<br>';
	for($i=1;$i<=3;$i++){
		for($j=65;$j<$i+65;$j++){
			echo chr($j);
		}
		echo '<br>';
	}

?>