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
    //track the length of the array
    $arrayLength = count($array);

    //create the new array
    $newArray = array(0);

    //add to the new array
    foreach ($array as $item)
    {
        //track the matches
        $matches = 0;

        //if it hasn't been compared yet
        if (!in_array($item, $newArray))
        {
            //compare with other values and count each match
            for ($i = 0; $i < $arrayLength; $i++)
            {
                if ($array[$i] == $item)
                {
                    $matches++;
                }
            }

            //add to the array, matches as the key
            $newArray[$matches] = $item;
        }
    }

    //sort the new array by keys
    ksort($newArray);

    return $newArray;
}