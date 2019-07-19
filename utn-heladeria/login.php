<?php

include_once 'conexion.php'; //consumo la ruta 

// --> solo creo la variable sql_leer y le indico la operacion
$sql_leer_login    = 'SELECT * FROM login'  ;

$gsent = $pdo->prepare($sql_leer_login);   // establezco solo la conexion y la dejo en modo preparado
$gsent->execute();                                  // ejecuto la sentencia $sql_leer 

$resultado_login = $gsent->fetchAll();      

//

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- por seguridad xampp no te deja acceder desde un raiz, por eso hay que poner directamente index.css -->
    <link rel="stylesheet" href="login.css" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- js, popper  -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <title>UTN TP 2da PARTE</title>
</head>



<body>
    <div class="container">
        <header>
            <a href="index.php" ><h1 class=text-center>HELARTE</h1></a>
            <h5>Amor por lo que hacemos </h5>
        </header>

        <!-- nav INI  -->
        <ul class="nav nav-pills nav-fill">

            <li class="nav-item">
                <a class="nav-link btn-outline-primary" href="pedido.php">Crear pedido</a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn-outline-primary" href="login.php">Login</a>
            </li>

            <li class="nav-item">
                <a class="nav-link btn-outline-primary" href="contacto.php">Contacto</a>
            </li>
        </ul>    

        <!-- formulario de login -->
        
        <form>
            <div class="form-group col-5">
                <label for="exampleInputEmail1">Usuario</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="pepito...">   
            </div>
            <div class="form-group col-5">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>

            <button type="submit" class="btn btn-primary boton-enviar">Login</button>
        </form>
    </div>   

    <footer>
        <div class="icon-bar">
            <ul>
                <li>
                    <a href="http://www.facebook.com/sharer.php?u=http://www.google.com&t=Prueba" class="facebook" data-href="http://www.google.com" data-send="false" data-layout="box-count" data-width="60" data-show-faces="false" rel="nofollow" target="_blank"><i class="fab fa-facebook"></i></a>
                </li>
                <li>
                    <a href="http://www.twitter.com/share" class="twitter" data-text="Prueba Twitter" data-url="http://www.socialitejs.com" data-count="vertical" rel="nofollow" target="_blank"><i class="fab fa-twitter"></i></a>
                </li>
                <li>
                    <a href="http://www.plus.google.com/share?url=http://www.google.com" class="google" data-size="tall" data-href="http://www.google.com" rel="nofollow" target="_blank"><i class="fab fa-google"></i></a>
                </li>
                <li>
                    <a href="http://www.linkedin.com/shareArticle?mini=true&url=http://www.google.com&title=Google" class="linkedin"  data-url="http://www.google.com" data-counter="top" rel="nofollow" target="_blank"><i class="fab fa-linkedin"></i></a> 
                </li>  
            </ul>    
        </div>
    </footer>  


</body>

<script type="text/javascript" src='./socialite.min.js'> 
    $(document).ready(function()
    {
        $('article.text').one('mouseenter', function()
        {
            Socialite.load($(this)[0]);
        });
    });

</script> 
</html>