<?php

//koneksi ke DB 
$class = mysqli_connect('localhost', 'root', '', 'cobaweb');

//Query isi tabel mahasiswa
$result = mysqli_query($class, "SELECT * FROM mahasiswa");

$kosongan = [];
// ubah data ke array
while ($row = mysqli_fetch_assoc($result)) {
  echo $kosongan[] = $row;
}
$mahasiswa = $kosongan;
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

  <title>Hello, world!</title>
</head>

<body>
  <h3>Data Anggota Robotika</h3>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  <table class="table table-sm ">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">Nim</th>
        <th scope="col">Email</th>
        <th scope="col">Jurusan</th>
        <th scope="col">Aksi</th>
        <th scope="col">Gambar</th>
      </tr>
      <?php
      foreach ($mahasiswa as $student) : ?>


    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td><?= $student['nama']; ?></td>
        <td><?= $student['nim']; ?></td>
        <td><?= $student['email']; ?></td>
        <td><?= $student['jurusan']; ?></td>
        <td>
          <a href="">ubah</a> | <a href="">hapus
        </td>
        <td><img src="img/<?= $student['gambar']; ?>" width="60" </td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td><?= $student['nama']; ?></td>
        <td><?= $student['nim']; ?></td>
        <td><?= $student['email']; ?></td>
        <td><?= $student['jurusan']; ?></td>
        <td>
          <a href="">ubah</a> | <a href="">hapus
        </td>
        <td><img src="img/<?= $student['gambar']; ?>" width="60" </td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td><?= $student['nama']; ?></td>
        <td><?= $student['nim']; ?></td>
        <td><?= $student['email']; ?></td>
        <td><?= $student['jurusan']; ?></td>
        <td>
          <a href="">ubah</a> | <a href="">hapus
        </td>
        <td><img src="img/<?= $student['gambar']; ?>" width="60" </td>
      </tr>

      </tr>
      </tr>
    <?php endforeach; ?>
    </tbody>

  </table>
</body>

</html>