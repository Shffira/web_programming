<?php
$nama = "";
$berat = "";
$tinggi = "";
$imt = "";
$kategori = "";

if (isset($_POST['hitung'])) {
    $nama   = $_POST['nama'];
    $berat  = $_POST['berat'];
    $tinggi = $_POST['tinggi'];

    // konversi cm ke meter
    $konversi_meter = $tinggi / 100;

    // rumus IMT
    $imt = $berat / ($konversi_meter * $konversi_meter);

    // kategori IMT
    if ($imt < 18.49) {
        $kategori = "Kurang (Underweight)";
    } elseif ($imt < 24.9) {
        $kategori = "Ideal / Normal";
    } elseif ($imt < 27) {
        $kategori = "Berlebih (Overweight)";
    } else {
        $kategori = "Obesitas";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hitung Berat Badan Ideal</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="card shadow p-4" style="max-width: 420px; width: 100%;">
        <h4 class="text-center mb-4">Hitung IMT</h4>

        <form method="post">
            <div class="mb-3">
                <label class="form-label">Nama Peserta</label>
                <input type="text" name="nama" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Berat Badan (kg)</label>
                <input type="number" name="berat" step="0.1" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Tinggi Badan (cm)</label>
                <input type="number" name="tinggi" step="0.1" class="form-control" required>
            </div>

            <button type="submit" name="hitung" class="btn btn-primary w-100">
                Hitung
            </button>
        </form>

        <?php if ($imt != "") { ?>
            <hr>
            <div class="alert alert-info text-center mt-3">
                <p class="mb-1"><strong>Nama Peserta</strong></p>
                <p><?= htmlspecialchars($nama); ?></p>

                <p class="mb-1"><strong>Hasil IMT</strong></p>
                <h5><?= number_format($imt, 2); ?></h5>

                <p class="mb-0"><strong>Kategori</strong></p>
                <p><?= $kategori; ?></p>
            </div>
        <?php } ?>
    </div>
</div>

</body>
</html>