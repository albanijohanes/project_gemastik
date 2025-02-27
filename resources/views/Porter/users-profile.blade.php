<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>TouLEOS</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/logo.png') }}" rel="icon">
    <link href="{{ asset('porterassets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('porterassets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('porterassets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('porterassets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('porterassets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('porterassets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('porterassets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('porterassets/vendor/simple-datatables/style.css') }}" rel="stylesheet">


    <link href="{{ asset('porterassets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('alertassets/css/boostrap.min.css') }}" rel="stylesheet">


</head>

<body>
    <div class="modal fade" role="dialog" tabindex="-1" id="modal-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" style="font-family: Poppins, sans-serif;">Permintaan Pemesanan</h4><button
                        class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p style="font-family: Poppins, sans-serif;">Nama ingin memesan jasa anda sebagai porter</p><label
                        class="form-label" style="font-family: Poppins, sans-serif;">Harga/Menit :&nbsp;</label><input
                        type="number" style="font-family: Poppins, sans-serif;padding-right: 0px;margin-right: -7px;">
                </div>
                <div class="modal-footer"><button class="btn btn-primary" type="button"
                        style="background: #1cda18;">Terima</button><button class="btn btn-light" type="button"
                        data-bs-dismiss="modal"
                        style="--bs-danger: #dc3545;--bs-danger-rgb: 220,53,69;background: #ee2626;color: rgb(255,255,255);">Tolak</button>
                </div>
            </div>
        </div>
    </div>
    @extends('layouts.nbporter')

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Profil</h1>
        </div>

        <section class="section profile">
            <div class="row">
                <div class="col-xl-4">

                    <div class="card">
                        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                            <img src="{{ asset ('porterassets/img/foto.png') }}" alt="Profile" class="rounded-circle">
                            <h2>{{ auth()->user()->nama }}</h2>
                            <h3>{{ auth()->user()->role }}</h3>
                        </div>
                    </div>

                </div>

                <div class="col-xl-8">

                    <div class="card">
                        <div class="card-body pt-3">
                            <div class="tab-content pt-2">

                                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                    <h5 class="card-title" style="font-size:40px;">Profil Anda</h5>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Kode Porter:</div>
                                        <div class="col-lg-9 col-md-8">{{ auth()->user()->porter->porter_id }}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label ">Nama Lengkap</div>
                                        <div class="col-lg-9 col-md-8">{{ auth()->user()->nama }}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label ">Username</div>
                                        <div class="col-lg-9 col-md-8">{{ auth()->user()->username }}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Pekerjaan</div>
                                        <div class="col-lg-9 col-md-8">{{ auth()->user()->role }}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Jenis Kelamin</div>
                                        <div class="col-lg-9 col-md-8">{{ auth()->user()->jk }}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Nomor HP</div>
                                        <div class="col-lg-9 col-md-8">{{ auth()->user()->no_hp }}</div>
                                    </div>

                                </div>
                            </div><!-- End Bordered Tabs -->

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer" style="color: #FFFFFF;">
        <div class="copyright">
            &copy; Copyright <strong><span>TouLEOS</span></strong>. All Rights Reserved
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>


    <script src="{{ asset('porterassets/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('porterassets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('porterassets/vendor/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('porterassets/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('porterassets/vendor/quill/quill.min.js') }}"></script>
    <script src="{{ asset('porterassets/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('porterassets/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('porterassets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('porterassets/js/main.js') }}"></script>
    <script src="{{ asset('alertassets/js/boostrap.min.js') }}"></script>


</body>

</html>
