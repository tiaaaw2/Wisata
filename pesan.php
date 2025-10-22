<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Touro</title>
    <link rel="icon" href="public/img/logo2.png" type="image/x-icon">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&family=Prata&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-body-tertiary">
    <?PHP
    include 'php/konek.php';
    $hariini = date('Y-m-d');
    if(isset($_POST['nama'])){
        $nama = $_POST['nama'];
        $tlp  = $_POST['telp'];
        $tgl  = $_POST['tanggal'];
        $hari = $_POST['hari'];
        $peserta = $_POST['peserta'];

        $totalakomodasi = $_POST['totalakomodasi'];
        $totalbayar = $_POST['totalbayar'];
        
        $akomodasi = $transportasi = $komsumsi = 0;
        if(isset($_POST['akomodasi']))
            $akomodasi = 1000000; 
        if(isset($_POST['transportasi']))
            $transportasi = 1200000; 
        if(isset($_POST['komsumsi']))
            $komsumsi = 500000;    
    }
    ?>

    <!-- {{-- navbar --}} -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">

            <a class="navbar-brand" href="#">
                <img src="public/img/logo.png" alt="Logo" width="38" class="d-inline-block align-text-top">
                <span class="brand-text absolute align-text-top">touro</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav" style="padding-left: 470px">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#paketwisata">Paket Wisata</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#dokumentasi">Dokumentasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pesan.php">Pesan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <section id="pesan" class="pesan mb-4 ">
        <div class="container">
            <div class="text">
                <div class="border-bottom border-warning border-2 d-inline-block mb-3 mt-5">
                    Form pemesanan paket wisata
                </div>
            </div>
        </div>

        <div class="container">
            <form action="#" method="POST" action="" name="formdata">
                <fieldset>
                    <div class="row" style="margin-top: 5px;">
                        <label class="control-label col-md-3" for="nama">Nama Pemesan : </label>
                        <div class="col-md-8">
                            <input type="text" name="nama" id="nama" class="form-control" required />
                        </div>
                    </div>
                    <div class="row" style="margin-top: 5px;">
                        <label class="control-label col-md-3" for="nama">No. telepon : </label>
                        <div class="col-md-8">
                            <input type="number" name="telp" id="telp" class="form-control" required />
                        </div>
                    </div>

                    <div class="row" style="margin-top: 5px;">
                        <label class="control-label col-md-3" for="nama">Tanggal Pesan : </label>
                        <div class="col-md-8">
                            <input type="date" value="<?PHP echo $hariini;?>" min="<?PHP echo $hariini;?>"
                                name="tanggal" id="tanggal" class="form-control" required />
                        </div>
                    </div>
                    <div class="row" style="margin-top: 5px;">
                        <label class="control-label col-md-3" for="nama">Waktu Pelaksanaan dan Jumlah Peserta : </label>
                        <div class="col-md-4">
                            <input type="number" name="hari" id="hari" class="form-control"
                                placeholder="Durasi Waktu Pelaksaan (hari)" required />
                        </div>
                        <div class="col-md-4">
                            <input type="number" name="peserta" id="peserta" class="form-control"
                                placeholder="Jumlah Peserta" required />
                        </div>
                    </div>

                    <!-- CHECK BOX -->
                    <div class="row" style="margin-top: 5px;">
                        <label for="jenis_kelamin" class="control-label col-sm-3">Paket Perjalanan : </label>
                        <div class="col-md-8">
                            <label>
                                <input type="checkbox" class="form-checked" value="akomodasi" name="akomodasi[]"
                                    id='akomodasi'>
                                &nbsp;&nbsp;&nbsp;Akomodasi (1.000.000)&nbsp;&nbsp;&nbsp;
                            </label>

                        </div>
                    </div>
                    <div class="row" style="margin-top: 5px;">
                        <label for="jenis_kelamin" class="control-label col-sm-3"> </label>
                        <div class="col-md-8">
                            <label><input type="checkbox" name="akomodasi[]" value="transportasi"
                                    id="transportasi">&nbsp;&nbsp;&nbsp;Transportasi (1.200.000)&nbsp;&nbsp;</label>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 5px;">
                        <label for="jenis_kelamin" class="control-label col-sm-3"></label>
                        <div class="col-md-8">
                            <label><input type="checkbox" name="akomodasi[]" value="komsumsi"
                                    id="komsumsi">&nbsp;&nbsp;&nbsp;Komsumsi(500.000)</label>
                        </div>
                    </div>
                    <!-- END -->

<!-- Harga Paket -->
<div class="row" style="margin-top: 5px;">
    <label class="control-label col-md-3" for="totalakomodasi">Harga Paket :</label>
    <div class="col-md-8">
        <input type="number" name="totalakomodasi" id="totalakomodasi" 
               class="form-control" placeholder="" required readonly />
    </div>
</div>

<!-- Jumlah Tagihan -->
<div class="row" style="margin-top: 5px;">
    <label class="control-label col-md-3" for="totalbayar">Jumlah Tagihan :</label>
    <div class="col-md-8">
        <input type="number" name="totalbayar" id="totalbayar" 
               class="form-control" required readonly />
    </div>
</div>



                    <div class="row " style="margin-top: 10px;">
                        <div class="col-md-3">
                        </div>
                        <div class="col-md-3">
                            <a href="#" onclick="hitungtotal();" class="hitung btn btn-info btn-md text-light"
                                name="btnHitung" style="width: 100%;">Hitung</a>
                        </div>
                        <div class="col-md-3">
                            <input type="button" onclick="validasiForm();" class="btn btn-success btn-md" value="Daftar"
                                name="btndaftar" style="width: 100%;" />
                        </div>
                        <div class="col-md-2">
                            <input type="reset" class="btn btn-danger btn-md" value="Reset" style="width: 100%;" />
                        </div>
                    </div>
                </fieldset>
            </form>

        </div>
    </section>


    <!-- JAVA SCRIPT -->
    <script type="text/javascript">
        function validasiForm() {
            var nama = document.getElementById('nama').value;
            var telp = document.getElementById('telp').value;
            var tgl = document.getElementById('tanggal').value;
            var hari = document.getElementById('hari').value;
            var peserta = document.getElementById('peserta').value;
            var totalakomodasi = document.getElementById('totalakomodasi').value;
            var totalbayar = document.getElementById('totalbayar').value;

            if (nama.trim() == '')
                alert("Nama Pelanggan Masih Kosong !");
            else if (telp.trim() == '')
                alert("Telepon Pelanggan Masih Kosong !");
            else if (hari.trim() == '' || hari.trim() == '0')
                alert("Jumlah Durasi Hari Masih Kosong !");
            else if (peserta.trim() == '' || peserta.trim() == '0')
                alert("Jumlah Peserta Hari Masih Kosong !");
            else if (totalakomodasi.trim() == '' || totalakomodasi.trim() == '0')
                alert("Total Akomodasi Hari Masih Kosong !");
            else if (totalbayar.trim() == '' || totalbayar.trim() == '0')
                alert("Total Bayar Hari Masih Kosong !");
            else {
                document.forms["formdata"].submit();
            }
        }

        function hitungtotal() {
            var hari = document.getElementById('hari').value;
            var peserta = document.getElementById('peserta').value;
            if (hari != '' || peserta != '') {
                var totalakomodasi = 0;
                if (document.querySelector('#akomodasi').checked)
                    totalakomodasi += 1000000;
                if (document.querySelector('#transportasi').checked)
                    totalakomodasi += 1200000;
                if (document.querySelector('#komsumsi').checked)
                    totalakomodasi += 500000;

                totalbayar = hari * peserta * totalakomodasi;
                document.getElementById('totalakomodasi').value = totalakomodasi;
                document.getElementById('totalbayar').value = totalbayar;
            } else {
                alert("Jumlah Hari dan Peserta Masih Kosong !!");
            }
            //alert(totalakomodasi);           
            //alert ('Hari : ' + hari +", Peserta : " + peserta);
        }
    </script>

</body>

</html>