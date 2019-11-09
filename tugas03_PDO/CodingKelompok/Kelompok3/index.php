<?php 
  
  include "koneksi.php";

 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>CRUD Kel 3 & 4</title>
  </head>
  <body>
    <nav class="navbar navbar-light bg-light justify-content-between">
      <a class="navbar-brand ml-2">Selamat Datang Di CRUD USER Kelompok 3 & Kelompok 4</a>
      <form class="form-inline">
        <a class="mr-2"><?php echo date('d-m-Y'); ?></a>
      </form>
    </nav>
    <h2 class="text-center mt-5">READ USER</h2>
    <div class="col-lg-10 ml-5">
      <a href="form_tambah.php" class="btn btn-primary">Tambah</a>
    </div>
    <div class="row justify-content-center">
      <div class="col-lg-11 mb-5 mt-3">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>TTL</th>
              <th>Alamat</th>
              <th>Email</th>
              <th>Foto</th>
              <th>Opsi</th>
            </tr>
          </thead>
          
          <?php 

            $query = "SELECT * FROM user";
            $data = $db->prepare($query);
            $data->execute();

            $no = 1;
            while($tampil = $data->fetch(PDO::FETCH_LAZY)){

           ?>

          <tbody>
            <tr>
              <td><?php echo $no++; ?></td>
              <td><?php echo $tampil->nama; ?></td>
              <td><?php echo $tampil->ttl; ?></td>
              <td><?php echo $tampil->alamat; ?></td>
              <td><?php echo $tampil->email; ?></td>
              <td><img src="images/<?php echo $tampil->foto; ?>" width="27" height="27" alt=""></td>
              <td>
                <a href="form-ubah.php" class="btn btn-success mr-2">Ubah</a>
                <a href="hapus.php" class="btn btn-danger">Hapus</a>
              </td>
            </tr>
          </tbody>
        <?php } ?>
        </table>
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>