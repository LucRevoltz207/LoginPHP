<?php
include('config.php');

if(isset($_post['Username'])|| isset($_post['Password'])) {
    if(strlen($_post['Username'])==0){
        echo "Preencha seu usuario";
    } else if(strlen($_post['Password'])==0){
        echo "Preencha sua senha";
    } else {

                $user = $mysqli->real_escape_string($_post);
                $senha = $mysqli->real_escape_string($_post);

                $sql_code = "SELECT * FROM Usuario WHERE Username_Pessoa = '$user' AND Senha_Pessoa = '$senha'";
                $sql_query = $mysqli->query($sql_code) or die("Falnha na execução do código SQL: ".$mysqli->error);
                $quant = $sql_query->num_rows;
                                if($quant == 1){
                                                $usuario = $sql_query->fetch_assoc();
                                    if(!isset($SESSION)){
                                        session_start();
                                    }
                                    
                                            $_SESSION['id'] = $usuario['id'];
                                            $_SESSION['Nome_Pessoa'] = $usuario['Nome_Pessoa'];
                                            header("Location: html/sucesso.html");
                                        } else  {
                                                echo "Falha ao logar! Email ou senha incorretos!";
                                                }
        }



}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./css/login.css">
</head>
<body>
    <section class="tela" id="tela1">
        <form action="" method="post">
            <div id="login-container">
                        <label for="login">Entra ai
                        </label>
                                    <div class="text-box">
                                        <input type="text" id="login" name="Username" placeholder="Username">
                                    </div>
                                    <div class="text-box">
                                        <input type="password" id="pass" name="Password" placeholder="Password">
                                    </div>
                    
            
                    <button type="submit" name="submit" id="button">
                    <h1>Login</h1>
                    </button>
                    <a href="./html/cadastro.html"><p>Não tenho login</p></a>

            </div>
        </form>

    </section>





    <script src="./script/login.js"></script>
</body>
</html>