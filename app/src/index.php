<?php
include 'db.php';

$sql = "SELECT * FROM carros";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Carros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <style>
        .container {
            max-width: 1500px;
        }

        .table td,
        .table th {
            vertical-align: middle;
        }
    </style>
</head>

<body class="bg-secondary">
    <div class="container mt-5">
        <div class="card border-dark">
            <div class="card-header text-center text-bg-dark">
                <h2>Lista de Carros</h2>
            </div>
            <div class="card-body">
                <div class="text-end mb-3">
                    <a href="create.php" class="btn btn-primary" title="Adicionar Novo Carro">
                        <ion-icon name="add-sharp" class="fs-5 pt-1"></ion-icon>
                    </a>
                </div>
                <table class="table table-striped table-hover text-center table-bordered">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Modelo</th>
                            <th>Marca</th>
                            <th>Ano</th>
                            <th>Cor</th>
                            <th>Placa</th>
                            <th>Número do Chassi</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = $result->fetch_assoc()) : ?>
                            <tr class="table-light">
                                <td><?= $row['id'] ?></td>
                                <td><?= $row['modelo'] ?></td>
                                <td><?= $row['marca'] ?></td>
                                <td><?= $row['ano'] ?></td>
                                <td><?= $row['cor'] ?></td>
                                <td><?= $row['placa'] ?></td>
                                <td><?= $row['nro_chassi'] ?></td>
                                <td>
                                    <a href="update.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm" title="Alterar">
                                        <ion-icon name="create-sharp" class="fs-5 pt-1"></ion-icon>
                                    </a>
                                    <a href="delete.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm" title="Deletar">
                                        <ion-icon name="trash-bin" class="fs-5 pt-1"></ion-icon>
                                    </a>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>

<?php $conn->close(); ?>