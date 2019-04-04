<?php
/**
 * Created by PhpStorm.
 * User: quill
 * Date: 4/3/2019
 * Time: 2:13 PM
 */

//reports php erros
ini_set('display_errors', 1);
error_reporting(E_ALL);

//include all functions
include('functions.php');
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pair Program 1</title>
</head>
<body>
    <h1>Pair Program 1</h1>
    <?php
    //create an array and print it
    $numbers = array(7, 9, 8, 9, 8, 8, 6);

    //test functions
    printArr($numbers);

    $largest = largest($numbers);
    echo 'Largest: '. $largest . '<br>';

    $average = average($numbers);
    echo 'Average: ' . $average . '<br>';
    ?>
</body>
</html>