<?php

/*
1. Index array
2. associative array
3. multidimensional array
*/

// key - Value

// Function 
function yourInfo () { // function define 
    echo 'I am Alex Mojum, I am 22 years old, I am a developer';
}
// call the function
yourInfo();
echo '<hr/>';

$box = array(); // empty array
print_r($box);

$box[] = 'apple';
print_r($box);

echo '<hr/>';

// multi dimensional array

$person = array(
    'name'  =>  'Alex Mojum',
    'age'   => 23, 
    'country'   =>  'American',
    'skills'    =>  array(
        'php', 'mysql', 'javascript' => array(
            'React JS', 'Angular JS', 'Vue JS'
        ),
    ),
);
echo $person['skills']['javascript'][2];


echo '<pre>';
print_r($person); // To view all elements use print_r()
echo '</pre>';
echo '<hr/>';



// associative array
$associative = array(
    'name'  =>  'Shibbir',
    'age'   =>  22, // single quote dey nai cause ta number
    'country'   =>  'Bangladesh'
);  
echo $associative['country'];

echo '<pre>';
print_r($associative); // To view all elements use print_r()
echo '</pre>';
echo '<hr/>';

// Index array or numeric array
$pocket = array('Pen', 'Taka', 'Moneybag'); // index array
echo $pocket[1];
echo '<hr/>';

echo $pocket;

echo '<hr/>';

echo '<pre>';
print_r($pocket); // To view all elements use print_r()
echo '</pre>';

echo '<hr/>';

$course = "PHP";

echo "I am learning $course";
echo '<br/>';
echo 'I am learning $course';

echo '<hr/>';

$string = 'I am a string inside the single quote';
echo $string; 

echo '<hr/>';

$float = 45.5;
echo $float;

echo '<hr/>';

$boolean = true;
echo $boolean;

echo '<hr/>';

$age = 21;
echo $age;