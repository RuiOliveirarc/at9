<?php
	$num1=rand(1,100);
	$num2=rand(1,100);
	$num3=rand(1,100);
	echo 'Numeros <br>';
	echo $num1. '<br>';
	echo $num2. '<br>';
	echo $num3. '<br>';
	if($num1>$num2 && $num1>$num3){
		echo "O numero maior é " .$num1;
	}
	elseif ($num2>$num1 && $num2>$num3) {
		echo "O numero maior é " .$num2;
	}
	else{
		echo "O numero maior é " .$num3;
	}
	echo "<br>";
	if($num1<$num2 && $num1<$num3){
		echo "O numero menor é " .$num1;
	}
	elseif ($num2<$num1 && $num2<$num3) {
		echo "O numero menor é " .$num2;
	}
	else{
		echo "O numero menor é " .$num3;
	}
?>