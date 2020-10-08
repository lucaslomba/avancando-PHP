<?php

//Arrasys associativos

$conta1 = [
    'titular' => 'Lucas',
    'saldo' => 1000
];

$conta2 = [
    'titular' => 'Vinicius',
    'saldo' => 800
];

$conta3 = [
    'titular' => 'Nicolas',
    'saldo' => 1400
];

$contasCorrentes = [$conta1, $conta2, $conta3];

for($i = 0; $i <= count($contasCorrentes); $i++){
    echo $contasCorrentes[$i]['titular'] . PHP_EOL;
}