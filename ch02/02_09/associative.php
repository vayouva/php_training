<?php
/**
 * Created by PhpStorm.
 * User: abass
 * Date: 02/01/2019
 * Time: 16:39
 */

$descriptions = [
    'Earth' => 'mostly harmless',
    'Marvin' => 'the paranoid android'
];

$descriptions['Zaphod'] = 'President of the Imperial Galactic Government';
print_r($descriptions); echo "<br/>";
echo  $descriptions['Earth'];echo "<br/>";
echo  $descriptions['Marvin'];echo "<br/>";
echo  $descriptions['Zaphod'];echo "<br/>";
echo "Earth is described as {$descriptions['Earth']}";