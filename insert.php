
<?php

$banco = "banco.txt";

$conteudo = $_POST["nome"] . "\n" . $_POST["email"] . "\n" . $_POST["data"] . "\n" . str_replace("\n","</br>", $_POST["mensagem"]). "\n";

$criar = fopen($banco, "a+");

fwrite($criar, $conteudo);

if ($criar == true) {
    echo "Dados armazenados em banco.txt";
}else{
    echo "Erro ao tentar salvar dados em banco.txt";
}

fclose($criar);
header('Location: /SW/index.php');

?>