<?php
//koneksi
session_start();
include ("koneksi.php");

 ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>SISTEM PENDUKUNG KEPUTUSAN PEMILIHAN BIJI KOPI TERBAIK</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
         <link href="tampilan/css/bootstrap.min.css" rel="stylesheet">

    <!--icon-->
    <link href="tampilan/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="index.php">Home</a><button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu <i class="fas fa-bars"></i></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="kriteria.php">Kriteria</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="alternatif.php">Alternatif</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="nilmat.php">Nilai Matriks</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="hastop.php">Hasil Topsis</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    <div class="container">

      <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                    Alternatif
                </div>

                <ul class="nav nav-tabs">
                    <li class="active">
                      <a href="alternatif.php">Tabel Alternatif</a>
                    </li>
                    <li>
                      <a href="alternatiftambah.php">Tambah Alternatif</a>
                    </li>
                </ul>

                <div class="panel-body">
                    <!-- Tab panes -->
                    <div class="tab-content">
                      <div class="">
                        <!--tabel alternatif-->
                        <table class="table table-striped table-bordered table-hover">
                          <thead >
                            <tr>
                              <th>ID Alternatif</th>
                              <th>Nama Alternatif</th>
                              <th colspan="2">Aksi</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                            $sql = $koneksi->query('SELECT * FROM tab_alternatif');
                            while ($row = $sql->fetch_array()) {
                            ?>
                            <tr>
                              <td><?php echo $row[0] ?></td>
                              <td><?php echo $row[1] ?></td>
                              <td align="center"><a href="editalternatif.php?id_alternatif=<?php echo $row['id_alternatif'] ?>"><i class="fa fa-edit fa-fw"></i> </td>
                              <td align="center"><a href="hapusalternatif.php?id_alternatif=<?php echo $row['id_alternatif'] ?>"><i class="fa fa-trash fa-fw"></i> </td>
                            </tr>

                            <?php } ?>
                          </tbody>
                        </table>
                        <!--tabel alternatif-->
                      </div>
                    </div>
                </div>
                <!--panel body-->
            </div>
        </div>
      </div>

    </div>

      <!--plugin-->
    <script src="tampilan/js/bootstrap.min.js">
    </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>

  </body>
</html>
