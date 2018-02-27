<?php
$data = array(
    "web-prog" => 
        array(
            "tamami" => 5, 
            "andi" => 7, 
            "yoga" => 9),
    "kalkulus" =>
        array(
            "yoga" => 6,
            "andi" => 8,
            "tamami" => 7)
);

echo "Nilai Web-Prog Andi : " . 
  $data["web-prog"]["andi"] . "<br>";
echo "Nilai Kalkulus Yoga : " .
  $data["kalkulus"]["yoga"] . "<br>";
?>