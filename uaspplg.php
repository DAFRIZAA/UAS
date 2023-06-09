<?php
    $usia = array(
        array("nama" => "bayu" , "usia" => 8),
        array("nama" => "sandy" , "usia" => 15),
        array("nama" => "ikal" , "usia" => 19),
        array("nama" => "zara" , "usia" => 7),
        array("nama" => "faiz" , "usia" => 14),
        array("nama" => "dina" , "usia" => 23),
        array("nama" => "amel" , "usia" => 17),
    ); 

    function tingkat_sekolah($sekolah){
        if ($sekolah >= 7 && $sekolah < 13 ){
            return "SD";
        }
        elseif ($sekolah > 13 && $sekolah < 16) {
            return "SMP";
        }
        elseif ($sekolah > 16 && $sekolah < 20) {
            return"SMA";
        }
        else {
            return "tidak bersekolah / sudah lulus";
        }
    }

    foreach ($usia as $data){
        echo "Nama : ". $data["nama"]. "</br>";
        echo "Usia : ". $data["usia"]. "</br>";
        echo "Bersekolah di  :" . tingkat_sekolah($data["usia"]) . "</br>"."</br>";
    }
?>