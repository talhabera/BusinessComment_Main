<?php
$jsonFile = file_get_contents("sample.json");

$donutList = json_decode($jsonFile);
echo $donutList[0]->kullanici_tip_id->kullanıcı_tip_tanim;
echo $donutList[0]->id;
echo $donutList[0]->id;
echo $donutList[0]->id;
echo $donutList[1]->id;



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
