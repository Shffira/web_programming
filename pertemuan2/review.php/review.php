<?php
//cek apakah button sudah di klik 
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    //ambil data
    $nilai = $_POST['nilai_siswa'];
    $nama = $_POST['nama_siswa'];
    
    //olah
    if ($nilai > 75) {
        $kategori = "Lulus";
    } else {
        $kategori = "Tidak Lulus";
    }

    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review nilai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body class="bg-light d-flex justify-content-center align-items-center min-vh-100">
     <div class="card shadow" style="width: 30%">
        <div class="card-body">
            <H5 class="card-title text-center">nilai siswa</h5>
            <form method= 'POST'>
                <div class="mb-3">
                    <input class="form-control" type="text" name="nama_siswa" id="nama" placeholder="Input Nama"
                        >
                </div>
                <div class="mb-3">
                    <input class="form-control" type="text" name="nilai_siswa" id="nilai" placeholder="Input Nilai"
                       >
                </div>
                <button class=" btn btn-primary w-100"> Hasil </button>
            </form>

        <strong>Kategori : </strong> <?php echo $kategori ?>
        






        </div>
</body>
</html>