<?php
        include('./view.php');
          session_start();
        
     $mysqli = new mysqli("localhost","root","","siswa_rpl2");
     if ($mysqli -> connect_errno) {
             echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
             exit();
     }
?>