<?php

include_once 'conexion.php'; //consumo la ruta 

// --> solo creo la variable sql_leer y le indico la operacion
$sql_leer_sucursal_monte    = 'SELECT * FROM sabores WHERE id_sucursal = 0001' ;
//$sql_leer_sucursal_lavallol = 'SELECT * FROM sabores WHERE id_sucursal = 0002' ;

$gsent = $pdo->prepare($sql_leer_sucursal_monte);   // establezco solo la conexion y la dejo en modo preparado
$gsent->execute();                                  // ejecuto la sentencia $sql_leer 

//$gsent = $pdo->prepare($sql_leer_sucursal_lavallol); // establezco solo la conexion y la dejo en modo preparado
//$gsent->execute();                                   // ejecuto la sentencia $sql_leer 


// guardo todos los datos en $resultado
$resultado_sucMonte = $gsent->fetchAll();     
//$resultado_sucLavallol = $gsent->fetchAll();     

// me devuelve todo el array de la base sabores por sucursal
//var_dump($resultado_sucursal); 

//

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- por seguridad xampp no te deja acceder desde un raiz, por eso hay que poner directamente index.css -->
    <link rel="stylesheet" href="pedido.css" type="text/css">
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
        <header class="cabecera">
            <h1 class="text-center cabecera">HELARTE</h1>
            <h5><strong>Amor por lo que hacemos</strong></h5>
        </header>

        <!-- nav INI  -->
        <ul class="nav nav-pills nav-fill">

            <li class="nav-item">
                <a class="nav-link btn-outline-primary" href="#">Crear pedido</a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn-outline-primary" href="login.php">Login</a>
            </li>

            <li class="nav-item">
                <a class="nav-link btn-outline-primary" href="contacto.php">Contacto</a>
            </li>
        </ul>    

    <!-- resultados en formato de tabla deployados de sql a traves de php-->
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    
                    <th scope="col">Helado</th>
                    <th scope="col">Sucursal</th>
                    <th scope="col">Cantidad kg</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($resultado_sucMonte as $dato): ?> 
                <tr class="table-info sombra-fila">
                        <td> <?php echo $dato['sabor']?> </td>
                        <td> <?php echo $dato['sucursal']?> </td>   
                        <td> 
                           <select name="" id="cantidadHelado">
                                <option selected="selected">0</option>    
                                <option value="cant1">1</option>
                                <option value="cant2">1/2</option>
                                <option value="cant3">1/4</option>
                            </select>
                        </td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>

        <form class="form-inline d-flex justify-content-end">
            <div class="form-group mx-sm-3 mb-2">
                <input class="form-control" type="text" placeholder="Kg" readonly>
                <input class="form-control" type="text" placeholder="Precio" readonly>
            </div>
            <button type="submit" class="btn btn-primary mb-2">Confirmar</button>
        </form>
        
    </div>   
<!-- 
    <footer>
        <div id="redes">
            <a href="#"><i class="fab fa-facebook" ></i></a> 
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-pinterest"></i></a>
        </div>
    </footer>     -->
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