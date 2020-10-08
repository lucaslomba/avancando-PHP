<?php

//Criando função de mensagem
function exibeMensagem(string $mensagem){
    echo $mensagem . '<br>';
}

//Criando função de sacar
function sacar(array $conta, float $valorASacar):array
{
    if($valorASacar > $conta['saldo']){
        exibeMensagem("Você não pode sacar esse valor!");
    }else{
        $conta['saldo'] -= $valorASacar; 
    }

    return $conta;
}

//Criando função de depositar
function depositar(array $conta, float $valorADepositar):array
{
    if($valorADepositar > 0){
        $conta['saldo'] += $valorADepositar;
    }else{
        exibeMensagem("Depositos precisam ser positivos");
    }

    return $conta;
}

function exibeConta(array $conta)
{
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    echo "<li>Titular: $titular. Saldo: $saldo</li>";
}