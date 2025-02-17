<?php
session_start(); // Iniciar la sesión

// Verificar si el usuario ha iniciado sesión y es "cliente"
if (!isset($_SESSION["usuario"]) || $_SESSION["usuario"] !== "cliente") {
    header("Location: login.php"); // Redirigir al formulario de inicio de sesión si no está autenticado
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagina principal</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/skeleton.css">
    <link rel="stylesheet" href="css/custom.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style type="text/css">
    /* Estilo personalizado para el botón de cerrar sesión */
    .button {
        padding: 22px 70px; 
        font-size: 12px;
        width: auto; 
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #007BFF; 
        color: white;
        border: none; 
        cursor: pointer; 
        transition: background-color 0.3s ease; 
    }

    .button i {
        margin-right: 8px; /* Espacio entre el icono y el texto */
    }

    .button:hover {
        background-color: #0056b3; /* Azul más oscuro al pasar el mouse */

    }
    

</style>
<!-- Div para mostrar el mensaje de éxito -->
<div id="mensaje-confirmacion" class="mensaje-confirmacion">
    <p>¡Producto agregado al carrito exitosamente!</p>
</div>

</head>
<body>
<header id="header" class="header">
    <div class="container">
        <div class="row">
            <div class="four columns">
                <img src="img/logo.jpeg" id="logo">
            </div>
            <div class="two columns u-pull-right">
                <ul>
                    <li class="submenu">
                            <img src="img/cart.png" id="img-carrito">
                            <div id="carrito">
                                    
                                    <table id="lista-carrito" class="u-full-width">
                                        <thead>
                                            <tr>
                                                <th>Imagen</th>
                                                <th>Nombre</th>
                                                <th>Precio</th>
                                                <th>Cantidad</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody></tbody>
                                    </table>

                                    

                                    <a href="#" id="vaciar-carrito" class="button u-full-width">Vaciar Carrito</a>




                        
                            </div>
                    </li>
                </ul>
            </div>

             <div class="two columns u-pull-right">
                <!-- Enlace para cerrar sesión -->
                <a href="logout.php" class="button"> <i class="fa fa-sign-out-alt"></i> Cerrar Sesión</a>
            </div>
        </div> 
    </div>
    </header>


    <div id="hero">
        
    </div>

   <div class="barra">
    <div class="container">
        <div class="row">
            <div class="four columns icono icono1">
                <p>Accesorios para computadoras de alta calidad </p>
            </div>
            <div class="four columns icono icono2">
                <p>Encuentra todo lo que necesitas para tu PC </p>
            </div>
            <div class="four columns icono icono3">
                <p>Envíos rápidos y seguros <br>
                Recibe tus productos en tiempo</p>
            </div>
        </div>
    </div>
</div>


    </div>

    <div id="lista-cursos" class="container">
        <h1 id="encabezado" class="encabezado">Línea de productos</h1>
    <div class="row">
    <div class="four columns">
        <div class="card">
            <img src="img/Teclado_mecanico.jpeg" class="imagen-curso u-full-width">
            <div class="info-card">
                <h4>Teclado gamer mecanico</h4>
                <p>Marca: hyperx</p>
                <p>Color: Negro</p>
                <p>Existencia: 120</p>
                <img src="img/estrellas.png">
                <p class="precio"><span class="u-pull-right">$550.00</span></p><br>
                
                <!-- Campo de cantidad -->
                <input type="number" class="cantidad" id="cantidad-1" value="1" min="1">
                
                <!-- Botón para agregar al carrito -->
                <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="1">Agregar Al Carrito</a>
            </div>
        </div> <!--.card-->
    </div>
            <div class="four columns">
                    <div class="card">
                        <img src="img/Teclado_membrana.jpg" class="imagen-curso u-full-width">
                        <div class="info-card">
                            <h4>Teclado de membrana</h4>
                            <p>Marca: Gembird</p>
                            <p>Color: Negro</p>
                            <p>Existencia: 160</p>
                            <img src="img/estrellas.png">
                            <p class="precio">  <span class="u-pull-right ">$150.00</span></p><br>
                            <!-- Campo de cantidad -->
                            <input type="number" class="cantidad" id="cantidad-1" value="1" min="1">
                            <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="2">Agregar Al Carrito</a>
                        </div>
                    </div>
            </div>
            <div class="four columns">
                    <div class="card">
                        <img src="img/Bocina_1.jpg" class="imagen-curso u-full-width">
                        <div class="info-card">
                            <h4>Bocinas</h4>
                            <p>Marca: KAMYSEN</p>
                            <p>Color: Negro</p>
                            <p>Existencia: 150</p>
                            <img src="img/estrellas.png">
                            <p class="precio"><span class="u-pull-right ">$500.00</span></p><br>
                            <!-- Campo de cantidad -->
                            <input type="number" class="cantidad" id="cantidad-1" value="1" min="1">
                            <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="3">Agregar Al Carrito</a>
                        </div>
                    </div> <!--.card-->
            </div>

        </div> <!--.row-->
        <div class="row">
            <div class="four columns">
                <div class="card">
                    <img src="img/Auriculares_gamer1.jpeg" class="imagen-curso u-full-width">
                    <div class="info-card">
                        <h4>Audifonos gamers alambricos</h4>
                        <p>Marca: hyperx</p>
                        <p>Color: Blanco</p>
                        <img src="img/estrellas.png">
                        <p class="precio">  <span class="u-pull-right ">$850.00</span></p><br>
                        <!-- Campo de cantidad -->
                        <input type="number" class="cantidad" id="cantidad-1" value="1" min="1">
                        <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="4">Agregar Al Carrito</a>
                    </div>
                </div> <!--.card-->
            </div>
            <div class="four columns">
                    <div class="card">
                        <img src="img/Auriculares_gamers.jpeg" class="imagen-curso u-full-width">
                        <div class="info-card">
                            <h4>Audifonos gamers inalambricos</h4>
                            <p>Marca: hyperx</p>
                            <p>Color: Negro</p>
                            <p>Existencia: 125</p>
                            <img src="img/estrellas.png">
                            <p class="precio">  <span class="u-pull-right ">$800.00</span></p><br>
                            <!-- Campo de cantidad -->
                            <input type="number" class="cantidad" id="cantidad-1" value="1" min="1">
                            <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="5">Agregar Al Carrito</a>
                        </div>
                    </div> <!--.card-->
            </div>
            <div class="four columns">
                    <div class="card">
                        <img src="img/Auriculares_sony.png" class="imagen-curso u-full-width">
                        <div class="info-card">
                            <h4>Audifonos alambricos</h4>
                            <p>Marca: Sony</p>
                            <p>Color: Negro</p>
                            <p>Existencia: 200</p>
                            <img src="img/estrellas.png">
                            <p class="precio">  <span class="u-pull-right ">$900.00</span></p><br>
                            <!-- Campo de cantidad -->
                            <input type="number" class="cantidad" id="cantidad-1" value="1" min="1">
                            <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="6">Agregar Al Carrito</a>
                        </div>
                    </div> <!--.card-->
            </div>
        </div> <!--.row-->
        <div class="row">
            <div class="four columns">
                <div class="card">
                    <img src="img/Mouse_1.jpg" class="imagen-curso u-full-width">
                    <div class="info-card">
                        <h4>Mouse gamer</h4>
                        <p>Marca: Logitech</p>
                        <p>Color: Negro</p>
                        <p>Existencia: 220</p>
                        <img src="img/estrellas.png">
                        <p class="precio">  <span class="u-pull-right ">$400.25</span></p><br>
                        <!-- Campo de cantidad -->
                        <input type="number" class="cantidad" id="cantidad-1" value="1" min="1">
                        <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="7">Agregar Al Carrito</a>
                    </div>
                </div> <!--.card-->
            </div>
            <div class="four columns">
                    <div class="card">
                        <img src="img/Mouse_2.jpg" class="imagen-curso u-full-width">
                        <div class="info-card">
                            <h4>Mouse gamer Pro</h4>
                            <p>Marca: Logitech</p>
                            <p>Color: Rojo</p>
                            <p>Existencia: 190</p>
                            <img src="img/estrellas.png">
                            <p class="precio">  <span class="u-pull-right ">$625.50</span></p><br>
                            <!-- Campo de cantidad -->
                            <input type="number" class="cantidad" id="cantidad-1" value="1" min="1">
                            <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="8">Agregar Al Carrito</a>
                        </div>
                    </div> <!--.card-->
            </div>
            <div class="four columns">
                    <div class="card">
                        <img src="img/Mouse_3.jpg" class="imagen-curso u-full-width">
                        <div class="info-card">
                            <h4>Mouse inalambrico</h4>
                            <p>Marca: Logitech</p>
                            <p>Color: Rojo y negro</p>
                            <p>Existencia: 210</p>
                            <img src="img/estrellas.png">
                            <p class="precio">  <span class="u-pull-right ">$300</span></p><br>
                            <!-- Campo de cantidad -->
                            <input type="number" class="cantidad" id="cantidad-1" value="1" min="1">
                            <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="9">Agregar Al Carrito</a>
                        </div>
                    </div> <!--.card-->
            </div>
        </div> <!--.row-->
        <div class="row">
                <div class="four columns">
                    <div class="card">
                        <img src="img/Monitor_1.jpg" class="imagen-curso u-full-width">
                        <div class="info-card">
                            <h4>Monitor 24</h4>
                            <p>Marca: Dell</p>
                            <p>Color: Negro</p>
                            <p>Existencia: 320</p>
                            <img src="img/estrellas.png">
                            <p class="precio">  <span class="u-pull-right ">$2500.00</span></p><br>
                            <!-- Campo de cantidad -->
                            <input type="number" class="cantidad" id="cantidad-1" value="1" min="1">
                            <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="10">Agregar Al Carrito</a>
                        </div>
                    </div> <!--.card-->
                </div>
                <div class="four columns">
                        <div class="card">
                            <img src="img/Monitor_2.jpg" class="imagen-curso u-full-width">
                            <div class="info-card">
                                <h4>Monitor LED 24</h4>
                                <p>Marca: Hyundai</p>
                                <p>Color: Negro</p>
                                <p>Existencia: 290</p>
                                <img src="img/estrellas.png">
                                <p class="precio">  <span class="u-pull-right ">$2800.00</span></p><br>
                                <!-- Campo de cantidad -->
                                <input type="number" class="cantidad" id="cantidad-1" value="1" min="1">
                                <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="11">Agregar Al Carrito</a>
                            </div>
                        </div> <!--.card-->
                </div>
                <div class="four columns">
                        <div class="card">
                            <img src="img/Monitor_3.jpg" class="imagen-curso u-full-width">
                            <div class="info-card">
                                <h4>Monitor UltraGear</h4>
                                <p>Marca: LG</p>
                                <p>Color: Negro</p>
                                <p>Existencia: 260</p>
                                <img src="img/estrellas.png">
                                <p class="precio">  <span class="u-pull-right ">$3000.00</span></p><br>
                                <!-- Campo de cantidad -->
                                <input type="number" class="cantidad" id="cantidad-1" value="1" min="1">
                                <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="12">Agregar Al Carrito</a>
                            </div>
                        </div> <!--.card-->
                </div>
            </div> <!--.row-->
    </div>  

    <footer id="footer" class="footer">
        <center><h4>Sitio oficial Computech PC 2025</h4></center>
    </footer>

    <script src="js/app.js"></script>

</body>
</html>