<?php

$jsonl = '["H\u00e0 N\u1ed9i","H\u1ed3 Ch\u00ed Minh","\u0110\u00e0 N\u1eb5ng"]';
$json2 = '{"name":"Nguy\u1ec5n V\u0103n L\u1ee3i","age":25,"location":"H\u00e0 N\u1ed9i"}';

$convert1 = json_decode($jsonl);
$convert2 = json_decode($json2);

echo "<pre>";
print_r($convert1);
echo "</pre>";

echo "<pre>";
print_r($convert2);
echo "</pre>";