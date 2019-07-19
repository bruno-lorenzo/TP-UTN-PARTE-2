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
    <link rel="stylesheet" href="contacto.css" type="text/css">
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

<!-- formulario INI -->

        <div class="form-container" id="formulario">
            <h1>¿Querés recibir más información sobre nuestros helados? <span>Registrate!</span></h1>

            <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans" rel="stylesheet">

                <div class="form-container" id="formulario">
                    <h1>¿Querés recibir más información sobre nuestros helados? <span>Registrate!</span></h1>

                    <form>
                        <div class="section"><span>1</span>Tus datos</div>
                        <div class="inner-wrap">
                            <label>Nombre completo <input type="text" name="campo1" required placeholder="Ej.: Juan Pérez"> </label>
                            <label>Dirección <textarea name="campo2" placeholder="Ej.: Enlightened Path 111"></textarea></label>
                            <label>E-mail  <input type="email" name="campo3" required placeholder="Ej.: jperez@mail.com"/></label>
                            <label>Teléfono <input type="text" name="campo4" /></label>
  		                </div>
                        <div class="section"><span>2</span>Crea tu clave</div>
  		                <div class="inner-wrap">
                            <label>Clave <input type="password" name="campo5" required/></label>
                            <label>Confirmá tu clave <input type="password" name="campo6" required /></label>
                        </div>
                        <div class="button-section">
                            <input type="submit" name="Registro" />
                                <span class="privacidad">
                                    <input type="checkbox" name="campo7" required>
                                    Acuerdo a nuestros <br>
                                    <a class="terms" href="terminos_y_condiciones.html" target="_blank">Términos y condiciones</a>.
                                </span>
                        </div>
                    </form>
                </div>


<!-- formulario FIN -->
    </div>   

    <footer>
        <div id="redes">
            <a href="#"><i class="fab fa-facebook" ></i></a> 
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-pinterest"></i></a>
        </div>
    </footer>    
 
</body>
</html>