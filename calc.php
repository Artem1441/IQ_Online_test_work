<?php
$time = $_POST['time'] * 12;
$sum = (int)str_replace(' ', '', $_POST['sumDeposit']);
$daysy = 365;
$percent = 0.1;
$summadd  = (int)str_replace(' ', '', $_POST['sumAdd']);
$daysAverage = 365/12;

if ($_POST['replenishment'] == 'yes') {
    if ($summadd  == '') $summadd = 0;
} else {
    $summadd = 0;
}
$res = $sum;
for ($i = 0; $i < $time; $i++) {
    // echo $res . '<br>';
    // для проверки результата
    $res +=  ($res + $summadd)*$daysAverage*$percent/$daysy; 
}
echo round($res);

