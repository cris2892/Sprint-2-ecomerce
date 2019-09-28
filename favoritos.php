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
    
    <title>Favoritos</title>
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
                                    <li><a href="perfil.html">Mi cuenta</a></li>
                                    <li><a href="compras.html">Mis compras</a></li>
                                    <li><a href="preguntas.html">Mis preguntas</a></li>
                                    <li><a href="favoritos.html">Favoritos</a></li>
                                </ul>
                    </article>
                </section>

                                 
            


                <section class="contenedor-central">
                        <article>
                                <h2 >Favoritos</h2>
                                <br><br>
                                <!--Favorito 1-->
                                <div class="producto-compra">
                                    <div> <br><input type="checkbox" name="eliminar" id=""></div>
                                    <div class="contenedor-imagen">
                                        <img class="imagen-producto-compra"  src="img/burger.png" alt="">
                                    </div>
                                        
                                    <div class="despcripcion-producto">
                                            <a href="jugo-fruta.html"> Burger Veggie</a> <br><br>
                                           <p class="precio-producto">$200.-</p>
                                           <p class="envio-compra">Envio Gratis!</p>
                                    </div>
                                    <div class="foto-tienda">
                                           <img src="img/cat1.png" alt=""> 
                                    </div>

                                    <div class="vendedor-producto">
                                        <h5> Vendedor:</h5> 
                                        <a href="tienda-nala.html"> ♥ Tienda Nala</a> <br>
                                        <a href="mensajes.html"> Ver mensajes</a>
                                    </div>
                                    <div class="detalle-producto"> 
                                            <div><input class="btn1" type="button" value="Comprar"></div> <br>
                                            <div><input class="btn1" type="button" value="Agregar al Carrito"></div>
                                    </div>
                                
                                </div>
                              

                            <!--Favorito 2-->
                                <div class="producto-compra-2">
                                        <div><br><input type="checkbox" name="eliminar" id=""></div>
                                        <div class="contenedor-imagen">
                                            <img class="imagen-producto-compra"  src="img/burger.png" alt="">
                                        </div>
                                            
                                        <div class="despcripcion-producto">
                                                <a href="jugo-fruta.html"> Burger Veggie</a> <br><br>
                                                <p class="precio-producto">$200.-</p>
                                                <p class="envio-compra">Envio Gratis!</p>
                                        </div>
                                        <div class="foto-tienda">
                                               <img src="img/cat1.png" alt=""> 
                                        </div>
    
                                        <div class="vendedor-producto">
                                            <h5> Vendedor:</h5> 
                                            <a href="tienda-nala.html"> ♥ Tienda Nala</a> <br>
                                            <a href="mensajes.html"> Ver mensajes</a>
                                        </div>
                                        <div class="detalle-producto"> 
                                                <div><input class="btn1" type="button" value="Comprar"></div> <br>
                                                <div><input class="btn1" type="button" value="Agregar al Carrito"></div>
                                        </div>
                                    
                                    </div>
                                     <!--Favorito 3-->
                                <div class="producto-compra-2">
                                        <div><br><input type="checkbox" name="eliminar" id=""></div>
                                        <div class="contenedor-imagen">
                                             <img class="imagen-producto-compra"  src="img/burger.png" alt="">
                                        </div>
                                            
                                        <div class="despcripcion-producto">
                                                <a href="jugo-fruta.html"> Burger Veggie</a> <br><br>
                                                <p class="precio-producto">$200.-</p>
                                           <p class="envio-compra">Envio Gratis!</p>
                                        </div>
                                        <div class="foto-tienda">
                                               <img src="img/cat1.png" alt=""> 
                                        </div>
    
                                        <div class="vendedor-producto">
                                            <h5> Vendedor:</h5> 
                                            <a href="tienda-nala.html"> ♥ Tienda Nala</a> <br>
                                            <a href="mensajes.html"> Ver mensajes</a>
                                        </div>
                                        <div class="detalle-producto"> 
                                            <div><input class="btn1" type="button" value="Comprar"></div> <br>
                                            <div><input class="btn1" type="button" value="Agregar al Carrito"></div>
                                                
                                                
                                        </div>
                                    
                                    </div>
                                    <div class="selecion-eliminar">
                                        <input  type="checkbox" name="eliminar" id="">   <input   class="boton-eliminar" type="button" value="Eliminar">
                                    </div>
                                    <div  class="paginacion">
                                        <a class="pagina-numero" href="pagina-uno.html">1</a> 
                                        <a class="pagina-numero" href="pagina-uno.html">2</a>
                                        <a class="pagina-numero" href="pagina-uno.html">3</a>
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