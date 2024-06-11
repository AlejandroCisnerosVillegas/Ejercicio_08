<?php
    if(isset($_POST['registrar'])){	
    $nick = $_POST['nick'];
    $correo = $_POST['correo'];
    $pass = $_POST['pass'];
    $pais = $_POST['pais'];
    $fecha = $_POST['fecha'];
    echo "
    <br> El usuario es   : $nick
    <br> El correo es     : $correo 
    <br> La contraseña es : $pass 
    <br> Pais seleccionado: $pais 
    <br> Fecha ingresada  : $fecha <br>";
    if (isset($_POST['check1'])){
    echo "Sí - Recibir noticias <br>";
    }else
    {
    echo "No - Recibir noticias <br>";
    }
    if (isset($_POST['check2'])){
    echo "Sí - Recibir promociones <br>";
    }else
    {
    echo "No - Recibir promociones <br>";
    }
    if (isset($_POST['check3'])){
    echo "Sí - Aceptar las Condiciones y la política de cookies";
    }else
    {
    echo "No - Aceptar las Condiciones y la política de cookies";
    }
    }
?>