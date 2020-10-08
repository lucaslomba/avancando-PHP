<?php

// Uma função retorna um valor, ou seja, a chamada da função representa um valor após sua execução. 
// Uma subrotina apenas executa um código isolado.
// Subrotina -> Faz o que deve fazer e pronto
// Função -> Faz o que deve fazer e retorna uma resposta/valor

//Criando Sub-rotinas
function exibeMensagem(string $mensagem){
    echo $mensagem . PHP_EOL;
}

//Criando função
function sacar(array $conta, float $valorASacar):array
{
    if($valorASacar > $conta['saldo']){
        exibeMensagem("Você não pode sacar esse valor!");
    }else{
        $conta['saldo'] -= $valorASacar; 
    }

    return $conta;
}

//Criando função
function depositar(array $conta, float $valorADepositar):array
{
    if($valorADepositar > 0){
        $conta['saldo'] += $valorADepositar;
    }else{
        exibeMensagem("Depositos precisam ser positivos");
    }

    return $conta;
}

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


//adicionar Conta corrente no array passando a posição
$contasCorrentes['342.564.768-35'] = [
    'titular' => 'João',
    'saldo' => 100
];


//Sacando dinheiro
$contasCorrentes['444.969.008-74'] = sacar($contasCorrentes['444.969.008-74'], 500);

//Depositando dinheiro
$contasCorrentes['444.969.008-74'] = depositar($contasCorrentes['444.969.008-74'], 600);


//Exibindo dados
foreach($contasCorrentes as $cpf => $conta){
    exibeMensagem("$cpf $conta[titular] $conta[saldo]");

    //or

    exibeMensagem("$cpf {$conta['titular']} {$conta['saldo']}");
}