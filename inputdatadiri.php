
<?php
    include('./inputconfig.php');
    if ($_SESSION["login"] != TRUE) {
        header('location:login.php');
     }
     echo "<div class='container'>";
     echo "Selamat Datang, " . $_SESSION["nama_akun"] . "<br>";
     echo "Anda Sebagai : " . $_SESSION["role"] ;
     echo "-";
     echo "<a class='btn btn-secondary btn-sm' href='logout.php'>Logout Ngab</a>";
     echo "<hr>";
     echo "<a class='btn btn-primary btn-sm' href='input-datadiri-tambah.php'>Tambah Data</a>";
     echo "-";
     echo "<a class='btn btn-warning btn-sm' href='input-datadiri-pdf.php'>Download PDF</a>";
     echo "<hr>";
     $no = 1;
     $tabledata="";
     $data = mysqli_query($mysqli," SELECT * FROM datadiri ");
     while($row = mysqli_fetch_array($data)){
            $tabledata .= "
            <tr>
                <td>".$no."</td>
                <td>".$row["nis"]."</td>
                <td>".$row["namalengkap"]."</td>
                <td>".$row["tanggal_lahir"]."</td>
                <td>".$row["nilai"]."</td>
                <td>
                    <a class='btn btn-success btn-sm' href='input-datadiri-edit.php?nis=".$row["nis"]."'>Edit</a>
                    &nbsp;-&nbsp;
                    <a class='btn btn-danger btn-sm' href='input-datadiri-hapus.php?nis=".$row["nis"]."' 
                              onclick='return confirm(\"Yakin Dek ?\");'>Hapus</a>
                </td>
            <tr>
            ";
            $no++;
     }
     

     echo "
        <table class='table table-dark table-bordered'>
            <tr>
                <th>No</th>
                <th>NIS</th>
                <th>Nama Lengkap</th>
                <th>Tanggal Lahir</th>
                <th>Nilai</th>
                <th>Aksi</th>
            </tr>
            $tabledata
        </table>
     ";
  echo "</div>";
?>