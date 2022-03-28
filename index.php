<?php
include 'phpqrcode/qrlib.php';

$json = file_get_contents('url.json');
$json_data = json_decode($json,true);

foreach ($json_data["url"] as $key => $val) {
    QRcode::png($val, "qr/" . $key . ".png", "L", 30,1);
}
?>