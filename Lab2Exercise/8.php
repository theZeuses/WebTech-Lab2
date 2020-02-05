<?php
	$twodimarray=array(array(1,2,3,'A'),array(1,2,'B','C'),array(1,'D','E','F'));
	for($i=0;$i<3;$i++){
		for($j=0;$j<3-$i;$j++){
			echo $twodimarray[$i][$j];
		}
		echo "<br>";
	}
	echo "<br>";
	for($i=0;$i<3;$i++){
		for($j=3-$i;$j<=3;$j++){
			echo $twodimarray[$i][$j];
		}
		echo "<br>";
	}
?>