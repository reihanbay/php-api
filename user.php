<?php
include "koneksi.php";

$sql="CREATE TABLE USER(
    id int PRIMARY KEY,
    Nama_Panjang varchar(50),
    username varchar(50),
    kata_sandi varchar(50),
    level text

)";//nggawe tabel

if ($connect->query($sql)===TRUE)
{echo"DADI";}
else{
    echo"radadi";
}
?>