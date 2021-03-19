<?php
$names = array('John', 'jeanne', 'Joan', 'émile');
echo '<pre>';
var_dump($names);
echo '</pre>';

foreach ($names as $key => $value) {
	$names[$key] = ucwords($value);
}
echo '<pre>';
var_dump($names);
echo '</pre>';

// Exercises
// I
$pronouns = array('I', 'You', 'He/She', 'We', 'You', 'They');
foreach ($pronouns as $pronoun) {

	if ($pronoun == 'He/She') {
		echo $pronoun . ' codes' . '<br>';
	} else {
		echo $pronoun . ' code' . '<br>';
	}
}

// II EXEMPLE

$amount_of_lines = 1;

while ($amount_of_lines <= 100) {
	echo $amount_of_lines . ". : I shall not watch flies fly when I/'m learning PHP.<br/>";
	// shorthand writing for 
	// $amount_of_lines = $amount_of_lines +1;
	$amount_of_lines++;
}

for ($amount_of_lines = 1; $amount_of_lines <= 100; $amount_of_lines ++)
{
    echo $amount_of_lines . ". : I shall not watch flies fly when I'm learning PHP.<br />";
}

// Write a script that prints the numbers from 1 to 120 using  while

$line = 1;
while ($line <= 120) {
	echo $line .  '<br>';
	$line++;
}

// Write a script that prints the numbers from 1 to 120 using  for
for ($line = 1; $line <= 120; $line++) {
	echo $line .  '<br>';
}

// Create an array containing the firstname of everyone in your startup. Display each firstname using a loop.

$first_names = ["Mike", "Andre", "Julia", "Carol", "Sam"];

foreach ($first_names as $first_name) {
echo "$first_name<br>";
}

// Create an array containing at least 10 countries. Then, generate the html that will render a select box inside an html form

$countries = ['BR'=>'Brazil', 'BE'=>'Belgium', 'RO'=>'Romania', 'DE'=>'Germany', 'FR'=>'France', 'CA'=>'Canada', 'PE'=>'Peru', 'MX'=>'Mexic', 'AR'=>'Argentina', 'CL'=>'Chile'];
echo '<pre>';
print_r($countries);
echo '</pre>';

//Create an input
echo "<select name='countries'>";
echo "<option value=''>Choose a country</option>";
foreach ($countries as $iso => $country) {
	echo "<option value='$iso'>$country</option>";
	
}
echo "</select>";