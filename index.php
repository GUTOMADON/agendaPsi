<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgendaPsi - Sistema de Agendamento</title>
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
            <div class="col-md-12 text-center">
                <h1>AgendaPsi</h1>
                <p class="lead">Agendamento de Consultas de Psicologia</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        Marcar Consulta
                    </div>
                    <div class="card-body">
                        <form action="cadastraConsulta.php" method="post">
                            <div class="mb-3">
                                <label for="data_hora" class="form-label">Data e Hora da Consulta: </label>
                                <input type="datetime-local" class="form-control" id="data_hora" name="data_hora" required>
                            </div>
                            <div class="mb-3">
                                <label for="paciente_nome" class="form-label">Nome do Paciente: </label>
                                <input type="text" class="form-control" id="paciente_nome" name="paciente_nome" required>
                            </div>
                            <div class="mb-3">
                                <label for="telefone" class="form-label">Telefone do Paciente: </label>
                                <input type="text" class="form-control" id="telefone" name="telefone">
                            </div>
                            <div class="mb-3">
                                <label for="observacao" class="form-label">Observação: </label>
                                <textarea class="form-control" id="observacao" name="observacao" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Marcar Consulta</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
