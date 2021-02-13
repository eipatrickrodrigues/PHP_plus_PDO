<?php

require __DIR__. './App/Pessoa.php';
require __DIR__ .'./vendor/autoload.php';

use App\Pessoa;

if (isset($_POST['nome'])){
    $obPessoa = new Pessoa();
    $obPessoa->nome = $_POST['nome'];
    $obPessoa->telefone = $_POST['telefone'];
    $obPessoa->email = $_POST['email'];
    $obPessoa->senha = $_POST['senha'];
    $obPessoa->endereco = $_POST['endereco'];
    $obPessoa->cidade = $_POST['cidade'];
    $obPessoa->nascimento = $_POST['nascimento'];
    $obPessoa->estado = $_POST['estado'];
    $obPessoa->cep = $_POST['cep'];
    $obPessoa->cadastrarPessoa();
}
/*
class Password{

    // Criar o hash da senha para salvar no banco de dados.
    public function password_hash($senha){
        return password_hash($senha, PASSWORD_DEFAULT);
    }
}
*/

?>


<!DOCTYPE html>
<html lang=pt-br>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">

    <title>Document</title>
</head>
<body>
    
<section>
    <header>
        <h1>Cadastro de Pessoal</h1>
    </header>
</section>

<?php
require_once 'formulario.php';
?>
</body>
</html>