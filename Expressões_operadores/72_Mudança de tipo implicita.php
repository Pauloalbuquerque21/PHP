<?php


echo 2 . 3;
echo "<br>";

if(is_string(2 . 3)){
    echo "É string";
}

$nome = "Matheus";
$sobrenome = "Battisti";

$nomeCompleto = $nome."".$sobrenome;
echo "<br>";
echo $nomeCompleto;

?>