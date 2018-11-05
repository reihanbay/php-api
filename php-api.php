<?php
 include "koneksi.php";
 $sql = "CREATE DATABASE PHPAPI";

 if($connect->query($sql)=== TRUE)
 {echo "DATABASE berhasil dibuat";}
?>
