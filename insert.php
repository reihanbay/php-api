<?php
    include "koneksi.php";
    $sql ="INSERT INTO USER (id,Nama_Panjang,username,kata_sandi,level
    )
    VALUES
    ('32','Reihan_Bayzaky_Bagus_Mahdy','Reihan','sontoloyo','ADMIN'),
    ('33', 'Sekar_Sari_Farida', 'Sekar', 'sontoloyo', 'USER'), 
    ('34', 'Tegar_Faiqul_Hammam_Basuki', 'Tegar', 'sontoloyo2', 'USER'),
    ('35', 'Timotius Muliawan', 'TimTam', 'sontoloyo3', 'GUEST'),
    ('36', 'Wijil_Puspitajati', 'WijiSalak', 'sontoloyo4', 'GUEST');
    ";
    if($connect->query($sql)==TRUE)
        {echo"DADI";}
    else{
        echo"radadi";
    }
?>
