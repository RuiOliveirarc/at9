<?php
	$numa=0;
	while ($numa<1000) { 
		$num=rand(1,100);
		$soma=$num+$numa;
		echo $numa. ' + ' .$num. ' = ' .$soma. '<br>';
		$numa=$soma;
	}
?>