<h2>Percobaan Variabel</h2>

<?php

$nama = "tamami";
$semester = 7;
$honor = 10.5;

var_dump($nama); echo "<br>";
var_dump($semester); echo "<br>";
var_dump($honor); echo "<br>";

function printNama() {
    global $nama;
    echo "<h3>$nama</h3>";
}

function printMataKuliah() {
    $namaMatKul = "Web Programming";
    echo "<p>$namaMatKul</p>";
}

echo "<h1>$namaMatKul</h1>";

printNama();
printMataKuliah();

?>