<?php
include 'db.php';

$id = $_GET['id'];
$sql = "SELECT * FROM carros WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Carro</title>
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
                <h2 class="text-center mb-2">Editar Carro</h2>
            </div>
            <div class="card-body">
                <form action="update.php?id=<?= $id ?>" method="post">
                    <div class="mb-3">
                        <label for="modelo" class="form-label">Modelo:</label>
                        <input type="text" class="form-control" id="modelo" name="modelo" value="<?= htmlspecialchars($row['modelo']) ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="marca" class="form-label">Marca:</label>
                        <input type="text" class="form-control" id="marca" name="marca" value="<?= htmlspecialchars($row['marca']) ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="ano" class="form-label">Ano:</label>
                        <input type="number" class="form-control" id="ano" name="ano" value="<?= htmlspecialchars($row['ano']) ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="cor" class="form-label">Cor:</label>
                        <input type="text" class="form-control" id="cor" name="cor" value="<?= htmlspecialchars($row['cor']) ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="placa" class="form-label">Placa:</label>
                        <input type="text" class="form-control" id="placa" name="placa" value="<?= htmlspecialchars($row['placa']) ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="nro_chassi" class="form-label">Número do Chassi:</label>
                        <input type="text" class="form-control" id="nro_chassi" name="nro_chassi" value="<?= htmlspecialchars($row['nro_chassi']) ?>" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Atualizar</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $modelo = $_POST['modelo'];
    $marca = $_POST['marca'];
    $ano = $_POST['ano'];
    $cor = $_POST['cor'];
    $placa = $_POST['placa'];
    $nro_chassi = $_POST['nro_chassi'];

    $sql = "UPDATE carros SET modelo='$modelo', marca='$marca', ano='$ano', cor='$cor', placa='$placa', nro_chassi='$nro_chassi' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header('Location: index.php');
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
