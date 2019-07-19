<?php

$link= 'mysql:host=localhost;dbname=heladeria';
$usuario='root';
$pass='';

try{
    $pdo= new PDO($link,$usuario,$pass);
    //echo 'Conectado en index';   // al hacer este echo solo compruebo que se pudo conectar con la base de datos


    // --> para saber los datos al realizar un select de un tabla y mostrados en array
    //foreach($pdo->query('SELECT * FROM `sabores`') as $fila){
    //   print_r($fila);
    //}


}catch (PDOExeption $e){
    print "¡Error!:" . $e->getMessage() . "<br/>";
    die;

}
?>



 