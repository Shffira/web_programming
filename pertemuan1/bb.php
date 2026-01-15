<?php


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masa Indeks Tubuh</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body class="bg-light d-flex justify-content-center
    align-items-center min-vh-100">
    <div class="card shadow" style="widht: 30%">
        <div class="card-body">
            <h5 class="card-title text-center">Menghitung berat badan ideal</h5>
            <form action="bb.php" method= "POST">
               <table>
                <tr>
                    <td>Tinggi Badan</td><td>:</td><td> <input type="text" name="tb"></td>
                </tr>
               </table>
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