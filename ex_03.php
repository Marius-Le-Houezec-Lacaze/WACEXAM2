<?php
function depth(){
    static $depth = 0;
    return ++$depth;
}

function count_rec_str($arr, $str = "", $res = [])
{
    $count = 0;

    if ($str === "") {
        return false;
    }
        foreach ($arr as $elem) {
        if ($elem == $str) {
            $count++;
        };
    }

    $res[depth()] =  $count;


    foreach ($arr as $keys => $elem) {
        $count = 0;
        if (is_array($elem)) {
            $res = count_rec_str($elem, $str, $res);
        };
    }
    return $res;

}