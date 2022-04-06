<?php
$longitude = 3539.71627; // 経度
$latitude = 13946.89885; // 緯度

echo '入力値' . PHP_EOL;
echo '経度：' . $longitude . PHP_EOL;
echo '緯度：' . $latitude . PHP_EOL;


echo '度分表記' . PHP_EOL;

$_longitude_DoHun = nmeaToDoHun($longitude);
$_latitude_DoHun = nmeaToDoHun($latitude);

printf('経度：%d度%f分' . PHP_EOL, $_longitude_DoHun['do'], $_longitude_DoHun['hun']);
printf('緯度：%d度%f分' . PHP_EOL, $_latitude_DoHun['do'], $_latitude_DoHun['hun']);

function nmeaToDoHun($coordinate)
{
    $coordinate = $coordinate / 100;
    $_['do'] = floor($coordinate);
    $_['hun'] = ($coordinate - $_['do']) * 100;

    return $_;
}
