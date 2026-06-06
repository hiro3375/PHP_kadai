<?php

echo "0\n";
echo "1\n";

$a=0;
$b=1;
while($b<10000){
    $c=$a+$b;
    echo "{$c}\n";
    $a=$b;
    $b=$c;
}