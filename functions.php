<?php
/**
 * Created by PhpStorm.
 * User: quill
 * Date: 4/3/2019
 * Time: 2:27 PM
 */
//prints each item in an array
function printArr($array)
{
    foreach ($array as $item)
    {
        echo $item . "<br>";
    }
}

//returns the largest item in an array
function largest($array)
{
    $largest = max($array);
    return $largest;
}

//returns the average of an array's values
function average($array)
{
    $average = array_sum($array)/count($array);
    return $average;
}

//returns a copy of the array with no duplicates
function removeDups($array)
{
    $uniqueArray = array_unique($array);
    return $uniqueArray;
}

//returns an associative copy of the array that counts the number of duplicates for each value
function distribution($array)
{
    //create the new array
    $newArray = array_count_values($array);

    //sort the new array by keys
    ksort($newArray);

    return $newArray;
}