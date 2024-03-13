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
            <form action="form.php" method="POST">
                <!-- Input text -->
                <div class="grid-x grid-padding-x">
                    <div class="cell medium-6">
                        <label>Nama
                            <input type="text" name="nama" placeholder="Masukkan Nama Anda" required>
                        </label>
                    </div>
                    <div class="cell medium-6">
                        <label>Tanggal Lahir
                            <input type="date" name="ttl" placeholder="Masukkan Tanggal Lahir Anda" required>
                        </label>
                    </div>
                    
                </div>
                <!-- Select Option-->
                <div class="grid-x grid-padding-x">
                    <div class="cell medium-6">
                    <label for="jk">Jenis Kelamin:</label>
                    <select name="jk" required>
                    <option value="" disabled selected hidden>pilih jenis kelamin</option>
                     <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                            </select>

                            </div>
                            <div class="cell medium-6">
                            <label for="pilihan_lomba">Pilihan Lomba:</label>
                    <select name="jenis_lomba" required>
                    <option value=""disabled selected hidden>pilih lomba</option>
                     <option value="Desain Grafis">Desain Grafis</option>
                        <option value="Speed Typing">Speed Typing</option>
                            </select>
                            </div>  
                </div>
                <div class="grid-x grid-padding-x">
                <div class="cell medium-6">
                            <label for="kategori">Kategori:</label>
                    <select name="kategori" required>
                    <option value=""disabled selected hidden>pilih kategori</option>
                     <option value="SMP">SMP</option>
                        <option value="SMA">SMA</option>
                        <option value="Mahasiswa">Mahasiswa</option>
                            </select>
                            </div> 
                            </div> 
               
                 
                <div class="grid-x grid-padding-x">
                    <div class="cell">
                        <button type="submit" class="button primary">Submit</input>
                    </div>
                </div>
            </form>
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