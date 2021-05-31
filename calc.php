<?php
$time = $_POST['time'] * 12;
$sum = $_POST['sumDeposit'];
$daysy = 365;
$percent = 0.1;
$summadd  = $_POST['sumAdd'];
if ($_POST['replenishment'] == 'yes') {
    if ($summadd  == '') $summadd = 0;
} else {
    $summadd = 0;
}
$res = $sum;
for ($i = 0; $i < $time; $i++) {
    $res += $res*0.1 + $summadd; 
}
echo $res;
