<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud</title>
</head>
<body>
    
<div id="body">
    <div id="header"></div>
    <div id="sides"></div>
    <div id="left" class="divisions"></div>
    <div id="middle" class="divisions"></div>
    <form method="post" action="insert.php">
    <table>
            <tr>
                <td><label for="nome">Nome:</label></td>
                <td><input id="nome" name="nome" autofocus></td>
            </tr>

            <tr>
                <td><label for="email">Email:</label></td>
                <td><input id="email" name="email" required> </textarea></td>
            </tr>

            <tr>
                <td> <label for="data">Data:</label></td>
                <td><input type="date" id="data" name="data" required> </textarea></td>
            </tr>

            <tr>
                <td> <label for="mensagem">Mensagem:</label></td>
                <td><textarea id="mensagem" name="mensagem" required> </textarea></td>
                <td class="options"><input type="submit" class="formulario" value="Enviar" /> </td>

            </tr>
        </table>
    </form>
    <table>
            <tr>
                <td class="options"><button onclick= "location.href = '/SW/crud.php'"> Limpar Banco! </button></td>
                <td class="options"><button onclick= "location.href = '/SW/reset.php' "> Resetar Banco! </button></td>
                <td class="options"><button onclick= "location.href = '/SW/select.php' "> Selecionar </button></td>
                <td class="options"><button onclick= "location.href = '/SW/insert.php' "> Insert </button></td>
            </tr>
     </table>
     
            </div>
        </div>
    </div>

</body>
</html>