<?php 
    $host = "localhost"; //host database
    $username = "root"; //username database
    $password = ""; //password database
    $db = "profile"; //database 

    $koneksi = new mysqli($host, $username, $password, $db); //membuat koneksi ke server mysql

    if($koneksi->connect_error){
        die("Koneksi ke database gagal");
    // } else {
    //     echo "Koneksi ke database berhasil";
    }
    
?>