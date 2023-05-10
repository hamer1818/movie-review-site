<?php
header('Access-Control-Allow-Origin: *');
header('content-type application/json');

$db_host = "127.0.0.1";
$db_name = "gorsel";
// $db_user = "admin";
// $db_pass = "admin";

// Çekmek istediğiniz view
$view = "_design/yazilariCek/_view/yazilariCek";

// Veritabanından belgeyi çekmek için gereken URL
$url = "http://$db_host:5984/$db_name/$view";

// cURL işlemini başlat
$ch = curl_init();
// cURL ayarlarını yap
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

// Veritabanından belgeyi çek
$response = curl_exec($ch);

// cURL işlemini kapat
curl_close($ch);

// Yanıtı ekrana yazdır

echo ($response);
