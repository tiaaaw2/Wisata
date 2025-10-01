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

    <!-- {{-- navbar --}} -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">

            <a class="navbar-brand" href="#">
                <img src="public/img/logo.png" alt="Logo" width="38" class="d-inline-block align-text-top">
                <span class="brand-text absolute align-text-top">touro</span>
                <!-- Menghapus class "absolute" dan "align-text-top" -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav" style="padding-left: 470px">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#paketwisata">Paket Wisata</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#dokumentasi">Dokumentasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pesan.php">Pesan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="home" class="container-fluid banner   d-flex justify-content-center align-items-center pb-3">
        <div class="container-text text-center text-light">

            <h3>Jangan di rumah aja <br>
                Indoneisa itu indah.
            </h3>
            <h2>Ayo liburan bersama touro</h2>

            <a href="#paketwisata">
                <button class="btn btn-warning text-light rounded-5 mt-3 " type="button"> lihat paket wisata </button>
            </a>
        </div>
    </div>
<!-- 
    {{-- paketwisata --}} -->
    <section id="paketwisata" class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h4>mau wisata ke mana hari ini?</h4>
                </div>
            </div>

            <div class="row">
                <!-- {{-- vard 1-3 --}} -->
                <div class="col-md-12 d-flex justify-content-between">
                    <div class="card" style="width: 18rem;">
                        <img src="public/img/jogja.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title mb-3">Wisata Jogja</h5>
                            <p class="harga">Rp. 830.000</p>
                            <p class="card-text">Puncak Becici, Bukit Mojo, Malioboro, Taman Pelangi.</p>
                        </div>
                    </div>

                    <div class="card" style="width: 18rem;">
                        <img src="public/img/bali.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title mb-3">Wisata Bali</h5>
                            <p class="harga">Rp. 1.085.000</p>
                            <p class="card-text">Tanjung Benoa, Pandawa Beach,Garuda Wisnu Kencana,Uluwatu,Dll</p>
                        </div>
                    </div>

                    <div class="card" style="width: 18rem;">
                        <img src="public/img/bromo.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title mb-3">Wisata Bromo</h5>
                            <p class="harga">Rp. 960.000</p>
                            <p class="card-text">Jeep Bromo,Bukit Penanjakan, Kawah Bromo, Pasir Berbisik,Bukit
                                Teletubies</p>
                        </div>
                    </div>
                </div>
<!-- 
                {{-- card 4-6 --}} -->
                <div class="col-md-12 d-flex mt-2 mb-5 justify-content-between">
                    <div class="card" style="width: 18rem;">
                        <img src="public/img/lombok.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title mb-3">Wisata Lombok</h5>
                            <p class="harga">Rp. 1.500.000</p>
                            <p class="card-text">Kampung Tenun Sukarara, Rumah Adat Ende, Pantai Lombok,Bukit Merese</p>
                        </div>
                    </div>

                    <div class="card" style="width: 18rem;">
                        <img src="public/img/solo.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title mb-3">Wisata Solo</h5>
                            <p class="harga">Rp. 450.000</p>
                            <p class="card-text">Sukuh Temple, Sate Lawu,Bukit Sekipan,Mojosemi Park,Banyumili Resto</p>
                        </div>
                    </div>

                    <div class="card" style="width: 18rem;">
                        <img src="public/img/surabaya.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title mb-3">Wisata Surabaya</h5>
                            <p class="harga">Rp. 880.000</p>
                            <p class="card-text">Batu Night Spectacular, Jatim Park 2, Pantai Parangtritis,Candi
                                Borobudur,Malioboro</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- {{-- dokumentasi --}} -->
    <section id="dokumentasi" class="dokumentasi mb-4">
        <div class="container">
            <div class="text-center">
                <h4 class="">Dokumentasi</h4>
                <p>Dokumentasi para pengunjung wisata</p>
            </div>
            

            <div class="row ">
                <div class="col-md-4 mr-0 px-md-1">
                    <img src="public/img/d1.png" class="card-img-top" alt="...">
                </div>
                <div class="col-md-4 px-md-1">
                    <img src="public/img/d2.png" class="card-img-top" alt="...">
                </div>
                <div class="col-md-4 px-md-1 mb-2">
                    <img src="public/img/d3.png" class="card-img-top" alt="...">
                </div>
                <div class="col-md-4 px-md-1 mb-2">
                    <img src="public/img/dok4.png" class="card-img-top" alt="...">
                </div>
                <div class="col-md-4 px-md-1 mb-2">
                    <img src="public/img/d5.png" class="card-img-top" alt="...">
                </div>
                <div class="embed-responsive embed-responsive-16by9 col-md-4 px-md-1 mb-2">
                    <iframe class="embed-responsive-item ml-0" width="310" height="200" src="https://www.youtube.com/embed/4sdyBDSrzN4?si=xpv3f_iFEfYRyOfP" title="YouTube video player" 
                    frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div> 
            </div>
        </div>
    </section>

   
    <script src="public/js/javascript.js">
    

    </script>

 
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script> -->
</body>

</html>
