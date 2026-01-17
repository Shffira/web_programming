<?php
$hasil = "";
$nama = "";

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $jawaban_user = $_POST['jawaban'];
    $jawaban_benar = [2, 5, 12, 6, 74, 26, 73, 16];

    $benar = 0;
    for ($i = 0; $i < count($jawaban_benar); $i++) {
        if ($jawaban_user[$i] == $jawaban_benar[$i]) {
            $benar++;
        }
    }

    if ($benar == 8) {
        $hasil = "<span class='text-success'>Normal</span>";
    } elseif ($benar >= 5) {
        $hasil = "<span class='text-warning'>Terindikasi Buta Warna Parsial</span>";
    } else {
        $hasil = "<span class='text-danger'>Terindikasi Buta Warna Total</span>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tes Buta Warna</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container py-4">

    <!-- JUDUL -->
    <div class="text-center mb-3">
        <h4>Tes Buta Warna (Metode Ishihara)</h4>
    </div>

    <!-- FORM -->
    <form method="post">
        <!-- INPUT NAMA -->
        <div class="mb-4">
            <label class="form-label fw-bold">Nama Peserta</label>
            <input type="text" name="nama" class="form-control" required>
        </div>

        <!-- GAMBAR TES -->
        <div class="row">

            <?php for ($i = 1; $i <= 1; $i++): ?>
            <div class="col-md-6">
                <div class="card p-3">
                    <img src="https://th.bing.com/th/id/R.b1b0b0e9a36b177f914629e02a38f51a?rik=vdCtfPGpGKMJog&riu=http%3a%2f%2fcolor-blind.weebly.com%2fuploads%2f2%2f6%2f1%2f5%2f26158386%2f958125453.jpg%3f318&ehk=RGe0xZYCal0Mn8hC3Za4jo2WtDH7vIu4SEo1YcQ7MT4%3d&risl=&pid=ImgRaw&r=0" class="img-fluid mx-auto" style="max-width:180px;">
                    <input type="number" name="jawaban[]" class="form-control mt-3" placeholder="Masukkan angka" required>
                </div>
            </div><div class="col-md-6">
                <div class="card p-3">
                    <img src="https://www.colour-blindness.com/CBTests/ishihara/Plate4.gif" class="img-fluid mx-auto" style="max-width:180px;">
                    <input type="number" name="jawaban[]" class="form-control mt-3" placeholder="Masukkan angka" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card p-3">
                    <img src="https://www.colour-blindness.com/CBTests/ishihara/Plate1.gif" class="img-fluid mx-auto" style="max-width:180px;">
                    <input type="number" name="jawaban[]" class="form-control mt-3" placeholder="Masukkan angka" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card p-3">
                    <img src="https://tse4.mm.bing.net/th/id/OIP.sLMcC9zRWE9DJDDMQaZ2GAAAAA?pid=ImgDet&w=281&h=276&rs=1&o=7&rm=3" class="img-fluid mx-auto" style="max-width:180px;">
                    <input type="number" name="jawaban[]" class="form-control mt-3" placeholder="Masukkan angka" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card p-3">
                    <img src="https://tse3.mm.bing.net/th/id/OIP.GGqN38xDUKWAlxjf5T3MxwAAAA?pid=ImgDet&w=281&h=276&rs=1&o=7&rm=3" class="img-fluid mx-auto" style="max-width:180px;">
                    <input type="number" name="jawaban[]" class="form-control mt-3" placeholder="Masukkan angka" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card p-3">
                    <img src="https://www.colour-blindness.com/CBTests/ishihara/Plate16.gif" class="img-fluid mx-auto" style="max-width:180px;">
                    <input type="number" name="jawaban[]" class="form-control mt-3" placeholder="Masukkan angka" required>
                </div>
            </div><div class="col-md-6">
                <div class="card p-3">
                    <img src="https://www.colour-blindness.com/CBTests/ishihara/Plate13.gif" class="img-fluid mx-auto" style="max-width:180px;">
                    <input type="number" name="jawaban[]" class="form-control mt-3" placeholder="Masukkan angka" required>
                </div>
            </div><div class="col-md-6">
                <div class="card p-3">
                    <img src="https://www.colour-blindness.com/CBTests/ishihara/Plate12.gif" class="img-fluid mx-auto" style="max-width:180px;">
                    <input type="number" name="jawaban[]" class="form-control mt-3" placeholder="Masukkan angka" required>
                </div>
            </div>
            <?php endfor; ?>

        </div>
       

        <!-- BUTTON -->
        <div class="d-grid mt-4">
            <button type="submit" name="submit" class="btn btn-success">
                Cek Hasil Tes
            </button>
        </div>
    </form>

    <!-- HASIL -->
    <?php if ($hasil != ""): ?>
    <div class="card mt-4">
        <div class="card-header bg-primary text-white">
            Hasil Tes
        </div>
        <div class="card-body">
            <p><b>Nama Peserta:</b> <?= $nama ?></p>
            <p><b>Kesimpulan:</b> <?= $hasil ?></p>
        </div>
    </div>
    <?php endif; ?>

</div>

</body>
</html>