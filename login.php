<?php
session_start(); // Iniciar la sesión

// Definición de credenciales
$usuarios = [
    "administrador" => "asd",
    "cliente" => "123"
];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombreUsuario = $_POST["username"] ?? "";
    $contrasena = $_POST["password"] ?? "";
    
    // Verificar credenciales
    if (isset($usuarios[$nombreUsuario]) && $usuarios[$nombreUsuario] === $contrasena) {
        // Almacenar el usuario en la sesión
        $_SESSION["usuario"] = $nombreUsuario;

        // Redirigir según el tipo de usuario
        if ($nombreUsuario === "administrador") {
            header("Location: dashboard.php");
            exit();
        } elseif ($nombreUsuario === "cliente") {
            header("Location: index.php");
            exit();
        }
    } else {
        $mensaje = "Usuario o contraseña incorrectos";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css" />
    <title>Login</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form method="POST" class="sign-in-form">
            <h2 class="title">Inicio de sesión</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="username" placeholder="Username" required />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" placeholder="Password" required />
            </div>
            <button type="submit" class="btn solid">
              <i class="fas fa-sign-in-alt"></i> Iniciar Sesión
            </button>
            <?php if (isset($mensaje)): ?>
              <div class="message">
                <?= htmlspecialchars($mensaje) ?>
              </div>
            <?php endif; ?>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
          </div>
          <img src="img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <button class="btn transparent" id="sign-in-btn">
              <i class="fas fa-sign-in-alt"></i> Sign in
            </button>
          </div>
          <img src="img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="js/app.js"></script>
  </body>
</html>
