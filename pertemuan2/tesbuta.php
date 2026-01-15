<?php
//cek apakah button sudah di klik 
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    //ambil data
    $nama = $_POST['nama_peserta'];
    $angka = $_POST['masukkan_angka'];
    
    
    //olah
    if ($angka > 75) {
        $kategori = "Normal";
    } else {
        $kategori = "Terindivikasi";
    }

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tes Buta Warna</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex justify-content-center align-items-center min-vh-100">
    
        <div class="card shadow" style="width: 30%">
            <div class="card-body">
                <H5 class="card-title bg-success text-white rounded-top">Tes Buta Warna</h5>
                 
                <form method= 'POST'>
                    <div class="mb-3">
                    <input class="form-control" type="text" name="nama_peserta" id="nama" placeholder=" Nama Peserta">
                </div>
                    <div class="row">
                        <div class=" col-lg-6">

                        </div>
                        <div class=" col-lg-6">
                            <h5 class=" text-center">Gambar 1</h5>
                            <img class= "text-align text-center" src="https://cdn.medcom.id/images/library/images/Tes%20Ishihara%20buta%20warna.jpg"  width= "90%">
                            <div class="mb-3">
                                <input class="form-control" type="text" name="masukkan_angka" id="angka" placeholder="Masukkan Angka"
                                >
                            </div>
                        </div>  
                        <div class=" col-lg-6">
                            <h5 class=" text-center">Gambar 2</h5>
                            <img class= "text-align text-center" src="https://3.bp.blogspot.com/-lqinFFqIkd8/VuZCGPvT0AI/AAAAAAAAAQI/dkahPxyppuo0cEev_p3eAo7L7GBIPMKdw/s1600/9.jpg"  width= "90%">
                            <div class="mb-3">
                                <input class="form-control" type="text" name="masukkan_angka" id="angka" placeholder="Masukkan Angka"
                                >
                            </div>
                        </div>
                        <div class=" col-lg-6">
                            <h5 class=" text-center">Gambar 3</h5>
                            <img class= "text-align text-center" src="https://awsimages.detik.net.id/community/media/visual/2021/04/04/tes-buta-warna-5.png?w=700&q=90"  width= "90%">
                            <div class="mb-3">
                                <input class="form-control" type="text" name="masukkan_angka" id="angka" placeholder="Masukkan Angka"
                                >
                            </div>
                         </div>
                         <div class=" col-lg-6">
                            <h5 class=" text-center">Gambar 4</h5>
                            <img class= "text-align text-center" src="https://1.bp.blogspot.com/-YcC_O7Qbc1w/Ve8KoHFDgBI/AAAAAAAALA0/usFVwJaadcI/s320/5.jpg"  width= "90%">
                            <div class="mb-3">
                                <input class="form-control" type="text" name="masukkan_angka" id="angka" placeholder="Masukkan Angka"
                                >
                            </div>
                        </div>
                        <div class=" col-lg-6">
                            <h5 class=" text-center">Gambar 5</h5>
                            <img class= "text-align text-center" src="https://quiz123.xyz/storage/2020/01/17-tes-buta-warna-ishihara.png"  width= "90%">
                            <div class="mb-3">
                                <input class="form-control" type="text" name="masukkan_angka" id="angka" placeholder="Masukkan Angka"
                                >
                            </div>
                        </div>
                         <div class=" col-lg-6">
                            <h5 class=" text-center">Gambar 6</h5>
                            <img class= "text-align text-center" src="https://awsimages.detik.net.id/community/media/visual/2021/04/04/tes-buta-warna.png?w=700&q=90"  width= "90%">
                            <div class="mb-3">
                                <input class="form-control" type="text" name="masukkan_angka" id="angka" placeholder="Masukkan Angka"
                                >
                            </div>
                        </div>
                        <button class=" btn btn-primary w-100"> Cek Hasil Tes </button>
                    
                </form>

            <strong>Tes 1: </strong> <?php echo $kategori ?>
        </div   >
    
</body>
</html>