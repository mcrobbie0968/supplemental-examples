<?php

if (filter_input(INPUT_POST, "url") !== null) {
    echo file_get_contents("http://" . SanitizeString(filter_input(INPUT_POST, "url")));
}

function SanitizeString($var) {
    $var1 = strip_tags($var);
    $var2 = htmlentities($var1);
    return stripslashes($var2);
}
