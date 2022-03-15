<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Project HDS</title>
</head>

<body>


    <nav class="navbar-expand-lg navbar navbar-dark bg-primary">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="About Me.php">About Me</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Contact Me.php">Contact Me</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <br>

    <header style="text-align: center;">
        <img src="img/Donny.png" width="200" height="200" style="border-radius: 50%;" />
        <h1>Donny Pramudia</h1>
        <p>(Web Developer)</p>
    </header>

    <hr />

    <div class="container" style="text-align: center;">
        <h1>About Me</h1>
        <p>
            Hi, saya adalah web developer yang berdomisisli di Jakarta.
            Saat ini sedang berkuliah di Perbanas Institue Jurusan Teknik Informatika Angkatan 2018.
        </p>
        <p>
            Saya memang masih baru dalam web development, karena itu
            saya tidak akan pernah berhenti belajar.
        </p>
        <p>
            Saat ini saya menguasai bahasa pemrograman HTML, PHP, CSS, JavaScript, React Js, Next Js, SCSS. Saya juga mampu melakukan design sederhana menggunakan figma
        </p>
        <p>
           Saya pernah magang di PT Medika Komunika Teknologi (Kalbe Group) sebagai Front End Developer Content Management System. Saya magang melalui program Magang Bersertifikat Kampus Merdeka selama 6 bulan.
        </p>

        <hr>
        <h4>
            Berikut Ini Merupakan Beberapa Web Yang telah saya buat.
        </h4>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#kasir"
            data-whatever="@mdo">Kasir Cuci Mobil</button>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ppa" data-whatever="@fat">RA
            Travel</button>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#shop"
            data-whatever="@getbootstrap">Central Asia Casing</button>

        <div class="modal fade" id="kasir" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Kasir Cuci Mobil</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="card-group">
                            <div class="card">
                                <img src="img/kasir/1.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Tampilan Beranda</h5>
                                    <p class="card-text">Ini merupakan tampilan Beranda dari website kasir.</p>
                                </div>
                            </div>
                            <div class="card">
                                <img src="img/kasir/2.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Tampilan Transaksi</h5>
                                    <p class="card-text">Ini merupakan tampilan Transaksi dari website kasir.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card-group">
                            <div class="card">
                                <img src="img/kasir/3.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Tampilan Laporan</h5>
                                    <p class="card-text">Ini merupakan tampilan Laporan dari website kasir.</p>
                                </div>
                            </div>
                            <div class="card">
                                <img src="img/kasir/4.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Tampilan Data Master</h5>
                                    <p class="card-text">Ini merupakan tampilan Data Master dari website kasir.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="ppa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel" >RA Travel</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="card-group">
                            <div class="card">
                                <img src="img/ppa/1.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Tampilan Beranda</h5>
                                    <p class="card-text">Ini merupakan tampilan Beranda dari website RA Travel.</p>
                                </div>
                            </div>
                            <div class="card">
                                <img src="img/ppa/2.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Tampilan Jenis Kendaraan</h5>
                                    <p class="card-text">Ini merupakan tampilan Jenis Kendaraan dari website RA Travel.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="card-group">
                            <div class="card">
                                <img src="img/ppa/3.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Tampilan Pemesanan dan Galeri Foto</h5>
                                    <p class="card-text">Ini merupakan tampilan Pemesanan dan Galeri Foto dari website
                                        RA Travel.</p>
                                </div>
                            </div>
                            <div class="card">
                                <img src="img/ppa/4.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Tampilan Form Pemesanan</h5>
                                    <p class="card-text">Ini merupakan tampilan Form Pemesanan dari website RA Travel.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="shop" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Central Asia Casing</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="card-group">
                            <div class="card">
                                <img src="img/shop/1.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Tampilan Beranda</h5>
                                    <p class="card-text">Ini merupakan tampilan Beranda dari website Central Asia
                                        Casing.</p>
                                </div>
                            </div>
                            <div class="card">
                                <img src="img/shop/2.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Tampilan Produk</h5>
                                    <p class="card-text">Ini merupakan tampilan Produk dari website Central Asia Casing.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="card-group">
                            <div class="card">
                                <img src="img/shop/3.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Tampilan Shopping Cart atau keranjang</h5>
                                    <p class="card-text">Ini merupakan tampilan Shopping Cart atau keranjang dari
                                        website Central Asia Casing.</p>
                                </div>
                            </div>
                            <div class="card">
                                <img src="img/shop/4.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Tampilan My Account atau Akun Saya</h5>
                                    <p class="card-text">Ini merupakan tampilan My Account atau Akun Saya dari website
                                        Central Asia Casing.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>


        <hr>
        <footer style="text-align: center;">
            <p>Copyright &copy; 2020 Donny Pramudia M.</p>
            <p>
                <a href="https://www.instagram.com/donnypm19/" class="fab fa-instagram" id="insta"
                    aria-hidden="true"></a>
                <a href="https://www.facebook.com/donny.p.m.5/" class="fab fa-facebook-square fa-2x"
                    aria-hidden="true"></a>
            </p>
        </footer>

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
        </script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
            integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">

        <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>