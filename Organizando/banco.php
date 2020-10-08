<?php
//Include -> arquivos não essenciais
//require -> arquivos essenciais
//require_once -> arquivos essenciais e verifica se já não foi incluido

//Incluido outro arquivo PHP
require_once('funcoes.php');

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

//Sacando dinheiro
$contasCorrentes['444.969.008-74'] = sacar($contasCorrentes['444.969.008-74'], 500);

//Depositando dinheiro
$contasCorrentes['444.969.008-74'] = depositar($contasCorrentes['444.969.008-74'], 600);

//Deletar cliente do array
unset($contasCorrentes['444.969.008-74']);


// echo "<ul>";
// //Exibindo dados
// foreach($contasCorrentes as $cpf => $conta){
//     //['titular' => $titular, 'saldo' => $saldo] = $conta;
//     exibeConta($conta);

//     //or

//     //exibeMensagem("$cpf {$conta['titular']} {$conta['saldo']}");
// }

// echo "</ul>";

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contas correntes</h1>

    <dl>
        <?php foreach($contasCorrentes as $cpf => $conta) {?>
            <dt><?= $conta['titular']; ?> - <?= $cpf; ?></dt>
            <dd><?= "Saldo: $conta[saldo]"; ?></dd>
        <?php } ?>
    </dl>
</body>
</html>