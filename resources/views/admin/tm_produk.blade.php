<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dashboard Admin | JoFe Bakkery</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-xjhcw0t4e4D67BdVItiPv0c/fV2Q9NC8/U5h5QvOrwHH5fRJcwH8pMGSyjvOzO1qLwm9X6d+kg61vrBZ6i3UOA=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    <!-- Bootstrap -->
    <link href="{{ asset('admin/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('admin/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('admin/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="{{ asset('admin/vendors/google-code-prettify/bin/prettify.min.css') }}" rel="stylesheet">
    <link href="{{ asset('../image/logo/JOfe BAkery-modified.png') }}" rel="shortcut icon">
    <!-- Custom styling plus plugins -->
    <link href="{{ asset('admin/build/css/custom.min.css') }}" rel="stylesheet">
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container"
            style="background-color: #5600c2;
    background-image: linear-gradient(45deg, #5600c2 25%, #2A4FA6 50%, #5600c2 75%);
    background-size: 200% 200%;">
            <div class="col-md-3 left_col"
                style="background-color: #5600c2;
    background-image: linear-gradient(45deg, #5600c2 25%, #2A4FA6 50%, #5600c2 75%);
    background-size: 200% 200%;
    animation: wave 5s ease-in-out infinite;">
                <div class="left_col scroll-view"
                    style="background-color: #5600c2;
    background-image: linear-gradient(45deg, #5600c2 25%, #2A4FA6 50%, #5600c2 75%);
    background-size: 200% 200%;
    animation: wave 5s ease-in-out infinite;">
                    <div class="navbar nav_title"
                        style="background-color: #5600c2;
    background-image: linear-gradient(45deg, #5600c2 25%, #2A4FA6 50%, #5600c2 75%);
    background-size: 200% 200%;
    animation: wave 5s ease-in-out infinite;">
                        <a href="halaman_utama.php" class="site_title">
                            <i class="fa fa-home"></i>
                            <span
                                style="font-family: 'Pacifico', cursive; font-size: 24px; color: white; text-transform: uppercase;">JoFe
                                Bakery</span>
                        </a>
                    </div>

                    <div class="clearfix"></div>

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <h3>Mengelola Informasi</h3>
                            <ul class="nav side-menu">
                                <li><a><i class="fa fa-home"></i> Teks <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="halaman_beranda">Halaman Beranda</a></li>
                                        <li><a href="halaman_about">Halaman Tentang Toko</a></li>
                                    </ul>
                                </li><br>

                                <h3>Mengelola Data</h3>
                                <li><a href="m_produk"><i class="fa fa-edit"></i>Data Produk</a></li>
                                <li><a href="m_customer"><i class="fa fa-user"></i>Data Costumer</a></li><br>
                            </ul>
                        </div>
                    </div>
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small"
                        style="background-color: #5600c2;
    background-image: linear-gradient(45deg, #5600c2 25%, #2A4FA6 50%, #5600c2 75%);
    background-size: 200% 200%;
    animation: wave 5s ease-in-out infinite;">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6">
                                    <span class="text-muted">© 2023 JoFe Bakery</span>
                                </div>
                                <div class="col-md-6 text-md-right">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="https://www.instagram.com/jofe_bakery/" target="_blank"><i
                                                    class="fa fa-instagram"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>
                    <nav class="nav navbar-nav">
                        <ul class=" navbar-right">
                            <li class="nav-item dropdown open" style="padding-right: 100px;">
                                <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true"
                                    id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-user"></i> JoFe
                                </a>
                                <div class="dropdown-menu dropdown-usermenu pull-right"
                                    aria-labelledby="navbarDropdown">
                                    <form action="/logout" method="post">
                                        @csrf
                                        @method('POST')
                                        <button type="submit" class="dropdown-item btn-danger">
                                            <i class="fa fa-sign-out"></i> Keluar
                                        </button>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- /top navigation -->

            <!-- page content -->

            {{-- ADMIN TAMBAH PRODUK --}}
            <div class="right_col" role="main">
                <div class="container" style="margin-bottom:14%;">
                    <h1 class="text-center mb-5"
                        style="font-size: 35px; font-weight: bold; color: #333; text-shadow: 2px 2px #ccc; font-family: 'Helvetica Neue', sans-serif;">
                        Tambah Produk</h1>

                    <form action="/admin/proses/tm_produk" method="POST" enctype="multipart/form-data"
                        onsubmit="return validateForm()">
                        @csrf
                        <div class="form-group"
                            style="border: 1px solid #6C5B7B; padding: 10px; margin-bottom: 20px;">
                            <label for="exampleInputFile">Pilih Gambar</label>
                            <input type="file" id="exampleInputFile" name="image">
                            <p class="help-block">Pilih gambar untuk produk (maks. 2MB, format: JPEG, PNG, atau GIF)
                            </p>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nama_produk">Nama Produk</label>
                                    <input type="text" class="form-control" id="nama_produk"
                                        placeholder="Masukkan Nama Produk" name="nama" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="harga_produk">Harga</label>
                                    <input type="number" class="form-control" id="harga_produk"
                                        placeholder="Contoh : 12000" name="harga" step="1" required>
                                    <p class="help-block">Isi Harga tanpa menggunakan Titik(.) atau Koma (,)</p>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="deskripsi_produk">Deskripsi</label>
                            <textarea name="deskripsi" class="form-control" id="deskripsi_produk" rows="15" required></textarea>
                        </div>
                        <hr>

                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-success btn-block"><i
                                            class="glyphicon glyphicon-plus-sign"></i> Tambah</button>
                                </div>
                                <div class="col-md-6">
                                    <a href="m_produk" class="btn btn-danger btn-block">Batal</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            {{-- ADMIN TAMBAH PRODUK --}}

            <script>
                function validateForm() {
                    var image = document.getElementById("exampleInputFile");
                    if (image.value === "") {
                        alert("Gambar tidak boleh kosong!");
                        return false;
                    }
                    return true;
                }
            </script>


        </div>
    </div>


    <!-- jQuery -->
    <script src="{{ asset('admin/vendors/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('admin/vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ asset('admin/vendors/fastclick/lib/fastclick.js') }}"></script>
    <!-- NProgress -->
    <script src="{{ asset('admin/vendors/nprogress/nprogress.js') }}"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="{{ asset('admin/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/jquery.hotkeys/jquery.hotkeys.js') }}"></script>
    <script src="{{ asset('admin/endors/google-code-prettify/src/prettify.js') }}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{ asset('admin/build/js/custom.min.js') }}"></script>

</body>

</html>
