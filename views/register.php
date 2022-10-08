<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visita México</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./assets/css/main.css">
</head>
<body>
<div class="container">
    <h3>Datos de contacto</h3>
    <hr>
    <form action="../controllers/users_controller.php?opc=1" method="post">
        <div class="form-group">
            <label for="txtNombre">Nombre</label>
            <input type="text" name="txtNombre" id="txtNombre" required class="form-control" placeholder="Ingrese nombre" aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="txtApePat">Apellido Paterno</label>
            <input type="text" name="txtApePat" id="txtApePat" required class="form-control" placeholder="Ingrese apellido paterno" aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="txtApeMat">Apellido Materno</label>
            <input type="text" name="txtApeMat" id="txtApeMat" required class="form-control" placeholder="Ingrese apellido materno" aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="txtEmail">Correo Electronico</label>
            <input type="email" name="txtEmail" id="txtEmail" required class="form-control" placeholder="Ingrese el correo electrónico" aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="txtEmail">Nickname</label>
            <input type="text" name="txtNickname" id="txtNickname" required class="form-control" placeholder="Ingrese el nickname" aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="txtEmail">Contraseña</label>
            <input type="password" name="txtPassword" id="txtPassword" required class="form-control" placeholder="Ingrese la contraseña" aria-describedby="helpId">
        </div>
        <button type="submit" class="btn btn-primary">Crear Usuario</button>
    </form>
</div>
</body>
</html>