<?php
// 参照渡し（オブジェクトは必然的に参照渡しになる）
$a = new stdClass();
$a->property = 1;
$b = $a; // オブジェクトを代入
$a->property = 3; // オブジェクト先である$aを変更→$b=$a
var_dump($b); // object(stdClass)#1 (1) { ["property"]=> int(3) }

// PhpStorm でPHPのページを表示する(Windows環境) | プロガジ.DEV https://dev.macha795.com/phpstorm-open-browser-for-php/
