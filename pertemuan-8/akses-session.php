<?php
session_start();

echo "isi pesan dari " . $_SESSION["nama"] . " " .
    "isinya : " . $_SESSION["msg"];

$_SESSION["nama"] = "nama baru";
?>