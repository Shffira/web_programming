<!-- PHP -->
 
 <?php
$hasil = null;

// mengecek apakah form sudah di submit, 
// jika berisi metode post maka ambil datanya
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
    // ambil data angka nya
    $bilangan1 = $_POST['angka1'];
    $bilangan2 = $_POST['angka2'];
    $operator  = $_POST['operator'];


    $hasil =  $bilangan1 + $bilangan2;
    if ($operator === "+") {
        $hasil = $bilangan1 + $bilangan2;
    } elseif ($operator == "-") {
        $hasil = $bilangan1 - $bilangan2;
    }  elseif ($operator == "*") {
        $hasil = $bilangan1 * $bilangan2;
    }  elseif ($operator == "/") {
        $hasil = $bilangan1 / $bilangan2;
    }

    }
 ?>




<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body class="bg-light d-flex justify-content-center
    align-items-center min-vh-100">
    <div class="card shadow" style="widht: 30%">
        <div class="card-body">
            <h5 class="card-title text-center">Kalkulator</h5>
            <form method= "POST">
                <div class="mb-3">
                    <input class="form-control" type="number" name="angka1" id="angka1"
                    placeholder="Angka Pertama" value="<?= $bilangan1 ?>">
                </div>
                <div class="mb-3">
                    <input class="form-control" type="number" name="angka2" id="angka2"
                    placeholder="Angka Kedua" value="<?= $bilangan2 ?>">
                </div>
                <div>
                     <select name="operator" class="form-control">
                    <option value="+">Tambah</option>
                    <option value="-">Kurang</option>
                    <option value="*">Kali</option>
                    <option value="/">Bagi</option>
                </select>
                </div>
            
                <button class="btn btn-primary w-100"> Hitung </button>
            </form>

            <?php if ($hasil !== null): ?>
                <div class="alert alert-success text-center mt-2" >
                    Hasil : <?php echo $hasil ?>
                </div>
            <?php endif; ?>
        
    </div>
</body>
</html>