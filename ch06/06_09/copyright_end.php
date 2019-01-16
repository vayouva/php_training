<?php

function copy_right($start_year) {
    $current_year = date('Y');
    if($start_year < $current_year) :
        $current_year = date('y');
        return "&copy; $start_year&ndash;$current_year";
    else :
        return "&copy; $start_year";
    endif;
}

echo copy_right(2015);