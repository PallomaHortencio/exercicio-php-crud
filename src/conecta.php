<?php
$servidor = "localhost";
$usuario = "webmaio_palloma";
$senha = "Palloma2001";
$banco = "webmaio_palloma";

try {
    $conexao = new PDO(
        "mysql:host=$servidor; dbname=$banco; charset=utf8",
        $usuario,
        $senha
    );

    $conexao->setAttribute(PDO::ATTR_ERRMODE, 
    PDO::ERRMODE_EXCEPTION);

} catch (Exception $erro) {
    die("erro: " .$erro->getMessage());
}

/* var_dump($conexao); ver se a conexao funcionou */

?>