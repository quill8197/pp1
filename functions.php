<?php
/**
 * Created by PhpStorm.
 * User: quill
 * Date: 4/3/2019
 * Time: 2:27 PM
 */
//a function that prints each item in an array
function printArr($items)
{
    foreach ($items as $item)
    {
        echo $item . "<br>";
    }
}

function largest($array)
{
    $largest = max($array);
    return $largest;
}