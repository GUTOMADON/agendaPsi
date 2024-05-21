<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Consultas - AgendaPsi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/estilo.css" rel="stylesheet">
    <style>
        body {
            background-color: #E0E9EF;
            color: #333;
            font-family: 'Arial', sans-serif;
        }
        h1, h2 {
            color: #3E6D8E;
            font-family: 'Arial', sans-serif;
            font-weight: bold;
        }
        .consulta-card {
            margin-bottom: 20px;
        }
        .consulta-card .card-header {
            background-color: #3E6D8E;
            color: #FFF;
            font-weight: bold;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #3E6D8E;">
    <div class="container">
        <a class="navbar-brand" href="#" style="color: #FFF; font-family: 'Arial', sans-serif; font-size: 24px;">AgendaPsi</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php" style="color: #FFF;">Criar Consulta</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="listaConsultas.php" style="color: #FFF;">Mostrar Consultas</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center">Lista de Consultas</h2>
            <?php
            require_once 'conexao_Banco.php';

            $sql = "SELECT c.id, c.data_hora, p.nome as paciente, c.observacao FROM consultas c
                    INNER JOIN pacientes p ON c.paciente_id = p.id
                    ORDER BY c.data_hora DESC";

            $resultado = $banco->query($sql);

            if ($resultado->num_rows > 0) {
                while ($row = $resultado->fetch_assoc()) {
            ?>
                    <div class="card consulta-card">
                        <div class="card-header">
                            Consulta ID: <?php echo $row['id']; ?>
                        </div>
                        <div class="card-body">
                            <p><strong>Data e Hora:</strong> <?php echo date('d/m/Y H:i', strtotime($row['data_hora'])); ?></p>
                            <p><strong>Paciente:</strong> <?php echo htmlspecialchars($row['paciente']); ?></p>
                            <p><strong>Observação:</strong> <?php echo htmlspecialchars($row['observacao']); ?></p>
                        </div>
                    </div>
            <?php
                }
            } else {
                echo '<p class="text-center">Não há consultas cadastradas.</p>';
            }
            $banco->close();
            ?>
        </div>
    </div>
</div>
</body>
</html>
