<?php
function replaceText($string)
{
    return strtolower(str_replace('brown', 'red', $string));
}

$text = "The quick brown fox jumps over the lazy dog";
echo replaceText($text);

?>