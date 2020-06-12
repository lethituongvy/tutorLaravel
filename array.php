<?php
$fruit = array(
    0 => 'Apple',
    1 => 'Banana',
    2 => 'Orange'

);
    var_dump($fruit);
    // echo count($fruit);
    echo "<hr>";

    var_dump("so phan tu trong mang la: ".count($fruit));
    echo "<hr>";
    var_dump("Phan tu thu 2 trong mang la: ".$fruit[1]);
    echo "<hr>";

    $ages = array(
        "An"=> 27,
        "Binh"=> 25,
        "cuong" => 22
    );
    var_dump($ages);
    echo "<hr>";
    var_dump("Tuoi cua Cuong la: " .$ages["cuong"]);
    echo "<hr>";

    foreach($ages as $key => $value)
    echo $key."-".$value."<br>";
    echo"<hr>";

    $colors = array(
        0 => "red",
        1 => "green",
        2 => "blue",
        3 => "yellow"
    );
    echo "Hien thi mang Color<br>";
    var_dump($colors);
    echo "<hr>";
    sort($colors);
    echo "Sap xep mang theo Alpabet <br>";
    foreach($colors as $keys)
        echo $keys."<br>";
        echo "<hr>";
    rsort($colors);
    echo "Sap xep mang theo thu tu nguoc Alpabet <br>";
    foreach($colors as $key)
        echo $key."<br>";

  ?>
