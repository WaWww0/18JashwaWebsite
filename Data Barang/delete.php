<?php

include "database_conn.php"; 
$id_sepatu = $_GET["id_sepatu"];

$query = "DELETE FROM sepatu WHERE id_sepatu='" . $id_sepatu . "'";

if(mysqli_query($db_connect, $query)){
    $message = 3; 
} else {
    $message = 4;
}

header("Location:tambah.php?message=" . $message . "");

?>