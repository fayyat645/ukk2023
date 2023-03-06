<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if (empty($_SESSION['username'])) {
    @header('location:../modul-auth/index.php');
} else {
    $nik = $_SESSION['nik'];
    $nama = $_SESSION['nama'];
    $username = $_SESSION['username'];
    $telp = $_SESSION['telp'];
}
?>
<!-- header -->
<?php include('../assets/header.php') ?>
 

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
       
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php include('../assets/menu.php'); ?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Main content -->
            <div class="main-panel">
                <div class="row">
                    <div class="col-12">
                        <div class="alert alert-success alert-dismissable">Selamat Datang <strong><?= $_SESSION['username'] ?></strong> anda Login Sebagai <strong><?= $_SESSION['level'] ?></strong> <a class="close" href="" data-dismiss="alert">x</a></div>
                        <div class="card">
                            <div class="card-header btn btn-danger">
                                <div>
                                  <i class="fa fa-user-circle"></i><strong>Profil</strong>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="card col-md-auto">
                                    <div class="card-header">Nik : <?= $nik ?></div>
                                    <div class="card-header">Nama : <?= $nama ?></div>
                                    <div class="card-header">Username : <?= $username ?></div>
                                    <div class="card-header">Tlp : <?= $telp ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
       

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    <?php include('../assets/footer.php') ?>

</body>

</html>