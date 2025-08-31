<?php

function calcularLivrosPorUsuario($usuarios,$livros){
    $tamanho = count($usuarios);
    echo $tamanho;
    $clock = 0;
    while($clock < $tamanho ){
        echo $livros[$clock]."<br>";    
        $clock++;
    }  

}

$a = [1, 2, 1, 3, 2];
$b = [101, 102, 103, 104, 105]; 

calcularLivrosPorUsuario($a,$b);
?>