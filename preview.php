<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>DATA DIRI</title>
    <style>

    h1{
      font-size: 64px;
      color: white;
      background-color: black;
      padding: 50px 0px 50x 0px;
    }
      </style>
</head>
<body>
  <div class="wrappper">
    <center><h1>DATA DIRI</h1></center>
  </div>
<div class="wrapper">
<table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">Nama Lengkap</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Hoby</th>
      <th scope="col">Asal Sekolah</th>
      <th scope="col">Tanggal Lahir</th>
      <th scope="col">Alamat</th>
      <th scope="col">Agama</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><?php 
            $nama=$_POST['name'];
            echo $nama;?></td>
      <td><?php 
            $nama=$_POST['gender'];
            echo $nama;?></td>
      <td><?php 
            $nama=$_POST['hby'];
            echo $nama;?>
      <td><?php 
            $nama=$_POST['sklh'];
            echo $nama;?>
      <td><?php 
            $nama=$_POST['tgl'];
            echo $nama;?>
      <td><?php 
            $nama=$_POST['almt'];
            echo $nama;?>
      <td><?php 
            $nama=$_POST['agma'];
            echo $nama;?>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>