<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Header Berwarna dengan Foundation</title>
    <!-- Tautkan Foundation CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.6.3/css/foundation.min.css">
    <style>
        /* Gaya tambahan untuk header tabel berwarna */
        .color-header th {
            background-color: #4CAF50; /* Warna hijau */
            color: white; /* Warna teks putih */
        }
    </style>
</head>
<body>

<div class="grid-container">
    <div class="grid-x grid-padding-x">
        <div class="cell">
            <h2>Table Header Berwarna dengan Foundation</h2>
            <!-- Tabel -->
            <table>
                <thead>
                    <tr class="color-header"> <!-- Tambahkan kelas color-header untuk header berwarna -->
                        <th>No</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Tanggal Lahir</th>
                        <th>Pilihan Lomba</th>
                        <th>Kategori</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
        include "koneksi.php";
        $sql = "SELECT * FROM pilihan_lomba";
        $result = $conn->query($sql);
        $nomor = 1;
        while($data = mysqli_fetch_array($result)){
        ?>
        <tr>
            <td><?php echo $nomor++; ?></td>
            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['jk']; ?></td>
            <td><?php echo $data['ttl']; ?></td>
            <td><?php echo $data['jenis_lomba']; ?></td>
            <td><?php echo $data['kategori']; ?></td>
            <td>
                <a class="edit" href="edit.php?id=<?php echo $data['id']; ?>">Edit</a> |
                <a class="hapus" href="hapus.php?id=<?php echo $data['id']; ?>">Hapus</a>                   
            </td>
        </tr>
        <?php } ?>
                   
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Tautkan Foundation JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.6.3/js/foundation.min.js"></script>
<!-- Aktifkan Foundation JavaScript -->
<script>
    $(document).foundation();
</script>
</body>
</html>