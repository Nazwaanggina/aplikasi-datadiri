<div class="container">
<h1>Tambah Data</h1>
<form action="input-datadiri-tambah.php" method="POST"> 
    <label for="nis">Nomor Induk Siswa :</label><br>
    <input class="form-control" type="number" name="nis" placeholder="Ex. 12003102"/><br>

    <label for="nama">Nama Lengkap :</label><br>
    <input class="form-control" type="text" name="nama" placeholder="Ex. Farel Vandin"/><br>

    <label for="tanggal_lahir">Tanggal Lahir :</label><br>
    <input class="form-control" type="date" name="tanggal_lahir" /> <br>

    <label for="nilai" >Nilai:</label><br>
    <input class="form-control" type="number" name= "nilai" placeholder="Ex. 80.56"/><br><br>

    <input class='btn btn-success btn-sm' type="submit" name= "simpan" value="Simpan Data"/>
    <a class='btn btn-secondary btn-sm' href="inputdatadiri.php"> Kembali </a>
</form>

<?php
 include('./inputconfig.php');
 if ($_SESSION["login"] != TRUE) {
     header('location:login.php');
  }

  if ($_SESSION["role"] != "admin") {
    echo "
            <script>
            alert('Akses Tidak Di Berikan,MInimal Admin Dulu Ngab');
            window.location= 'inputdatadiri.php';
            </script>
            ";
 }
  


    if( isset($_POST["simpan"])){
        $nis= $_POST["nis"];
        $namalengkap= $_POST["nama"];
        $tanggal_lahir= $_POST["tanggal_lahir"];
        $nilai= $_POST["nilai"];

        echo $nis . "<br>";
        echo $namalengkap . "<br>";
        echo $tanggal_lahir . "<br>";
        echo $nilai . "<br>";

        //CREATE - Menambahkan Data ke Database
        $query = "
        INSERT INTO datadiri VALUES
        ('$nis', '$namalengkap', '$tanggal_lahir', '$nilai');
        ";

      
        $insert = mysqli_query($mysqli, $query);

        if ($insert){
            echo "
            <script>
            alert('Data Berhasil Ditambahkan');
            window.location= 'inputdatadiri.php';
            </script>
            ";
      }
    }
?>