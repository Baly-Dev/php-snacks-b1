<?php
$numbers = [];

for ($i = 0; $i < 15; $i++){
    $number = rand(1, 100);
    if (in_array($number, $numbers)){
        continue;
    }else{
        $numbers[] = $number;
    }
};

print_r($numbers);
?>