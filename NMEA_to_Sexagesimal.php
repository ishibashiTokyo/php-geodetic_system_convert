<?php
$longitude = 3539.71627; // 経度
$latitude = 13946.89885; // 緯度

echo '入力値' . PHP_EOL;
echo '経度：' . $longitude . PHP_EOL;
echo '緯度：' . $latitude . PHP_EOL;


echo '度分秒表記' . PHP_EOL;

$_longitude_DMS = nmeaToSexagesimal($longitude);
$_latitude_DMS = nmeaToSexagesimal($latitude);

printf('経度：%d度%d分%s秒' . PHP_EOL, $_longitude_DMS['D'], $_longitude_DMS['M'], $_longitude_DMS['S']);
printf('緯度：%d度%d分%s秒' . PHP_EOL, $_latitude_DMS['D'], $_latitude_DMS['M'], $_latitude_DMS['S']);

function nmeaToSexagesimal($coordinate)
{
    $coordinate = $coordinate / 100;
    $_['D'] = floor($coordinate);

    $_M_int = ($coordinate - $_['D']) * 100;
    $_['M'] = floor($_M_int);

    $_['S'] = ($_M_int - $_['M']) / (1 / 60);
    $_['S'] = round($_['S'], 1);

    return $_;
}
