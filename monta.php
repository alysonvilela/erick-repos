<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monta</title>
</head>
<body>

<?php

$banco = "banco.txt";
if (isset($_GET['codigo'])) {
    if (file_exists($banco) && !empty(file_get_contents($banco))) {
        $lista = explode("\n", file_get_contents($banco));
        $informacoes = 4;
        $conjunto = $informacoes * ($_GET['codigo'] - 1);

        $nome = $lista[$conjunto];
        $email = $lista[$conjunto + 1];
        $data = $lista[$conjunto + 2];
        $mensagem = str_replace("<br>", "\n", $lista[$conjunto + 3]);

    }
}

?>

<form method = "post" action = "update.php">
    <label for = "codigo" >Código: </label>
    <input type = "number" id = "codigo" placeholder = "<?php echo $_GET['codigo']; ?>"
    value = "<?php echo $_GET['codigo']; ?>" required><br>

    <label for ="nome">Nome:</label>
    <input for ="text" id ="nome" name = "nome" placeholder = "<?php echo $nome; ?> " value = "<?php echo $nome; ?>"
    required><br>

    <label for = "email">Email:</label>
    <input type = "text" id = "email" name = "email" placeholder = "<?php echo $email; ?>" value = " <?php echo $email; ?>"
    required><br>

    <label for= "mensagem"> Mensagem:</label>
    <textarea type = "text" id = "mensagem" name = "mensagem"
    rows = "10" cols = "40"> <?php echo $mensagem; ?> </textarea><br>

    <input type = "submit" value = "Enviar">

</form>
<br><br><a href = "index.php">Voltar</a>
</body>

</html>