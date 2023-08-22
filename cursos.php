<?php
#importa a classe
require_once "Database.php";

#instancia um obj de Database
$db = new Database();
#recebe a conexao
$conexao = $db->connect();

#string de consulta
$sql = "select * from curso";
#executa a consulta
$stmt = $conexao->query($sql);
#transforma o resultado da consulta em um array de objs
$cursos = $stmt->fetchAll(PDO::FETCH_OBJ);

#exibe o conteudo do array
foreach ($cursos as $curso){
    $dom->createElement('nome', $curso->nome);
}
