<?php

$passagem = 0;

$passagem = $_POST ["passagens"];

if (passagens >= 4){
	$total = (passagens - 4) * 2.80;
	$total = $total + (4 * 1.40);
}
else{
	$total = $passagens * 1.40 ;
}

echo " voce gastou gastou com passagens R$" . nuber_format($total, 2,",",".") ;
 
?>
