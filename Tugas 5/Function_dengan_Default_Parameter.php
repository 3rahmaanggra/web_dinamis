<?php
    //Membuat fungsi/Function dengan Parameter
    function perkenalan($salam, $nama){
        echo $salam." <br>";
        echo "Selamat datang di channel ".$nama."<br>";
        echo "Jangan lupa like, coment, dan subscribe ya...<br>";
        echo "<hr>";
    }
     //Memanggil fungsi dengan parameter
    perkenalan("Assalamu'alaikum", "Mata Rachma");

    $salam = "Selamat Pagi";
    $nama = "Rachma Official";
    perkenalan($salam, $nama);
?>