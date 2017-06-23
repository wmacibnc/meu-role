<?php
// error
ini_set("display_errors",1);
ini_set("display_startup_erros",1);
error_reporting(E_ALL);
// config
include("config.php");

$nome = $_POST['nome'];
$guia = $_POST['guia'];
$descricao = $_POST['descricao'];

// Insere os dados no banco 
    $query = <<<QUERY
    INSERT INTO COMENTARIO(
      NOME,
      DESCRICAO,
      GUIA,
      ATIVO)
      VALUES (
        '$nome',
        '$descricao',
        '$guia',
        1)
QUERY;
mysqli_query($con, $query) or die ('ERRO: '.mysql_error());
header("Location: blog.php?mensagem='Dados cadastrados com sucesso!' "); /* Redirect browser */

?>
