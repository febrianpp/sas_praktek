<?php 
require_once('database.php');
$data=tampildata('barang');
$nomor=0;
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Peminjaman Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <?php 
    // session_start();
    // if($_SESSION['status']!="login"){
    //   header("location:login.php?msg=belum_login");
    // }
    ?> 
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="news.php">News</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Menu
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="peminjaman.php">Peminjaman</a></li>
            <li><a class="dropdown-item" href="#">Admin</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="">Pengembalian</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex" role="logout">
        <a href="logout.php"><button class="btn btn-outline-success" type="submit" name="logout">Logout</button></a>
      </form>
    </div>
  </div>
</nav>
<h1 class="text-center">Pinjam Barang</h1>
<div class="container">
    <hr>
    <div class="col-md-12">
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">id</th>
      <th scope="col">kode_brg</th>
      <th scope="col">nama_brg</th>
      <th scope="col">kategori</th>
      <th scope="col">merk</th>
      <th scope="col">jumlah</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($data as $item) : ?>
        <?php $nomor++; ?>
        <tr>
            <th scope="row"><?php echo "$nomor"; ?></th>
            <td><?php echo $item['id']; ?></td>
            <td><?php echo $item['kode_brg']; ?></td>
            <td><?php echo $item['nama_brg']; ?></td>
            <td><?php echo $item['kategori']; ?></td>
            <td><?php echo $item['merk']; ?></td>
            <td><?php echo $item['jumlah']; ?></td>
            <td><?php echo "<a href='peminjaman2.php?id=$item[id]'>Pinjam</a>" ; ?></td>
            <tr>
    <?php endforeach ?>
  </tbody>
</table>
</div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>