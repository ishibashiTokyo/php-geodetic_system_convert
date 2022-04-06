<?php
$longitude = 3539.71627; // 経度
$latitude = 13946.89885; // 緯度

echo '入力値' . PHP_EOL;
echo '経度：' . $longitude . PHP_EOL;
echo '緯度：' . $latitude . PHP_EOL;


echo '度分表記' . PHP_EOL;

$_longitude_DoHun = nmeaToDecimal($longitude);
$_latitude_DoHun = nmeaToDecimal($latitude);

printf('経度：%s度' . PHP_EOL, $_longitude_DoHun['do']);
printf('緯度：%s度' . PHP_EOL, $_latitude_DoHun['do']);

function nmeaToDecimal($coordinate)
{
    $coordinate = $coordinate / 100;
    $_['do'] = floor($coordinate);
    $_['hun'] = ($coordinate - $_['do']) * 100 * (1 / 60);

    $_['do'] = $_['do'] + $_['hun'];
    return $_;
}
