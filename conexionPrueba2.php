<?php
    $host="valentinalejandro";
    $dbusername = "valentine";
    $dbpassword = "123456789";
    $dbname = "tienda";

    //conexion

    $conexion = mysqli_connect($host, $dbusername, $dbpassword) or die("No se pudo conectar al servidor");

    //Seleccion de la bd

    $bd = mysqli_connect_db($conexion, $dbname) or die ("No Se Pudo Connectar A La Base De Datos");

    //Establecer La Consulta

    $consulta = "SELECT * FROM ps4";
    $resultado = mysqli_query ( $conexion, $consulta) or die("Algo esta mal con la base");

    //Mostrar los registros
    echo "<table borde ='2'>";
    echo "<tr>";
    echo "<th>Id</Id>";
    echo "<th>Nombre</th>";
    echo "<th>Costo</th>";
    echo "</th>";

    //bucle while que recorre cada registro y muestra cada campo en la tabla

    while($columna = mysqli_fetch_array($resultado)){
        echo "<tr/>";
        echo "<td>" . $columna['id']    .   "</td><td>" .   $columna['nombre']  .   "</td><td>" .   $columna['costo']   .   "</td>";
        echo "<tr/>";
    }

    echo "</table>"; //Fin De La Tabla

    mysqli_close($conexion);
?>