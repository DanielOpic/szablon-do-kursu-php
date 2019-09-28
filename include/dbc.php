<?php
//połączenie do bazy danych
    $conection = array(
        'host'=>'localhost',
        'user'=>'',
        'pass'=>'',
        'db'=>'geek'
    );
    //$conn = mysqli_connect($conection['host'], $conection['user'], $conection['pass'], $conection['db']);
    if(mysqli_connect_errno()){
        die('Błąd w połaczeniu do bazy');
    }
?>