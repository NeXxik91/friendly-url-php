<?php

function friendlyurl($yourstring) {
    $map = array(
        'á' => 'a', 'Á' => 'A',
        'č' => 'c', 'Č' => 'C',
        'ď' => 'd', 'Ď' => 'D',
        'é' => 'e', 'É' => 'E',
        'ě' => 'e', 'Ě' => 'E',
        'í' => 'i', 'Í' => 'I',
        'ň' => 'n', 'Ň' => 'N',
        'ó' => 'o', 'Ó' => 'O',
        'ř' => 'r', 'Ř' => 'R',
        'š' => 's', 'Š' => 'S',
        'ť' => 't', 'Ť' => 'T',
        'ú' => 'u', 'Ú' => 'U',
        'ů' => 'u', 'Ů' => 'U',
        'ý' => 'y', 'Ý' => 'Y',
        'ž' => 'z', 'Ž' => 'Z',
    );

    $url = $yourstring;
    $url = strtr($url, $map);
    $url = preg_replace('~[^\\pL0-9_]+~u', '-', $url);
    $url = trim($url, "-");
    $url = iconv("utf-8", "us-ascii//TRANSLIT", $url);
    $url = strtolower($url);
    $url = preg_replace('~[^-a-z0-9_]+~', '', $url);

    return $url;
}

?>
