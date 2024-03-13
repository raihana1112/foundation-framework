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
                        <th>Nama</th>
                        <th>Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Pilihan Lomba</th>
                        <th>Kategori</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    include 'koneksi.php';
$sql = "SELECT * FROM pilihan_lomba";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  
  while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row["nama"] . "</td>";
    echo "<td>" . $row["ttl"] . "</td>";
    echo "<td>" . $row["jk"] . "</td>";
    echo "<td>" . $row["pilihan_lomba"] . "</td>";
    echo "<td>" . $row["kategori"] . "</td>";
    echo "</tr>";
  }
}

                    ?>
                   
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