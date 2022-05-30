<?php
require_once "conecta.php";


function verAlunos(PDO $conexao):array {
    $sql = "SELECT id, nome FROM alunos ORDER BY id";
    try {
        $consulta = $conexao->prepare($sql);
        $consulta->execute();
        $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $erro) {
        die("Erro: ".$erro->getMessage());
    }
    return $resultado;
}



function inserirAlunos(PDO $conexao, string $nome):void {
    $sql = "INSERT INTO alunos(nome) VALUES (:nome)";
    try {
        $consulta = $conexao->prepare($sql);
        $consulta->bindParam(':nome', $nome, PDO::PARAM_INT)
    }

}


?>