<?php
/**
 * Created by PhpStorm.
 * User: Quill McConnell
 * Date: 4/3/2019
 * Time: 2:27 PM
 */

/**
 * prints each item in an array, one item per line
 * @param $array: the given array
 */
function printArr($array)
{
    foreach ($array as $item)
    {
        echo $item . '<br>';
    }
}

/**
 * returns the largest item in an array
 * @param $array: the given array
 * @return mixed: the largest value in the given array
 */
function largest($array)
{
    $largest = max($array);
    return $largest;
}

/**
 * returns the average of an array's values
 * @param $array: the given array
 * @return float|int: the average value of the given array
 */
function average($array)
{
    $average = (array_sum($array)/count($array));
    return $average;
}

/**
 * returns a copy of the array with no duplicates
 * @param $array: the given array
 * @return array: a copy of the given array with no duplicates
 */
function removeDups($array)
{
    $uniqueArray = array_unique($array);
    return $uniqueArray;
}

/**
 * returns an associative copy of the array that counts the number of duplicates
 * for each value
 * @param $array: the given array
 * @return array: a copy of the given array that's associative and uses the
 * number of duplicates as keys
 */
function distribution($array)
{
    //create the new array
    $newArray = array_count_values($array);

    ksort($newArray);

    //return the new array sorted by keys
    return $newArray;
}