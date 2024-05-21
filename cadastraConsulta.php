<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require 'conexao_Banco.php';

    $data_hora = $_POST['data_hora'];
    $nome = htmlspecialchars($_POST['paciente_nome']);
    $telefone = htmlspecialchars($_POST['telefone']);
    $observacao = htmlspecialchars($_POST['observacao']);
    $nome = $banco->real_escape_string($nome);
    $telefone = $banco->real_escape_string($telefone);
    $observacao = $banco->real_escape_string($observacao);

    $query = "INSERT INTO pacientes (nome, telefone) VALUES ('$nome', '$telefone')";

    if (!$banco->query($query)) {
        echo "<p>Erro ao inserir paciente: " . $banco->error . "</p>";
    } else {
        $paciente_id = $banco->insert_id;

        if (empty($data_hora)) {
            echo "<p>Por favor, preencha a data e hora da consulta.</p>";
        } else {
            $sql = "INSERT INTO consultas (data_hora, paciente_id, observacao) VALUES ('$data_hora', $paciente_id, '$observacao')";
        
            if ($banco->query($sql)) {
                echo "<p>Consulta marcada com sucesso!</p>";
            } else {
                echo "<p>Erro ao marcar consulta: " . $banco->error . "</p>";
            }
        }
    }
    $banco->close();
}
?>
