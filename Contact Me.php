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

    <head>
        <title>Contact Me</title>
    </head>

    <body>
        <h1 style="text-align: center;">Contact Me</h1>
        <div class="container">

            <div class="row">

                <div class="col-md-4 text-center">
                    <div class="contack-address">
                        <i class="fas fa-map-marker-alt fa-2x"></i>
                        <h3>Alamat</h3>
                        <address>Jl.Teratai No.12 Kelapa Gading</address>
                    </div>
                </div>

                <div class="col-md-4 text-center">
                    <div class="contact-phone">
                        <i class="fab fa-whatsapp fa-2x"></i>
                        <h3>Telepon</h3>
                        <p>0819-08464036</p>
                    </div>
                </div>

                <div class="col-md-4 text-center">
                    <div class="contact-email">
                        <i class="fas fa-envelope fa-2x"></i>
                        <h3>Email</h3>
                        <p>donnypramudia04@gmail.com</p>
                    </div>
                </div>
            </div>

            <form method="post" action="">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email"
                        placeholder="Alamat email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPesan">Pesan</label>
                    <input type="text" class="form-control" id="exampleInputPesan" name="pesan"
                        placeholder="Tulis pesan anda...">
                </div>
                <button type="submit" class="btn btn-primary" name="kirim" id="kirim">Kirim</button>
            </form>

        </div>
    </body>

</html>

<?php
    include "koneksi.php";
    if (isset($_POST['kirim'])) {
        $email  = $_REQUEST['email'];
        $pesan  = $_REQUEST['pesan'];
        
        $mysqli  = "INSERT INTO contact_me_project (email, pesan) VALUES ('$email', '$pesan')";
        $result  = mysqli_query($conn, $mysqli);
        
        if ($result) {  
            echo '<script>alert("Terima Kasih telah menghubungi Saya. Mohon tunggu balasan dari saya.")</script>';
        } else {
            echo '<script>alert("Pesan gagal")</script>';
        }
    }
  mysqli_close($conn);
?>

<hr>
<footer style="text-align: center;">
    <p>Copyright &copy; 2020 Donny Pramudia M.</p>
    <p>
        <a href="https://www.instagram.com/donnypm19/" class="fab fa-instagram" id="insta" aria-hidden="true"></a>
        <a href="https://www.facebook.com/donny.p.m.5/" class="fab fa-facebook-square fa-2x" aria-hidden="true"></a>
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