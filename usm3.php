<?php
include "login_syn.php";
include "functions.php";
session_start();
  if(!isset($_SESSION["login"])){
      header("location: halamanawal.php");
      exit;
  }
$result = mysqli_query($connect,"SELECT * FROM data");
$id_user = $_SESSION["id_user"];
$username = $_SESSION["username"];

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/logo_iadel.png">
    <title>Home</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
     <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <link rel="icon" href="img/logo_iadel.png">
        <title>Home</title>
        
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css3/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css3/fontAwesome.css">
        
        <link rel="stylesheet" href="css3/owl-carousel.css">
        <link rel="stylesheet" href="css3/style.css">

        <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class=""></i>
                </div>
                <div class="sidebar-brand-text mx-3">Website Alumni Del<sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
           

          

            <!-- Nav Item - Charts -->
            <li class="nav-item active">
                <a class="nav-link" href="home.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Home</span></a>
            </li>
            

            <!-- Nav Item - Tables -->
            <li class="nav-item active">
                <a class="nav-link" href="profile2.php">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Profile</span></a>
            </li>

             <li class="nav-item active">
                <a class="nav-link" href="alumni2.php">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Data Alumni</span></a>
            </li>

             <li class="nav-item active">
                <a class="nav-link" href="loker2.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Lowongan Pekerjaan</span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="about.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>About</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                   

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                      
                        <?php 
                        $query = $connect->query("SELECT * From user1 where id_user = '$id_user' ");
                        $i=1;
                        foreach ($query as $key => $value) {
                        ?>
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $value['Nama']; ?></span>
                                <img class="img-profile rounded-circle"
                                    src="img/<?= $value['gambar']; ?>">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                               
                                 <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="logout.php" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                        <?php }  ?>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800"></h1>

     <section class="banner banner-secondary" id="top" style="background-image: url(img/4.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="banner-caption">
                        <div class="line-dec"></div>
                        <h2>Informasi PMB Jalur Ujian Saring Masuk 3 (USM 3) 2021 & Jadwal Pelaksanaan Kegiatan</h2>

                        <h4> <i class="fa fa-calendar"></i> 11/05/2021 - 24/06/2021   &nbsp;&nbsp;&nbsp;&nbsp; 
                             <div class="blue-button">
                            <a href="home.php">Home</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <main>
        <section class="featured-places">
            <div class="container">
                <div class="form-group">
                    <center>
                    <img src="img/usm 3.png" class="img-responsive" alt="" width="500" height="700">
                    </center>
                </div>

                <br>

                <h2>Ujian Saring Masuk 3 (USM 3) 2021</h2>

                    <p>Institut Teknologi Del yang berada di tepian Danau Toba sedang membuka Penerimaan Mahasiswa Baru TA 2021/2022. Jalur Penerimaan yang sedang buka adalah Jalur Ujian Saring Masuk (USM 3). IT Del juga memberikan biaya pendaftaran secara GRATIS bagi bakal calon mahasiswa IT Del.</p>

                    <p>Ujian Saring Masuk (USM) adalah salah satu jalur penerimaan mahasiswa baru yang diselenggarakan oleh Institut Teknologi Del (IT Del), melalui tes akademik dan psikotes. Pendaftaran sebagai peserta Seleksi Program USM IT Del dilakukan secara daring dan luring dengan membuka laman <a href ="http://spmbapp.del.ac.id">http://spmbapp.del.ac.id</a> untuk pendaftaran secara daring atau mendaftar di kampus IT Del, Laguboti untuk pendaftaran secara luring setiap hari Kamis-Jumat Pukul 13.00-17.00 wib dengan mengisi/melengkapi formulir isian yang tersedia sesuai dengan petunjuk.</p>
                    
                    <p>Jadwal Pelaksanaan Ujian Saringan Masuk – 3 Tahun Akademik 2021/2022</p>
                    <br>
                    <p>Pendaftaran : 11 Mei – 24 Juni 2021</p>
                    <p>Simulasi Tes Akademik (Matematika-B.Inggris-TPA) : 25 Juni 2021</p>
                    <p>Tes Akademik (Matematika-B.Inggris-TPA) : 26 Juni 2021</p>
                    <p>Pengumuman hasil tes akademik : 02 Juli 2021</p>
                    <p>Tes Psikotes : 10 Juli 2021</p>
                    <p>Pengumuman kelulusan akhir : 16 Juli 2021</p>
                    <p>Daftar Ulang : 22-23 Juli 2021</p>
                    <p>Pendaftaran secara online melalui website: spmb.del.ac.id</p>
                    <p>Untuk informasi lebih lanjut dapat menghubungi: Panitia PMB IT Del (082277403596).</p>
                    <br>
                    <p>Yuk segera daftarkan diri kalian di Institut Teknologi Del…!!</p>
                    
                    <p>Untuk mengetahui informasi lebih lanjut seputaran IT Del, follow media sosial IT Del :</p>
                    <p>Instagram : @it.del</p>
                    <p>Facebook & YouTube : Institut Teknologi Del</p>
                    <p>Website : <a href = "https://del.ac.id">www.del.ac.id</a> dan <a href = "http://spmb.del.ac.id">spmb.del.ac.id</a></p>

                   

                  
    </div><!--/row-->

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
          
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Keluar</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Apakah anda yakin ingin keluar?</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                    <a class="btn btn-primary" href="logout.php">Keluar</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
