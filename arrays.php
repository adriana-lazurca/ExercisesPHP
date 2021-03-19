<?php
// Here is an array of countries:
$countries = array('Belgium', 'France', 'Germany', 'Netherlands', 'Ukraine', 1);
echo $countries[2];

//Create an array representing your family members
$family = ["cochon", "maman", "papa", "vali"];
echo "<br>";
print_r($family);

$fav_food = ["pancackes", "pizza", "tiramisu", "salad"];
echo "<br>";
print_r($fav_food[1]);

array_push($fav_food, 'curry');
$fav_food['italian'] = 'pasta';
$fav_food['lebanese'] = 'hummus';
$fav_food['italian'] = 'focaccia';
echo "<br>";
print_r($fav_food);
echo "<br>";
echo $fav_food['italian'];

// Associative Array

$me = array(
    'firstname' => 'Adriana',
    'lastname' => 'Lazurca',
    'age' => 31,
    'fav_season ' => 'Summer',
    'like_soccer' => true,
    'favourite_movies' => ['My Own Private Idaho', 'Her', 'Matrix']
);

echo "<br>";
echo $me['firstname'];
echo '<pre>';
print_r($me);
echo '</pre>';
print_r($me['favourite_movies']);
$me['hobbies'] = ['reading', 'traveling', 'music', 'coffee', 'dance'];
echo '<pre>';
print_r($me);
echo '</pre>';

$cochon = array(
    'firstname' => 'Cochon',
    'lastname' => 'Bicu',
    'age' => 30,
    'fav_season ' => 'Spring',
    'like_soccer' => true,
    'favourite_movies' => ['Lord of the ring', 'Him', 'Matrix'],
    'hobbies' => ['programming', 'coffee', 'dance', 'soccer', 'traveling']
);

$me['cochon'] = $cochon;
echo '<pre>';
print_r($me);
echo '</pre>';

echo count($cochon['hobbies']);
echo "<br>";
echo count($me['hobbies']);
$total_hobbies = count($cochon['hobbies']) + count($me['hobbies']);
echo "<br>";
echo $total_hobbies;

$me['hobbies'][] = 'Taxidermy';
echo "<br>";
print_r($me['hobbies']);
$me['lastname'] = 'Durand';

echo '<pre>';
print_r($me);
echo '</pre>';

$result = array_intersect($me['hobbies'], $cochon['hobbies']);
print_r($result);

$result = array_merge($me['hobbies'], $cochon['hobbies']);
echo '<pre>';
print_r($result);
echo '</pre>';


// More array exercises

$web_development = [
    'frontend' => [],
    'backend'  => []
];

$web_development['frontend'][] = 'xhtml';
print_r($web_development['frontend']);
echo "<br>";

$web_development['backend'][] = 'Ruby on Rails';

$web_development['frontend'][] = 'CSS';

$web_development['backend'][] = 'Flash';

$web_development['backend'][] = 'JavaScript';

$web_development['frontend'][0] = 'html';

array_splice($web_development['backend'], 1, 1);

echo '<pre>';
print_r($web_development);
echo '</pre>';
