<?php

include 'koneksi.php';

 $id = $_GET['id'];


        $query = "DELETE from pilihan_lomba where id='$id'";
        $result = mysqli_query($conn, $query);
 
        if($result){
             echo
  "<script>
  alert('Data berhasil di hapus');
  document.location.href = 'tabel.php';
  </script>
  ";
        }else{
         echo "Error: " . $query . "<br>" . $conn->error;
     }


?>