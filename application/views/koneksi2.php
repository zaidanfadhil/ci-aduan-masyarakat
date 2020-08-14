<?php
    // koneksi menggunakan method PDO
    try {
        //code...
        $koneksi = new PDO("mysql:host=localhost;dbname=aduan_masyarakat","root","");
       //  echo "berhasil terkoneksi";
    } catch (PDOException $th) {
        //throw $th;
        echo $th->getMessage();
    }
?>