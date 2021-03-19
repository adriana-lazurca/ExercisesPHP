<!-- 10. Ternary exercises-->
<br>
<h4>What are you?</h4>
<form action="" method="get">
    <label for="race">Are you a human, a cat or a unicorn ?</label>
    <input type="text" name="race">
    <br><br>
    <input type="submit" name="submit" value="Submit">
</form>

<?php
if (array_key_exists('race', $_GET)) {
    $race = $_GET['race'];
} else {
    $race = "";
}

//VERSION WITH IF
// if ($race == "human") {
//     $image_url = 'human.webp';
// } else if ($race == "unicorn") {
//     $image_url = 'unicorn.webp';
// } else if ($race == "cat") {
//     $image_url = 'cat.webp';
// } else {
//     $image_url = '';
// }

$image_url = $race == "human" 
    ? 'human.webp'
    : ($race == "unicorn" 
        ? 'unicorn.webp'
        : ($race == "cat"
            ? 'cat.webp'
            : ''));


if ($race != "") {
    echo '<img src="' . $image_url . '" width="280" height="125" alt="This is not a valid race" />';
}


?>
