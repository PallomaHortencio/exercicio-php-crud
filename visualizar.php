<?php
require_once "../exercicio-php-crud/src/funcoes-alunos.php";
require_once "../exercicio-php-crud/atualizar.php";
$listaDeAlunos = verAlunos($conexao);
?>





<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lista de alunos - Exercício CRUD com PHP e MySQL</title>
<link href="css/style.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h1>Lista de alunos</h1>
    <hr>
    <p><a href="inserir.php">Inserir novo aluno</a></p>

    <?php
    foreach ($listaDeAlunos as $alunos) {

    
    ?>



<table>
    <tr>
    <td> <h4> Nome </h4> <?=$alunos["nome"] ?>  </td>
    <td> <h4> Primeita Nota </h4> <?=$alunos["primeira"] ?> </td>
   <td> <h4> Segunda Nota </h4> <?=$alunos["segunda"] ?> </td>
    <td> <h4> Media </h4> <?=$alunos["media"] ?> </td>
    <td> <h4> Situação </h4> <?=$alunos["situacao"] ?> </td>
<button type="submit" name="atualizar">Atualizar</button>
</tr>
</table>    

   <!-- Aqui você deverá criar o HTML que quiser e o PHP necessários
para exibir a relação de alunos existentes no banco de dados.

Obs.: não se esqueça de criar também os links dinâmicos para
as páginas de atualização e exclusão. -->



<?php
    };
    ?>


    <p><a href="index.php">Voltar ao início</a></p>
</div>

</body>
</html>