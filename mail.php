<?php
    $destino = "ventas@informaticaquemu.com";
    $web = "Informatica Quemu";
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $cel = $_POST["cel"];
    $mensaje = $_POST["mensaje"];

    //unir el contenido en una sola variable
    /* $contenido = "Nombre: " . $nombre . 
                "\n Correo: " . $correo . 
                "\n Telefono: " . $cel . 
                "\n Mensaje: " . $mensaje; */
    $contenido = 
        "<div style='display:flex;flex-direction:column;justify-content:space-between;align-items:flex-start;align-content:flex-start;background: #1a237e;width: 500px;border-radius: 15px;margin: 1em;'>".
            "<h2 style='background:#fff'>"."Nombre: ".$nombre."</h2>".
            "<h3>"."Correo: ".$correo."</h3>".
            "<h3>"."Cel: ".$cel."</h3>".
            "<p style='font-size:25px;color:white;display:flex;flex-direction:column;'>"."Mensaje: ".$mensaje."</p>".
        "</div>";
    //encabezado
    $encabezado = "From:".$_POST["nombre"]."<".$_POST["correo"].">\r\n";
    $encabezado .= "Content-type:text/html; charset=UTF-8";
    //funcion mail
    // 1: destino
    // 2: titulo o asunto
    // 3: contenido
    // 4: encabezado
    mail($destino,$web,$contenido,$encabezado);

    //volver a la pagina
    header("location: index.html");
?>