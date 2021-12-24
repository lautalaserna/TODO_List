<?php
    require "conn.php";
    if(isset($_POST['nuevo_todo'])){
        $task = $_POST['nuevo_todo'];
        $insert = $conn->prepare("INSERT INTO tareas (tarea, terminado) VALUES (:tarea, false)");
        $insert->execute([':tarea' => $task]);
    }
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>TODO List</title>
    </head>
    <body>
        <form action="index.php" method="POST" class="formulario">  
            <input class="texto" name="nuevo_todo" type="text">
            <input class="submit" type="submit" value="Añadir">
            <div class="list-container">
                <ul class="lista-todo">
                    <li class="todo"> Terminar el TODO LIST</li>
                    <li class="todo"> Llorar un rato</li>
                </ul>
            </div>
        </form>

    </body>
    <script src="main.js"></script>
</html>