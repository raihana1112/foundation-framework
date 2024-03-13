<?php

include 'koneksi.php';

if (isset($_POST['submit'])) {

    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $ttl = $_POST['ttl'];
    $jenis_lomba = $_POST['jenis_lomba'];
    $kategori = $_POST['kategori'];

        $query = "INSERT INTO pilihan_lomba(nama, jk, ttl, jenis_lomba, kategori) VALUES('$nama', '$jk', '$ttl', '$jenis_lomba', '$kategori')";
        $result = query($conn, $query);
 
        if($result){
            header('Location: index.php');
        }else{
         echo "Error: " . $query . "<br>" . $conn->error;
     }
}


?>
