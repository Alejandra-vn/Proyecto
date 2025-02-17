<?php
session_start();

// Verificar si el usuario está logueado y si es administrador
if (!isset($_SESSION["usuario"]) || $_SESSION["usuario"] !== "administrador") {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
	<link rel="stylesheet" href="Style_dashboard.css" />
    <title>Estadísticas - Administrador</title>
  </head>
  <body>
    <div class="container">
      <div class="sidebar">
        <h2 class="brand">Administrador</h2>
        <ul>
          <li><a href="dashboard.php"><i class="fas fa-home"></i> Inicio</a></li>
          <li><a href="#"><i class="fas fa-users"></i> Usuarios</a></li>
          <li><a href="#"><i class="fas fa-cogs"></i> Configuraciones</a></li>
        </ul>
        <button class="btn logout-btn" onclick="window.location.href='logout.php'"><i class="fas fa-sign-out-alt"></i> Cerrar sesión</button>
      </div>

      <div class="main-content">
        <nav class="navbar">
          <h1>Bienvenido, Administrador</h1>
        </nav>

        <div class="dashboard">
          <h2>Estadísticas Generales</h2>

          <div class="stats">
            <div class="stat-box">
              <h3>Total Ventas</h3>
              <p>$ 10,000</p>
            </div>
            <div class="stat-box">
              <h3>Usuarios Nuevos</h3>
              <p>50</p>
            </div>
            <div class="stat-box">
              <h3>Productos Vendidos</h3>
              <p>120</p>
            </div>
            <div class="stat-box">
              <h3>Órdenes Pendientes</h3>
              <p>10</p>
            </div>
          </div>

          <div class="chart-container">
            <canvas id="myChart" width="400" height="200"></canvas>
          </div>
        </div>
      </div>
    </div>

    <script>
      var ctx = document.getElementById('myChart').getContext('2d');
      var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
          labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio'],
          datasets: [{
            label: 'Ventas del Año',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: 'rgba(54, 162, 235, 0.2)',
            borderColor: 'rgba(54, 162, 235, 1)',
            borderWidth: 1
          }]
        },
        options: {
          scales: {
            y: {
              beginAtZero: true
            }
          }
        }
      });
    </script>
  </body>
</html>
