<?php
if(!isset($_SESSION)){
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login feito</title>
</head>
<body>
    <h1>Sucesso! Bem vindo, <?php echo $_SESSION[Nome_Pessoa];?></h1>
</body>
</html>