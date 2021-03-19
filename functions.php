<?php
//Transform a String
$text = "According to a researcher (sic) at Cambridge University, it doesn't matter in what order the letters in a word are, the only important thing is that the first and last letter be at the right place. 
The rest can be a total mess and you can still read it without problem. 
This is because the human mind does not read every letter by itself but the word as a whole.";

$newtext = explode(" ", $text);

print_r($text);
echo '<hr>';

// foreach ($text as $word) {
//     echo str_shuffle($word) . " ";
// }

function mixWords()
{
    global $newtext;
    foreach ($newtext as $word) {
        if (strlen($word) < 2)
            echo $word;
        else {
            echo ' ' .$word[0] . str_shuffle(substr($word, 1, -1)) . $word[strlen($word) - 1]. ' ';
        }
    }
}
mixWords();

//Exercises
//Use a function that capitalizes the first letter of the provided argument. Example: "émile" should return "Émile"

function capitalizeName($name)
{
    echo '<hr>' . mb_convert_case($name, MB_CASE_TITLE, 'UTF-8');
    //'<hr>'.ucfirst($name);
}

capitalizeName('émile');
capitalizeName('jean');

//Use the native function allowing you to display the current year.
echo "<br>";
echo date('Y');

// Now display the date, time, minutes and seconds, using the same function, by playing with the arguments.
echo "<br>";
echo date("Y/m/d H:m:s");

//Create a "Sum" function that takes 2 numbers and returns their sum.
// Improve that function so that it checks whether the argument is indeed a Number. 
//If not, it should display : "Error: argument is not a number."
echo "<br>";
function sum($a, $b)
{
    if (is_numeric($a) and is_numeric($b)) {
        echo $a + $b;
    } else {
        echo "Error: argument is not a number.";
    }
}
sum(200, 300);

//Create a function that takes as argument a string of characters and returns an acronym made of the initials of each word.
//Example: "In code we trust!" should return: ICWT).
echo "<br>";
function convertStringToAcronym($string)
{
    $string = ucwords($string);
    $string = explode(" ", $string);
    foreach ($string as $word) {
        echo substr($word, 0, 1);
    }
}
convertStringToAcronym('be energy creation owl darling enormous');
echo '<br>';
convertStringToAcronym('come on creature here on nature');

// Create a function that replaces the letters "a" and "e" with "æ". 
//Example: "caecotrophie", "chaenichthys","microsphaera".
//Create the opposite function, which replaces "æ" by "ae"

function replaceCharacters($char, $newChar, $string)
{
    echo "<br>" . str_replace($char, $newChar, $string);
}

$crazyString = 'cæcotrophie, chænichthys, microsphæra, sphærotheca';
$normalString = 'caecotrophie, chaenichthys, microsphaera, sphaerotheca';
replaceCharacters('æ', 'ae', $crazyString);
replaceCharacters('ae', 'æ', $normalString);

//De-capitalize the string : "STOP YELLING I CAN'T HEAR MYSELF THINKING!!"
echo '<br>';

$yellString = "STOP YELLING I CAN'T HEAR MYSELF THINKING!!";
echo strtolower($yellString);

//In your new job, you have to maintain the code of a former developer. 
//Make it DRY by creating a custom function calculate_cone_volume :
echo '<br>';
// Volume of a cone which ray is 5 and height is 2 
$volume = 5 * 5 * 3.14 * 2 * (1 / 3);
echo 'The volume of a cone which ray is 5 and height is 2 = ' . $volume . ' cm<sup>3</sup><br />';
// Volume of a cone which ray is 3 and height is 4  
$volume = 3 * 3 * 3.14 * 4 * (1 / 3);
echo 'The volume of a cone which ray is 3 and height is 4 = ' . $volume . ' cm<sup>3</sup><br />';

//FUNCTION
function calculate_cone_volume($ray, $height)
{
    $volume = $ray * $ray * 3.14 * $height * (1 / 3);
    echo 'The volume of a cone which ray is 5 and height is 2 = ' . $volume . ' cm<sup>3</sup><br />';
}

calculate_cone_volume(5, 2);
calculate_cone_volume(3, 4);

//Create a random words generator, that generates 2 words: one whose length is between 1 to 5 letters, the other between 7 and 15 letters. 
//The screen will display a title "Generate a new word", then the two generated words, and underneath, a button with the text "Generate").
echo '<br>';
?>
<h4>"Generate a new word"</h4>
<?php
$alphabet = [
    "a", 'b', 'c', 'd', "e", 'f', 'g', 'h', "i", 'j', 'k', 'l', 'm',
    'n', "o", 'p', 'r', 's', 't', "u", 'v', 'w', 'x', 'y', 'z'
];

function generateRandomWord($min, $max)
{
    global $alphabet;

    $wordLength = rand($min, $max);

    for ($i = 0; $i < $wordLength; $i++) {
        $key = array_rand($alphabet);
        echo $alphabet[$key];
    }
    echo '<br>';
}

if (isset($_POST['generateWord'])) {
    generateRandomWord(1, 5);
    echo "<br>";
    generateRandomWord(7, 15);
    echo "<br>";
}
?>
<form method="post">
    <button type="submit" name='generateWord'>Generate</button>
</form>

<?php
//Create a function to return "notice", "warning" and "error" messages to a user,which takes 2 arguments : 
//the "message", and the "css class" (values: "info", "error", "warning").
//Improve that function by giving the default class the value of "info"

function feedback($message, $cssClass = "info")
{

    echo "<div class=$cssClass>$message</div>";
}

echo feedback("Incorrect email address", "error");
echo feedback("Your email address is too short", "info");
echo feedback("Do you mean '@.com'?", "warning");
echo feedback("What is my class'?");
