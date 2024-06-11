<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    session_start();
    $nome = $_POST['nome'] ?? ''; 
    $senha = $_POST['senha'] ?? '';    

    include "conexao.php";

    $sql = "SELECT * FROM usuario WHERE nome_user = '$nome' AND senha = '$senha'";

    $dados = mysqli_query($con, $sql);

    if (mysqli_num_rows($dados) > 0) {
        $info = mysqli_fetch_assoc($dados);
        $_SESSION["user"] =  $info['nome_user'];
        $_SESSION["max_pont"] = $info['max_pont'] ?? 0;
        echo "Nome do usuário: " . $info['nome_user'] . "<br>";
        echo "Máxima pontuação: " . $info['max_pont'] . "<br>";
        echo "login realizado com sucesso";
       
   }else{
        echo "email ou senha invalido";
    }

 

?>
    
<a href="index.php" class="btn mt-3"> voltar </a>

</body>
</html>