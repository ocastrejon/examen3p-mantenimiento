<?php session_start(); 
//datos para establecer la conexion con la base de mysql.
//require "cfg/conexion.php";

$conn = mysqli_connect("localhost", "root", "", "salas");

// verificamos si se han enviado ya las variables necesarias.
if (isset($_GET["id"])) {
    $id = $_GET["id"];


                $query = 'DELETE FROM SALA_REMOTA WHERE id_sala_remota='.$id;
                mysqli_query($conn, $query) or die(mysqli_error($conn));
}

   header('Location: index.php');
?>