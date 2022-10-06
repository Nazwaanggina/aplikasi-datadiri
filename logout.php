<?php
     include('./inputconfig.php');
     if ($_SESSION["login"] != TRUE) {
         header('location:login.php');
      }

    session_destroy();

    echo "
    <script>
        alert('Tengkyu Ngab :)');
        window.location= 'login.php';
    </script>
    ";

?>