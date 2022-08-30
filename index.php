<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"/>
    <title>Form Input Data Diri</title>
</head>
<body>
<h3><center>DATA DIRI</center></h3>

<div>
  <form action="preview.php" method="POST">
    <label for="fname">Nama Lengkap</label>
    <input type="text" id="name" name="name" placeholder="Nama Lengkap" required>

    <label for="gender">Jenis Kelamin</label><br><br>
    <input type="radio" id="gender" name="gender" value="pria" required>
    <label for="gender">Pria</label>
    <input type="radio" id="gender" name="gender" value="pria" required>
    <label for="gender">Wanita</label><br><br>

    <label for="date">Tanggal Lahir </label>
    <input type="date" id="tgl" name="tgl" placeholder="Tanggal Lahir" required/><br><br>

    <label for="almt">Alamat</label>
    <input type="text" id="almt" name="almt" placeholder="Alamat" required><br><br>

    <label for="sklh">Asal Sekolah</label>
    <input type="text" id="sklh" name="sklh" placeholder="Asal Sekolah Kamu" required><br><br>

    <label for="almt">Hoby</label>
    <input type="text" id="hby" name="hby" placeholder="Hoby  Kamu" required><br><br>

    <label for="agma">Agama</label>
    <select id="agma" name="agma">
      <option value="Islam">Islam</option>
      <option value="Kristen">Kristen</option>
      <option value="Hindu">Hindu</option>
      <option value="Budha">Budha</option>
      <option value="Konghucu">Konghucu</option>
    </select>
  
    <input type="submit" value="Submit">
  </form>
</div>
</body>
</html>