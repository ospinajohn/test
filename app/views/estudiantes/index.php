<head>
    <meta charset="utf-8">
    <title>Lista de Estudiantes</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<h1 class="text-center mb-5">Lista de Estudiantes</h1>
<div class="container">
    <a href="?action=create" class="btn btn-primary mb-3">Crear Estudiante</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Edad</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($estudiantes as $estudiante): ?>
                <tr>
                    <td><?= $estudiante["nombre"] ?></td>
                    <td><?= $estudiante["apellido"] ?></td>
                    <td><?= $estudiante["edad"] ?></td>
                    <td>
                    <a href="?action=update&id=<?= $estudiante["id"] ?>" class="btn btn-warning">Editar</a>
                    <a href="?action=delete&id=<?= $estudiante["id"] ?>" class="btn btn-danger">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>
<script src="js/bootstrap.min.js"></script>
<script src="js/validacion.js"></script>
</body>
