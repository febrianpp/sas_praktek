<?php
    include "database.php";
    $data=Editdata("barang", $_GET['id']);

    if(isset($_POST['edit'])) {
        mysqli_query($koneksi, "update barang set
        Kode_brg = '$_POST[kode_brg]',
        Nama_brg = '$_POST[nama_brg]',
        Kategori = '$_POST[kategori]',
        Merk = '$_POST[merk]',
        Jumlah = '$_POST[jumlah]'
        where id = '$_GET[id]'");

        header("location:barang.php");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Edit Barang</title>

    <!-- Custom fonts for this template-->
    <link href="resource/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="resource/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <div id="wrapper">
        
        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">

                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <div class=" container justify-content-end">
                        <a href="logout.php"><button type="button" class="btn btn-outline-dark">Log Out</button></a>
                    </div>
                </nav>

        <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800">Edit Data Barang</h1>
            <?php while($barang = mysqli_fetch_array($data)): ?>
            <form class="user" method="POST">
                <input type="hidden" name="id" value="<?php echo $barang['id']; ?>">
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" placeholder="Kode Brg" name="kode_barang" value="<?php echo $barang['Kode_brg']; ?>">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" placeholder="Nama Brg" name="nama_barang" value="<?php echo $barang['Nama_brg']; ?>">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" placeholder="Kategori" name="kategori" value="<?php echo $barang['Kategori']; ?>">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" placeholder="Merk" name="merk" value="<?php echo $barang['Merk']; ?>">
                </div>
                <div class="form-group">
                    <input type="number" class="form-control form-control-user" placeholder="Jumlah" name="jumlah" value="<?php echo $barang['Jumlah']; ?>">
                </div>
                <input type="submit" name="edit" class="btn btn-dark btn-user btn-block">
            </form>
            <?php endwhile; ?>
        </div>

        </div>

    </div>

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


    <!-- Bootstrap core JavaScript-->
    <script src="resource/vendor/jquery/jquery.min.js"></script>
    <script src="resource/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="resource/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="resource/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="resource/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="resource/js/demo/chart-area-demo.js"></script>
    <script src="resource/js/demo/chart-pie-demo.js"></script>

</body>

</html>