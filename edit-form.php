<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Form Lomba</title>
    <!-- Tautkan Foundation CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.6.3/css/foundation.min.css">
    <style>

    </style>
</head>
<body>

<div class="grid-container">
    <div class="grid-x grid-padding-x">
        <div class="cell">
            <h2>Form Edit dengan Select Option</h2>
            <!-- Form -->
                <?php 
    include "koneksi.php";
    $id = $_GET['id'];
    $sql = "SELECT * FROM pilihan_lomba WHERE id='$id'";
    $result = $conn->query($sql);
    $jenis_kelamin    = array('Laki-laki','Perempuan');
    $jenis_lomba    = array('Desain Grafis','Speed Typing');
    $kategori    = array('SMP','SMA', 'Mahasiswa');
    
    while($data = mysqli_fetch_array($result)){
    ?>
            <form action="edit.php" method="POST">
                <input type="hidden" name="id" value="<?= $data['id'] ?>">
                <!-- Input text -->
                <div class="grid-x grid-padding-x">
                    <div class="cell medium-6">
                        <label>Nama
                            <input type="text" name="nama" value="<?php echo $data['nama'] ?>" required>
                        </label>
                    </div>
                    <div class="cell medium-6">
                        <label>Tanggal Lahir
                        <input type="date" name="ttl" value="<?php echo $data['ttl'] ?>" required>                       
                     </label>
                    </div>
                    
                </div>
                <!-- Select Option-->
                <div class="grid-x grid-padding-x">
                    <div class="cell medium-6">
                    <label for="jk">Jenis Kelamin:</label>
                    <select name="jk" required>

                     <?php
                            foreach ($jenis_kelamin as $j){
                                echo "<option value='$j' ";
                                echo $data['jk']==$j?'selected="selected"':'';
                                echo ">$j</option>";
                            }
                            ?>
                            </select>

                            </div>
                            <div class="cell medium-6">
                            <label for="pilihan_lomba">Pilihan Lomba:</label>
                    <select name="jenis_lomba" required>
                   <?php
                            foreach ($jenis_lomba as $jl){
                                echo "<option value='$jl' ";
                                echo $data['jenis_lomba']==$jl?'selected="selected"':'';
                                echo ">$jl</option>";
                            }
                            ?>
                            </select>
                            </div>  
                </div>
                <div class="grid-x grid-padding-x">
                <div class="cell medium-6">
                            <label for="kategori">Kategori:</label>
                    <select name="kategori" required>
                   <?php
                            foreach ($kategori as $k){
                                echo "<option value='$k' ";
                                echo $data['kategori']==$k?'selected="selected"':'';
                                echo ">$k</option>";
                            }
                            ?>
                            </select>
                            </div> 
                            </div> 
               
                 
                <div class="grid-x grid-padding-x">
                    <div class="cell">
                        <button type="submit" class="button primary">Submit</input>
                    </div>
                </div>
            </form>
            <?php } ?>
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