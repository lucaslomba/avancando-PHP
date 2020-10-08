<?php

//Usando array
$idadeList = [21, 21, 20, 30, 50, 12];

//tamanho da lista
$tamanho = count($idadeList);

for($i = 0; $i < count($idadeList); $i++){
    echo $idadeList[$i] . PHP_EOL;
}