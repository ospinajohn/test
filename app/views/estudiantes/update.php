<head>
    <meta charset="utf-8">
    <title>Editar Estudiantes</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<body>
<h1 class="text-center mb-5">Editar Estudiante</h1>
<form action="?action=update" method="post">
    <input type="hidden" name="id" value="<?= $estudiante["id"] ?>">
    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" class="form-control" value="<?= $estudiante["nombre"] ?>">
    </div>
    <div class="form-group">
        <label for="apellido">Apellido</label>
        <input type="text" name="apellido" id="apellido" class="form-control" value="<?= $estudiante["apellido"] ?>">
    </div>
    <div class="form-group">
        <label for="edad">Edad</label>
        <input type="number" name="edad" id="edad" class="form-control" value="<?= $estudiante["edad"] ?>">
    </div>
    <button type="submit" class="btn btn-primary">Actualizar</button>

<script src="js/bootstrap.min.js"></script>
<script src="js/validacion.js"></script>
</body>
