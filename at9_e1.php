<?php
	for($i=1; $i<=20; $i++){
		$nota1=rand(1,20);
		$nota2=rand(1,20);
		$nota3=rand(1,20);
		$media=($nota1+$nota2+$nota3)/3;
		echo 'O aluno ' .$i. ' tem media ' .$media;
		if($media>=9.5){
			echo ' -APROVADO <br>';
		}
		elseif ($media>8 && $media<9.5) {
			echo ' -RECUPERAÇÃO <br>';
		}
		else{
			echo ' -REPROVADO <br>';
		}

	}

?>