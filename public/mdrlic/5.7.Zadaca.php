<?php

echo 'Zadatak broj 1<br>';
$a = 4;
$b = 2;

if ($a > $b) {
    echo $a.' je veći od '.$b.'<br><br>';
} else {
    echo $a.' je manji ili jednak od '.$b.'<br><br>';
}

echo 'Zadatak broj 2<br>';
$a = 5;
$b = 10;

if ($a > $b) {
    $a++;
} else {
    $a--;
}

echo 'Varijabla a ima vrijednost '.$a.'<br>Varijabla b ima vrijednost '.$b.'<br><br>';

echo 'Zadatak broj 3<br>';
$i = 1;

while ($i <= 50) {
    echo $i.'<br>';
    $i++;
}

echo '<br>Zadatak broj 4<br>';
$zbroj = 0;

for ($i = 20; $i <= 30; $i++) {
    $zbroj += $i;
}
echo 'Zbroj je '.$zbroj;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
