<?php

$jsonPersonel = file_get_contents("personelbilgileri.json");

$listPersonel = json_decode($jsonPersonel);

$personelSayisi= count($listPersonel);
echo $personelSayisi;
/*
$result = file_get_contents(
    "http://server.com/path",
    context: stream_context_create(array('http' => array(
        'method'  => 'POST',
        'content' => http_build_query(array('personelId' => '15', 'sayfaTipi' => '3'))
    )))
);
if ($result === FALSE) {
    /* ERROR DÖNERSE BURASI ÇALIŞIR *//*
}
$kisiBilgisi = json_decode($result);
*/
?>