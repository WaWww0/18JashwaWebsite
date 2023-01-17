<?php 

include "database_conn.php";

if (count($_POST) > 0) {
    // ambil id dari customer sebagai penanda 
    $id_sepatu = $_POST["id_sepatu"]; 
    $nama_sepatu = $_POST["nama_sepatu"]; 
    $harga_sepatu = $_POST["harga_sepatu"]; 
    $jumlah = $_POST["jumlah"];
    $gambar = $_POST["gambar"];

    $query =
        "UPDATE sepatu set id_sepatu='" . 
        $id_sepatu . 
        "', nama_sepatu='" . 
        $nama_sepatu . 
        "', harga_sepatu='" . 
        $harga_sepatu . 
        "', jumlah='" . 
        $jumlah . 
        "', gambar='" . 
        $gambar . 
        "' WHERE id_sepatu='" . 
        $id_sepatu . 
        "'";

    if (mysqli_query($db_connect, $query)) {
        $message = 2;
    } else {
        $message = 4;
    }
}

header("Location:tambah.php?message=" . $message . "");

?>