<?php

$arr = array(10, 20, 30, 40, 50);
$item = 30;
$found = false;

foreach ($arr as $key => $value) {
    if ($value == $item) {
        echo "$item Exist in Array at Index $key.";
        $found = true;
        break;
    }
}

if (!$found) {
    echo "$item not Exist in Array.";
}

?>