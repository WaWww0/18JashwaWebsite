<?php 

// add_process.php
include "database_conn.php";

if(count($_POST) > 0) {
    $id_sepatu = $_POST["id_sepatu"];
    $nama_sepatu = $_POST["nama_sepatu"]; 
    $harga_sepatu = $_POST["harga_sepatu"]; 
    $jumlah = $_POST["jumlah"]; 
    $gambar = $_POST["gambar"];

    $query = "INSERT INTO sepatu (id_sepatu, nama_sepatu, harga_sepatu, jumlah, gambar) VALUES ('$id_sepatu', '$nama_sepatu', '$harga_sepatu', '$jumlah', '$gambar')";

    if(mysqli_query($db_connect, $query)){
        $message = 1; 
    } else {
        $message = 4;
    }
}

header("Location:tambah.php?message=" . $message . "");

?>