<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>denuncia y proteje</title>
    <link rel="stylesheet" href="./css/estilo.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">   
</head>
<body>
    <section>
    <?php
$conexion = new mysqli("localhost", "root", "", "proyecto1");
$sql = "SELECT id, nombre, contenido,foto, fecha, autor FROM articulos";
$resultado = $conexion->query($sql);
while ($fila = $resultado->fetch_assoc()) {
    echo "
    <article>
            <h3>{$fila["nombre"]}</h3>
            <div>
                <img src='{$fila["foto"]}' alt='{$fila["nombre"]}'>
            </div>
            <p>
                {$fila["contenido"]}
            </p>
        </article>";
}
?>
        
        
    </section>
</body>
</html>