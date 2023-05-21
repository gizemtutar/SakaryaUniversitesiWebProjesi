<?php

    $sehirler = ["Zonguldak","Bursa","Bilecik","İzmir","Sakarya"];

    $ad = $_POST['ad'];
    $soyad = $_POST['soyad'];
    $email = $_POST['_mail'];
    $telno = $_POST['telno'];
    $cinsiyet = $_POST['cinsiyet'];
    $onay = $_POST['sozlesme'];
    $adres = $_POST['adres'];
    $sehir = $_POST['sehir'];

    echo "AD: ".$ad."<br>";
    echo "SOYAD: ".$soyad."<br>";
    echo "E-MAİL: ".$email."<br>";
    echo "TEL NO: ".$telno."<br>";
    
    if($cinsiyet == 1)
        echo "CİNSİYET: Erkek<br>";
    else
        echo "CİNSİYET: Kadın<br>";

    echo "ADRES: ".$adres."<br>";

    echo "ŞEHiR: ".$sehirler[$sehir]."<br>";

?>