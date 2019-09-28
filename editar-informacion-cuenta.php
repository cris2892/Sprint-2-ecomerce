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

  
    <link rel="stylesheet" href="css/editar-informacion-cuenta.css">

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
                    <article class="usuario-compra-vende">
                        <p>Soy Comprador</p> 
                    </article><br> 
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
                                    <h4 class="titulo-contenedor">Editar informacion personal</h4> 
                                </div>
                                <br>
                                <div class="contenido-contenedor">

                                <form action="editar-informacion-cuenta.php" method="GET">
                                    <p>
                                        <label for="nombreUsuario"><img class="icono-cuenta" src="img/icon-usuario.png" alt="">Nombre de usuario:</label><br>
                                        <input class="caja-editar-usuario" type="text" name="nombreUsuario"> 
                                    </p>
                                    <p>
                                        <label for="email"><img class="icono-cuenta" src="img/icon-email.png" alt="">E-mail:</label><br>
                                        <input class="caja-editar-usuario" type="email" name="email"><br>
                                    </p>
                                    <p>
                                        <label for="telefono"><img class="icono-cuenta" src="img/icon-telefono.png" alt="">Numero de telefono:</label><br>
                                        <input class="caja-editar-usuario" type="number" name="telefono"><br>
                                    </p>
                                    <p>
                                        <label for="direccion"><img class="icono-cuenta" src="img/icon-ciudad.png" alt="">Direccion:</label><br>
                                        <input class="caja-editar-usuario" type="text" name="direccion"> <br>
                                    </p><br>
                                    <p>
                                        <label for="idioma"> <img class="icono-cuenta" src="img/icon-idioma.png" alt="">Idioma:</label> <br>
                                            <select name="idioma" id="idioma"> 
                                                <option value="Es">Español</option>
                                                <option value="en">ingles</option>
                                                <option value="pr">Portugues</option>
                                            </select>
                                    </p> <br>
                                        <div><input class="btn1" type="button" value="Enviar"></div>
                                </form>
                            </div><br>
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