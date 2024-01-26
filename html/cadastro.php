<?php

if(isset($_post['submit'])){
include_once('config.php');
$name = $_post['nome'];
$lastname = $_post['sobrenome'];
$email = $_post['email'];
$username = $_post['nomeusuario'];
$password = $_post['senha'];

$result = mysqli_query($conexao, "INSERT INTO Usuario(Nome_Pessoa, Last_Pessoa,  Email_Pessoa, Username_Pessoa, Senha_Pessoa)
VALUES ('$name','$lastname','$email','$username','$username')");
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="../css/cadastro.css">
</head>
<body>
    <section class="tela" id="tela1">
        <form action="../sucesso.php" method="post">
            <div id="login-container">
                        <label for="login">Entra ai
                        </label>
                                    <div class="text-box">
                                        <input type="text" id="name" name="name" placeholder="Name">
                                    </div>
                                    <div class="text-box">
                                        <input type="text" id="lastname" name="lastname" placeholder="Last Name">
                                    </div>
                                    <div class="text-box">
                                        <input type="email" id="email" name="email" placeholder="Email">
                                    </div>
                                    <div class="text-box">
                                        <input type="text" id="username" name="username" placeholder="Username">
                                    </div>
                                    <div class="text-box">
                                        <input type="password" id="password" name="password" placeholder="Password">
                                    </div>
                    
            
                    <button type="submit" name="submit" id="button">
                    <h1>Login</h1>
                    </button>
                    

    <script src="./script/cadastro.js"></script>
</body>
</html>