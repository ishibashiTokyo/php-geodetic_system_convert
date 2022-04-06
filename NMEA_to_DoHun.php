<?php
$longitude = 3539.71627; // 経度
$latitude = 13946.89885; // 緯度

echo '入力値' . PHP_EOL;
echo '経度：' . $longitude . PHP_EOL;
echo '緯度：' . $latitude . PHP_EOL;


echo '度分表記' . PHP_EOL;

$_longitude_DM = nmeaToDM($longitude);
$_latitude_DM = nmeaToDM($latitude);

printf('経度：%d度%f分' . PHP_EOL, $_longitude_DM['D'], $_longitude_DM['M']);
printf('緯度：%d度%f分' . PHP_EOL, $_latitude_DM['D'], $_latitude_DM['M']);

function nmeaToDM($coordinate)
{
    $coordinate = $coordinate / 100;
    $_['D'] = floor($coordinate);
    $_['M'] = ($coordinate - $_['D']) * 100;

    return $_;
}
