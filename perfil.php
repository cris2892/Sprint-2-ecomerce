<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!--Font Awsone-->

    <script src="https://kit.fontawesome.com/66735e3f01.js"></script>


    <!-- Estilos Propios -->

  
    <link rel="stylesheet" href="css/master.css">

    <title>Mi Cuenta</title>
</head>

<body>

    <div class="container_fluid">

        <div class="container_fluid">
            <?php require_once("navbar.php"); ?>




        <!--Menu lateral izquierdo-->
            <section class="cuerpo-perfil">
                <section class="contenedor-lateral">

                    <article class="titulo-bienvenida">
                        <p> <img class="imagen-perfil" src="img/girl.png" alt="">Hola Florencia!!</p> 
                    </article> 
                    <article class="usuario-compra-vende">Soy Comprador</article>
                    <br> 
                    <article>
                            <ul>
                                    <li><a href="perfil.php">Mi cuenta</a></li>
                                    <li><a href="compras.php">Mis compras</a></li>
                                    <li><a href="preguntas.php">Mis preguntas</a></li>
                                    <li><a href="favoritos.php">Favoritos</a></li>
                                </ul>
                    </article>
                </section>
                <section class="contenedor-central">
                    <article>
                            <h2 >Mi cuenta</h2>
                            <br>
                            <div class="contenedor-informacion">
                                    <div class="linea">
                                            <h4 class="titulo-contenedor">Informacion personal</h4> <a class="editar" href="editar-informacion-cuenta.php">Editar</a>
                                    </div>
                                     <br>
                                     <div class="contenido-contenedor">
                                            <p class="informacion-mi-cuenta"></p> <img class="icono-cuenta" src="img/icon-usuario.png" alt="">Nala Parrillas</p>
                                            <p class="informacion-mi-cuenta"> <img class="icono-cuenta" src="img/icon-email.png" alt="">nala@gmail.com</p>
                                            <p class="informacion-mi-cuenta"> <img class="icono-cuenta" src="img/icon-telefono.png" alt=""> 4765-6541</p>
                                            <p class="informacion-mi-cuenta"> <img class="icono-cuenta" src="img/icon-ciudad.png" alt="">Calle 123 - Buenos Aires - Argentina</p>
                                            <p class="informacion-mi-cuenta"> <img class="icono-cuenta" src="img/icon-pais.png" alt="">Español</p>
                                     </div>
                            </div>
                                    <br>
                            <div class="contenedor-pass"> 
                                    <div class="linea">
                                             <h4 class="titulo-contenedor">Contraseña</h4> <a class="editar" href="cambiar-pass.php">Editar</a>
                                    </div>
                                             <br>
                                    <div class="contenido-contenedor">
                                            <p class="contrasenia-contenedor">***********</p>
                                    </div>
                                    </div>
                            
         
                          
                           
                    </article>
                        
                </section>

              

                 
           
           

          


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>