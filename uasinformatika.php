<?php
// kalori start
    function kasenin($kalori,$senin) {
        $hasil = $kalori * $senin;
        return $hasil;
    }
    
    function kaselasa($kalori,$selasa){
        $hasil = $kalori * $selasa;
        return $hasil;
    }

    function karabu($kalori,$rabu){
        $hasil = $kalori * $rabu;
        return $hasil; 
    }

    function kakamis($kalori,$kamis){
        $hasil = $kalori * $kamis;
        return $hasil;
    }

    function kajumat($kalori,$jumat){
        $hasil = $kalori * $jumat;
        return $hasil;
    }

    function kasabtu($kalori,$sabtu){
        $hasil = $kalori * $sabtu;
        return $hasil;
    }

    function kaminggu($kalori,$minggu){
        $hasil = $kalori * $minggu;
        return $hasil;
    }

     //KEBUTUHAN KALORI SETIAP USIA DAN JENIS KELAMIN ORANG BERBEDA. KARENA TIDAK TAHU USIA DAN JENIS KELAMINNYA FU MAKA FU SAYA ANGGAP BISA SEMBUH APABILA FU MAKAN SECARA TERATUR 3 KALI SEHARI SELAMA SEMINGGU YANG BERARTI KEBUTUHAN KALORINYA FU ADALAH 2500*21=52500

    $kasenin = kasenin(2500,3);
    $kaselasa = kaselasa(2500,2);
    $karabu = karabu(2500,2);
    $kakamis = kakamis(2500,3);
    $kajumat = kajumat(2500,3);
    $kasabtu = kasabtu(2500,2);
    $kaminggu = kaminggu(2500,1);

    echo "kalori fu di hari senin  = $kasenin </br>"; 
    echo "kalori fu di hari selasa = $kaselasa </br>";
    echo "kalori fu di hari rabu = $karabu </br>";
    echo "kalori fu di hari kamis  = $kakamis </br>";
    echo "kalori fu di hari jumat = $kajumat </br>";
    echo "kalori fu di hari sabtu = $kasabtu </br>";
    echo "kalori fu di hari minggu = $kaminggu </br>";
    echo "  KALORI FU DALAM SATU MINGGU = ", $kasenin + $kaselasa + $karabu + $kakamis + $kajumat + $kasabtu + $kaminggu;
    $kaseminggu = ($kasenin + $kaselasa + $karabu + $kakamis + $kajumat + $kasabtu + $kaminggu);
// kalori end
    echo "</br>";
    echo "</br>";
// istirahat start
    function tisenin($senin){
        $hasil = $senin;
        return $hasil;
    }
    function tiselasa($selasa){
        $hasil = $selasa;
        return $hasil;
    }
    function tirabu($rabu){
        $hasil = $rabu;
        return $hasil;
    }
    function tikamis($kamis){
        $hasil = $kamis;
        return $hasil;
    }
    function tijumat($jumat){
        $hasil = $jumat;
        return $hasil;
    }
    function tisabtu($sabtu){
        $hasil = $sabtu;
        return $hasil;
    }
    function timinggu($minggu){
        $hasil = $minggu;
        return $hasil;
    }

        //KEBUTUHAN TIDUR MANUSIA UMUMNYA ADALAH 8 JAM PERHARI BERARTI 56 JAM PERMINGGU. JADI SAYA ANGGAP FU BISA SEMBUH APABILA FU TIDUR DENGAN TERATUR SELAMA 8JAM PERHARI.

    $tisenin = tisenin(5);
    $tiselasa = tiselasa(6);
    $tirabu = tirabu(8);
    $tikamis = tikamis(8);
    $tijumat = tijumat(5);
    $tisabtu = tisabtu(6);
    $timinggu = timinggu(4);

    echo "tidur fu di hari senin: $tisenin </br>";
    echo "tidur fu di hari selasa : $tiselasa </br>";
    echo "tidur fu di hari rabu : $tirabu </br>";
    echo "tidur fu di hari kamis : $tikamis </br>";
    echo "tidur fu di hari jumat : $tijumat </br>";
    echo "tidur fu di hari sabtu : $tisabtu </br>";
    echo "tidur fu di hari minggu : $timinggu </br>";
    echo "JUMLAH TIDUR FU DALAM SATU MINGGU = " , $tisenin + $tiselasa + $tirabu + $tikamis +$tijumat + $tisabtu + $timinggu . " JAM";
    $tiseminggu = ($tisenin + $tiselasa + $tirabu + $tikamis + $tijumat + $tisabtu + $timinggu);
    
//istirahat end
echo "</br>";
echo "</br>";
echo "JADI";
echo "</br>";

//perhitungan start

     //KEBUTUHAN KALORI SETIAP USIA DAN JENIS KELAMIN ORANG BERBEDA. KARENA TIDAK TAHU USIA DAN JENIS KELAMINNYA FU MAKA FU SAYA ANGGAP BISA SEMBUH APABILA FU MAKAN SECARA TERATUR 3 KALI SEHARI SELAMA SEMINGGU YANG BERARTI KEBUTUHAN KALORINYA FU ADALAH 2500*21=52500
    
     //KEBUTUHAN TIDUR MANUSIA UMUMNYA ADALAH 8 JAM PERHARI BERARTI 56 JAM PERMINGGU. JADI SAYA ANGGAP FU BISA SEMBUH APABILA FU TIDUR DENGAN TERATUR SELAMA 8JAM PERHARI.
if ($kaseminggu > 52500 && $tiseminggu >= 56 ) {
    echo "FU SUDAH SEMBUH";
}
else {
    echo "FU MASIH BELUM SEMBUH";
}

?>