<?php
$longitude = 3539.71627; // 経度
$latitude = 13946.89885; // 緯度

echo '入力値' . PHP_EOL;
echo '経度：' . $longitude . PHP_EOL;
echo '緯度：' . $latitude . PHP_EOL;


echo '度分秒表記' . PHP_EOL;

$_longitude_DoHunByou = nmeaToSexagesimal($longitude);
$_latitude_DoHunByou = nmeaToSexagesimal($latitude);

printf('経度：%d度%d分%s秒' . PHP_EOL, $_longitude_DoHunByou['do'], $_longitude_DoHunByou['hun'], $_longitude_DoHunByou['byou']);
printf('緯度：%d度%d分%s秒' . PHP_EOL, $_latitude_DoHunByou['do'], $_latitude_DoHunByou['hun'], $_latitude_DoHunByou['byou']);

function nmeaToSexagesimal($coordinate)
{
    $coordinate = $coordinate / 100;
    $_['do'] = floor($coordinate);

    $_hun_int = ($coordinate - $_['do']) * 100;
    $_['hun'] = floor($_hun_int);

    $_['byou'] = ($_hun_int - $_['hun']) / (1 / 60);
    $_['byou'] = round($_['byou'], 1);

    return $_;
}
