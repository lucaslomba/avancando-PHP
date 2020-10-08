<?php

//Arrasys associativos

$contasCorrentes = [
    '444.969.008-74' => [
        'titular' => 'Lucas',
        'saldo' => 1000
    ], 
    '155.154.588-45' => [
        'titular' => 'Vinicius',
        'saldo' => 800
    ], 
    '155.154.565-84' => [
        'titular' => 'Nicolas',
        'saldo' => 1400
    ]
];

//adicionar no array passando a posição
$contasCorrentes['342.564.768-35'] = [
    'titular' => 'João',
    'saldo' => 100
];

foreach($contasCorrentes as $cpf => $conta){
    echo $conta['titular'] . PHP_EOL;
}