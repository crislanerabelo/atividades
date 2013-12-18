
<?php

echo "<b>Hora Certa: <b/>";
echo '<meta http-equiv="refresh" content="1">';
$dataAtual = getdate();



$diaSemana = $dataAtual ["wday"];

switch ($diaSemana) {
Case 0 :
	echo " Domingo " ;
Break ;

Case 1 : 
	echo " segunda " ;
Break ;

Case 2 :
	echo " Terça " ;
Break ;

Case 3 :
	echo " Quarta " ;
Break ;

Case 4 :
	echo " Quinta " ;
Break ;
 
Case 5 :
	echo " Sexta " ;
Break ;

Case 6 :
	echo " Sabado " ;
Break ;

}


echo $dataAtual ["mday"];
echo"/";
echo $dataAtual ["mon"];
echo"/";
echo $dataAtual ["year"] . "<br/>" . "<br/>";

$dataAtual = getdate();
echo $dataAtual["hours"] - 4;
echo":";

echo $dataAtual["minutes"];
echo":";

echo $dataAtual["seconds"];

?>
