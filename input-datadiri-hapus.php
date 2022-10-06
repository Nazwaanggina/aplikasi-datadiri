<?php
    include('./inputconfig.php');
    if ($_SESSION["login"] != TRUE) {
        header('location:login.php');
     }
     if ($_SESSION["role"] != "admin") {
        echo "
                <script>
                alert('Akses Tidak Di Berikan,MInimal Admin Dulu Dek!');
                window.location= 'inputdatadiri.php';
                </script>
                ";
     }
    if ( isset($_GET["nis"]) && $_SESSION["role"] == "admin"){
        $nis = $_GET["nis"];
        
        $query = "
            DELETE FROM datadiri
            WHERE nis = '$nis';
            ";

            
        $delete = mysqli_query($mysqli, $query);

            if ($delete){
                echo "
                <script>
                alert('Data Berhasil Dihapus');
                window.location= 'inputdatadiri.php';
                </script>
                ";
            }else{
                echo "
                <script>
                alert('Data Gagal');
                window.location= 'inputdatadiri.php';
                </script>
                ";
       }

    }
    
?>