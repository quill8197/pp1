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

function average($array)
{
    $average = array_sum($array)/count($array);
    return $average;
}

function removeDups($array)
{
    $uniqueArray = array_unique($array);
    return $uniqueArray;
}

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
                    echo "Match for $item found <br>";
                }
            }

            //add to the array
            $newArray[$matches] = $item;
        }
    }
    return $newArray;
}