<?php

echo 'Zadatak broj 1<br>';
$polje_imena = array('Martina', 'Matea', 'Lea', 'Marijan', 'Leon');

foreach ($polje_imena as $ime) {
    echo $ime.'<br>';
}

echo '<br>Zadatak broj 2<br>';
$polje_imena = array();
$polje_imena['ime5'] = 'Martina';
$polje_imena['ime4'] = 'Matea';
$polje_imena['ime3'] = 'Lea';
$polje_imena['ime2'] = 'Marijan';
$polje_imena['ime1'] = 'Leon';

foreach ($polje_imena as $key => $ime) {
    echo 'Ključ '.$key.' ima vrijednost: '.$ime.'<br>';
}

echo '<br>Zadatak broj 3<br>';
sort($polje_imena);

for ($i = 0; $i <= 4; $i++) {
    echo $polje_imena[$i].'<br>';
}

echo '<br>Zadatak broj 4<br>';
$polje_imena = array();
$polje_imena['ime5'] = 'Martina';
$polje_imena['ime4'] = 'Matea';
$polje_imena['ime3'] = 'Lea';
$polje_imena['ime2'] = 'Marijan';
$polje_imena['ime1'] = 'Leon';

ksort($polje_imena);

foreach ($polje_imena as $key => $ime) {
    echo 'Ključ '.$key.' ima vrijednost: '.$ime.'<br>';
}

echo "<br>Zadatak broj 5<br>";
$polje_brojeva = array();

for ($i = 1; $i <= 100; $i++) {
    $polje_brojeva[] = $i;
}

foreach ($polje_brojeva as $broj) {
    echo $broj."<br>";
}

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
