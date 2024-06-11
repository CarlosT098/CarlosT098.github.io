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

include "conexao.php";

//$pontuacao = "<script>document.write(p)</script>";
$teste = $_POST['data'];
$dados = json_decode($teste, true);
var_dump($dados);

/*
$nome = $_SESSION["user"];
$max_pont = $_SESSION["max_pont"];

if ($_SESSION["user"] == null) {
    echo "sem login";
}elseif ($pontuacao > $max_pont ) {    
    $sql = "UPDATE max_pont SET $pontuacao WHERE nome_user = '$nome'";
    $dados = mysqli_query($con, $sql);
    echo "atualizado";

}
*/


?>

<a href="index.php" class="btn mt-3"> voltar </a>
    
</body>
</html>