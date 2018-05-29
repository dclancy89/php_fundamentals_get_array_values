<?php

function print_lists($arr) {
    echo "<ul>";
    for($i = 0; $i < count($arr); $i++) {
        echo "<li>" . $arr[$i] . "</li>";
    }
    echo "</ul";
}

$array1 = [2, 3, 'hello'];

print_lists($array1);