<?php
//Esse tipo de atribuição  =& cria uma relação entra as duas variaveis de igualdade, logo se você alterar uma, vai consequentemente alterar a outra.

$y = 15;

$y =& $x;

echo $x

echo "Atribuição após ref";
echo "<br>";

?>