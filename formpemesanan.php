<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wisata Palembang</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" integrity="sha512-+EoPw+Fiwh6eSeRK7zwIKG2MA8i3rV/DGa3tdttQGgWyatG/SkncT53KHQaS5Jh9MNOT3dmFL0FjTY08And/Cw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .video-area {
        padding: 200px 0 60px 0;
        position: relative;
        background: url(./img/pindang.jpeg) no-repeat center center/cover;
        }

        .video-area .overlay-bg {
            opacity: .9;
        }

        .video-area .video-content {
            text-align: center;
            position: relative;
            z-index: 2;
        }

        .video-area .video-content a {
            display: inline-block;
            margin-bottom: 20px;
        }

        .video-area .video-content h3 {
            font-weight: 600;
            font-size: 18px;
            margin-bottom: 10px;
            letter-spacing: 2px;
        }

        .video-area .video-content h4 {
            font-weight: 300;
            font-size: 14px;
        }

        .video-area .video-content .video-desc {
            margin-top: 120px;
            text-align: right;
            align-self: flex-end;
        }

        .footer-area {
            padding-top: 100px;
            background-color: #222222;
        }
        .section-gap {
            padding: 120px 0;
        }


        .footer-social a {
            padding-right: 25px;
            -webkit-transition: all 0.3s ease 0s;
            -moz-transition: all 0.3s ease 0s;
            -o-transition: all 0.3s ease 0s;
            transition: all 0.3s ease 0s;
        }

        .footer-social i {
            color: #cccccc;
            -webkit-transition: all 0.3s ease 0s;
            -moz-transition: all 0.3s ease 0s;
            -o-transition: all 0.3s ease 0s;
            transition: all 0.3s ease 0s;
        }

        @media (max-width: 991px) {
            .footer-social {
                text-align: left;
            }
        }
    </style>
</head>
<body>
    <!-- start banner Area -->
    <section class="banner-area" id="home">
        <!-- Start Header Area -->
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    Wisata Palembang
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
    
                <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarNav">
                    <ul class="navbar-nav">
                        <li  class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                        <li  class="nav-item"><a class="nav-link" href="#paketwisata">Paket Wisata</a></li>
    
                        <!-- Dropdown -->
                        <li class="nav-item dropdown">
                            <a class="nav-link  dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            Pemesanan
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item active" href="formpemesanan.php">Form Pemesanan</a>
                                <a class="dropdown-item" href="daftarpemesanan.php">Daftar Pemesanan</a>
                            </div>
                        </li>
                    </ul>
                </div>	
            </div>
            
        </nav>
        <!-- End Header Area -->				
    </section>


    <div class="album py-5 bg-light" id="paketwisata">
        <div class="container-fluid">
            <div class="title text-center mt-3">
                <h1 class="mb-10">Form Pemesanan Paket Wisata</h1>
                <p>Pilih paket wisata yang anda inginkan</p>
            </div>

            <div class="row">
                <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                    <h5 class="card-title">Form Pemesanan Paket Wisata</h5>
                    </div>
                    <div class="card-body">
                    <form>
                        <div class="form-group">
                        <label for="namaPemesan">Nama Pemesan</label>
                        <input type="text" class="form-control" id="namaPemesan" placeholder="Masukkan nama pemesan">
                        </div>
                        <div class="form-group">
                        <label for="noHpTelp">No HP / Telp</label>
                        <input type="text" class="form-control" id="noHpTelp" placeholder="Masukkan nomor HP / telp">
                        </div>
                        <div class="form-group">
                        <label for="tanggalPemesanan">Tanggal Pemesanan (dd/mm/yyyy)</label>
                        <input type="date" class="form-control" id="tanggalPemesanan" placeholder="Masukkan tanggal pemesanan">
                        </div>
                        <div class="form-group">
                        <label for="durasiPerjalanan">Durasi Perjalanan (hari)</label>
                        <input type="number" class="form-control" id="durasiPerjalanan" placeholder="Masukkan durasi perjalanan">
                        </div>
                        <div class="form-group">
                        <label for="jumlahPeserta">Jumlah Peserta</label>
                        <input type="number" class="form-control" id="jumlahPeserta" placeholder="Masukkan jumlah peserta">
                        </div>
                        
                        <div class="form-group">
                        <label for="paketWisata">Paket Wisata</label>
                        <select class="form-control" id="paketWisata">
                            <option>Paket Tour Ke Bali ...</option>
                            <option>4 HARI 3 MALAM ... CUMA 1.9 JUTA</option>
                            <!-- Add other package options here -->
                        </select>
                        </div>

                        <div class="form-group">
                            <label for="jumlahPeserta">Jumlah Peserta</label>
                            <input type="number" class="form-control" id="jumlahPeserta" placeholder="Masukkan jumlah peserta">
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button type="button" class="btn btn-secondary">Reset</button>
                    </form>
                    </div>
                </div>
                </div>
            </div>
        </div>    
    </div>    

    <footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-5 col-md-6 col-sm-6">
							<div class="text-white">
								<h6>Tentang Wisata Palembang</h6>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.
								</p>
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                <p class="footer-text">Copyright ©<script>document.write(new Date().getFullYear());</script> All rights reserved | Made with <i class="fa fa-heart-o" aria-hidden="true"></i> powered by <a href="https://getbootstrap.com" target="_blank">Bootstrap</a></p>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</div>
						</div>
						<div class="col-lg-5  col-md-6 col-sm-6">
							
						</div>						
						<div class="col-lg-2 col-md-6 col-sm-6 social-widget">
							<div class="single-footer-widget">
								<h6>Follow Us</h6>
								<div class="footer-social d-flex align-items-center">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-dribbble"></i></a>
									<a href="#"><i class="fa fa-behance"></i></a>
								</div>
							</div>
						</div>							
					</div>
				</div>
			</footer>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js" integrity="sha512-IsNh5E3eYy3tr/JiX2Yx4vsCujtkhwl7SLqgnwLNgf04Hrt9BT9SXlLlZlWx+OK4ndzAoALhsMNcCmkggjZB1w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function(){
            "use strict";

            $('.play-btn').magnificPopup({
                type: 'iframe',
                mainClass: 'mfp-fade',
                removalDelay: 160,
                preloader: false,
                fixedContentPos: false
            });

        });
    </script>
</html>