<head>
    <meta charset="utf-8">
    <title>Registrar estudiante</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<div class="container">
<h1 class="text-center mb-5">Registrar Estudiante</h1>
<form method="POST" action="">
    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" class="form-control">
    </div>
    <div class="form-group">
        <label for="apellido">Apellido</label>
        <input type="text" name="apellido" id="apellido" class="form-control">
    </div>
    <div class="form-group">
        <label for="edad">Edad</label>
        <input type="number" name="edad" id="edad" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
</div>
</body>
<script src="js/bootstrap.min.js"></script>
<script src="js/validacion.js"></script>
</body>