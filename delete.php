
<?php
if (isset($_GET['codigo'])) {
    $banco = "banco.txt";
    $informações = 4; 
    $lista = explode("\n", file_get_contents($banco));
    array_splice($lista, $informações * ($_GET['codigo'] - 1), $informações);
    
    for ($i = 0; $i < count($lista) - 1; $i++) {
        $texto .= $lista[$i] . "\n";
    }

    unlink($banco);
    $criar = fopen($banco, "a+");
    fwrite($criar, $texto);
    fclose($criar);
}
header('Location: /SW/select.php#' . $_get['codigo'] - 1);
?>