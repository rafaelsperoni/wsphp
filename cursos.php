<?php
require_once "Database.php";

$db = new Database();
$conexao = $db->connect();

var_dump($conexao);

$sql = "select * from curso";

$stmt = $conexao->query($sql);

$cursos = $stmt->fetchAll(PDO::FETCH_OBJ);

var_dump($cursos);