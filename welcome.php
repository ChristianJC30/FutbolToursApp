<?php
session_start();
if (!isset($_SESSION["usuario"])) {
  header("Location: login.html");
  exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Bienvenido</title>
  <link rel="stylesheet" href="../style.css">
</head>
<body>
  <div class="form-container">
    <h2>Bienvenido, <?= $_SESSION["usuario"] ?> 👋</h2>
    <p>Has iniciado sesión correctamente.</p>
    <a href="../backend/logout.php">Cerrar sesión</a>
  </div>
</body>
</html>
