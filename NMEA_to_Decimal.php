<?php
$longitude = 3539.71627; // 経度
$latitude = 13946.89885; // 緯度

echo '入力値' . PHP_EOL;
echo '経度：' . $longitude . PHP_EOL;
echo '緯度：' . $latitude . PHP_EOL;


echo '度分表記' . PHP_EOL;

$_longitude_D = nmeaToDecimal($longitude);
$_latitude_D = nmeaToDecimal($latitude);

printf('経度：%s度' . PHP_EOL, $_longitude_D['D']);
printf('緯度：%s度' . PHP_EOL, $_latitude_D['D']);

function nmeaToDecimal($coordinate)
{
    $coordinate = $coordinate / 100;
    $_['D'] = floor($coordinate);
    $_['M'] = ($coordinate - $_['D']) * 100 * (1 / 60);

    $_['D'] = $_['D'] + $_['M'];
    return $_;
}
