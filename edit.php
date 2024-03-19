<?php 

include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $ttl = $_POST['ttl'];
    $jenis_lomba = $_POST['jenis_lomba'];
    $kategori = $_POST['kategori'];

    $query = "UPDATE pilihan_lomba SET nama='$nama',jk='$jk',ttl='$ttl',jenis_lomba='$jenis_lomba',kategori='$kategori' where id='$id'";
        $result = mysqli_query($conn, $query);
 
        if($result){
             echo
  "<script>
  alert('Data berhasil di update');
  document.location.href = 'tabel.php';
  </script>
  ";
        }else{
         echo "Error: " . $query . "<br>" . $conn->error;
     }

 ?>