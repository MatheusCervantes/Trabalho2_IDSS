<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $modelo = $_POST['modelo'];
    $marca = $_POST['marca'];
    $ano = $_POST['ano'];
    $cor = $_POST['cor'];
    $placa = $_POST['placa'];
    $nro_chassi = $_POST['nro_chassi'];

    $sql = "INSERT INTO carros (modelo, marca, ano, cor, placa, nro_chassi) VALUES ('$modelo', '$marca', '$ano', '$cor', '$placa', '$nro_chassi')";

    if ($conn->query($sql) === TRUE) {
        header('Location: index.php');
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Carro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        .container {
            max-width: 500px;
        }

        .btn-primary {
            width: 100%;
        }
    </style>
</head>

<body class="bg-secondary"> 
    <div class="container mt-5">
        <div class="card border-dark">
            <div class="card-header text-center text-bg-dark">
                <h2 class="text-center mb-2">Adicionar Carro</h2>
            </div>
            <div class="card-body">
                <form action="create.php" method="post">
                    <div class="mb-3">
                        <label for="modelo" class="form-label">Modelo:</label>
                        <input type="text" class="form-control" id="modelo" name="modelo" required>
                    </div>
                    <div class="mb-3">
                        <label for="marca" class="form-label">Marca:</label>
                        <input type="text" class="form-control" id="marca" name="marca" required>
                    </div>
                    <div class="mb-3">
                        <label for="ano" class="form-label">Ano:</label>
                        <input type="number" class="form-control" id="ano" name="ano" required>
                    </div>
                    <div class="mb-3">
                        <label for="cor" class="form-label">Cor:</label>
                        <input type="text" class="form-control" id="cor" name="cor" required>
                    </div>
                    <div class="mb-3">
                        <label for="placa" class="form-label">Placa:</label>
                        <input type="text" class="form-control" id="placa" name="placa" required>
                    </div>
                    <div class="mb-3">
                        <label for="nro_chassi" class="form-label">Número do Chassi:</label>
                        <input type="text" class="form-control" id="nro_chassi" name="nro_chassi" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Adicionar</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>