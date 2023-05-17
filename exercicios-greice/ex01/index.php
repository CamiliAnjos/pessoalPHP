<?php
 function somar($numero1, $numero2) {
 	$result = $numero1 + $numero2;
 	if ($result < 0) {
 		echo 0;
 		return;
 	}
 	echo $result;
 }
 somar(4,-6);

 ////funcoes
// 2) Crie uma função que receba 2 valores inteiros como argumentos e retorne a sua soma. Se o valor da soma for negativo o método deverá retornar o valor 0.