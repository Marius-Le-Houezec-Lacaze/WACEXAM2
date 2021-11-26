<?php

function ord_alphlong($str = NUll)
{
    if ($str === NULL) {
        echo "n";
        return NULL;
    }
    //$test =preg_replace("/[^A-Za-z ]/", '', $str);

    $temp = preg_split('/\s+/', $str);

    usort($temp, function ($a, $b) {
        return strlen($b) > strlen($a);
    });

    usort($temp, function ($a, $b) {
        if (strlen($a) === strlen($b)) {
            return strcmp(strtolower($a), strtolower($b));
        }
    });

    
    echo trim(implode(" ", $temp)) . PHP_EOL;
}