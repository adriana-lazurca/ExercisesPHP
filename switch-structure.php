<!-- 7. "School sucks!" Exercise/ The "Switch" structure-->
<br>
<h4>"School sucks!" Exercise</h4>
<form action="" method="get">
    <label for="grade">Grade this work :</label>
    <input type="text" name="grade">
    <br><br>
    <input type="submit" name="submit" value="Submit">
</form>

<?php
if (array_key_exists('grade', $_GET)) {
    $grade = (int) $_GET['grade'];
} else {
    $grade = 0;
}

switch (true) {
    case ($grade > 0 && $grade < 5):
        echo "This work is really bad. What a dumb kid! ";
        break;
    case ($grade >= 5 && $grade <= 9):
        echo "This is not sufficient. More studying is required.";
        break;
    case ($grade == 10):
        echo "Barely enough!";
        break;
    case ($grade >= 11 && $grade <= 14):
        echo "Not bad!";
        break;
    case ($grade >= 15 && $grade <= 18):
        echo "Bravo, bravissimo!";
        break;
    case ($grade == 19 || $grade == 20):
        echo "Too good to be true : confront the cheater!";
        break;
    default:
        echo "This is not a valid grade!";
}

// switch ($grade) {
//     case 1:
//         echo "This work is really bad. What a dumb kid! ";
//         break;
//     default:
//         echo "This is not a valid grade!";
//}
?>