<?php

if (filter_input(INPUT_GET, "url") !== null) {
    echo file_get_contents("http://" . sanitizeString(filter_input(INPUT_GET, "url")));
}

function sanitizeString($var) {
    $var1 = strip_tags($var);
    $var2 = htmlentities($var1);
    return stripslashes($var2);
}
