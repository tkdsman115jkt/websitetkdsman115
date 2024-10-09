<?php
include_once("koneksi.php");

// Mengambil semua data dari database
$result = mysqli_query($mysqli,"SELECT * FROM dataoktober ORDER BY id DESC");

if (isset($_POST['Submit'])) {
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];

    // Insert data ke database
    $add = mysqli_query($mysqli, "INSERT INTO dataoktober(nama,kelas,waktu_kehadiran) VALUES('$nama', '$kelas', NOW())");
}
?>

<html>

<head>
    <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

     <title>ABSENSI TAEKWONDO 115</title>
</head>

<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1">ABSENSI TAEKWONDO 115</span>
        </div>
    </nav>

    <div class="bg-success p-2 text-dark bg-opacity-10">
        <h1 class="p-4 text-center">DAFTAR HADIR PESERTA</h1>
        <div class="container">
            <form action=""method="post" name="form_absen">
                <div class="col-md-6 offset-md-3">
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Kelas</label>
                        <input type="text" class="form-control" name="kelas" placeholder="Masukkan Kelas">
                    </div>
                </div>
                <div class="text-center">
                    <button type="reset" class="btn btn-danger" name="Reset">Reset</button>
                    <button type="submit" class="btn btn-primary" name="Submit">Hadir</button>
                    <li><a href="index.php" class="tbl-biru">HOMEPAGE</a></li>
                </div>
            </form>

            <table class="my-5 table-striped">
                <tr class="table-dark">
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Waktu Kehadiran</th>
                </tr>

                <?php
                while ($r = mysqli_fetch_array($result)) {
                ?>
                    <tr class="table-primary">
                        <td><?php echo $r['nama']; ?></td>
                        <td><?php echo $r['kelas']; ?></td>
                        <td><?php echo $r['waktu_kehadiran']; ?></td>
                    </tr>
                <?php
                }                
                ?>
                </table>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
 </body>
 </html>