<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste de Banco</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>
<body>
    <style>
        table{
            margin: 0 auto;
        }
        img{
            width: 200px;
            display: block;
            margin-left: auto;
            margin-right: auto
        }
        h1{
        text-align: center;
        }
    </style>
    <div class="container">
        <div class="jumbotron">
        <h1>Teste de Conexão com DB com <b>PDO</b></h1>
        <form action="processo.php" method="post"> 
        <table>
            <tr>
            <td colspan="2"><svg width="200px" height="200px" viewBox="0 0 16 16" class="bi bi-hdd-stack-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style=" display: block;
    margin-left: auto;
    margin-right: auto;">
  <path fill-rule="evenodd" d="M2 9a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-1a2 2 0 0 0-2-2H2zm.5 3a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zm2 0a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zM2 2a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2zm.5 3a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zm2 0a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
</svg></td>
            <td></td>
            </tr>
            <tr>
            <td>Endereço do banco: </td>
            <td><input type="text" name="host" size="40" autocomplete="off" autofocus></td>
            </tr>
            <tr>
            <td>Nome do Banco: </td>
            <td><input type="text" name="db" size="40" autocomplete="off"></td>
            </tr>
            <tr>
            <td>Senha do Banco: </td>
            <td><input type="text" name="senha" size="40" autocomplete="off"></td>
            </tr>
            <tr>
            <td><input type="submit" class="btn btn-danger" value="Conectar"></td>
            <td></td>
            </tr>
        </table>
    </form>
        </div>


    </div>

</body>
</html>

