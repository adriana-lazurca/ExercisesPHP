<?php

/**
 * Series of exercises on PHP conditional structures.
 */

// 1.1 Clean your room Exercise 
$room_is_filthy = false;

if ($room_is_filthy == true) {
    echo "Yuk, Room is dirty : let's clean it up !";
    //cleanup_room();
    echo "<br>Room is now clean!";
    $room_is_filthy = false;
} else {
    echo "<br>Nothing to do, room is neat.";
}


// 1.2 Clean your room Exercise, improved

// Create the array of possible states
$possible_states = [
    0 => "health hazard",
    1 => "filthy",
    2 => "dirty",
    3 => "clean",
    4 => "immaculate"
];

// When testing, change the index value to navigate to the possible array values
$room_filthiness = $possible_states[1];

if ($room_filthiness == $possible_states[0]) {
    echo "<br>Yuk, Room is Disgusting! Let's clean it up !";
} else if ($room_filthiness == $possible_states[1]) {
    echo "<br>Yuk, Room is dirty : let's clean it up !";
    // ...
} else if ($room_filthiness == $possible_states[2]) {
    echo "<br>Yuk, Room is dirty : let's clean it up !";
    // ...
} else {
    echo "<br>Nothing to do, room is neat.";
}

// 2. "Different greetings according to time" Exercise
echo "<br>";

$now = date("h:i"); // How to get the current time in PHP ? Google is your friend ;-)
echo $now . "<br>";

// Test the value of $now and display the right message according to the specifications.
if ($now >= "05:00" && $now <= "09:00") {
    echo "Good morning !";
} else if ($now >= "09:01" && $now <= "12:00") {
    echo "Good day !";
} else if ($now >= "12:01" && $now <= "16:00") {
    echo "Good afternoon !";
} else if ($now >= "16:01" && $now <= "21:00") {
    echo "Good evening !";
} else {
    echo "Good night !";
}
?>

<!--3. "Different greetings according to age" Exercise -->
<!-- 3.II Display a different greeting according to the user's age and gender. -->
<!-- 4. Display a different greeting according to the user's age, gender and mothertongue. -->

<!--Form-->
<form method="get" action="">
    <label for="age">Please type your age :</label>
    <input type="text" name="age">
    <br>
    <p>Man or Woman?</p>
    <input type="radio" id="man" name="gender" value="man" checked="checked">
    <label for="man">Man</label><br>
    <input type="radio" id="woman" name="gender" value="woman">
    <label for="woman">Woman</label><br>
    <br>
    <p>Do you speak English?</p>
    <input type="radio" id="yes" name="language" value="yes" checked="checked">
    <label for="yes">Yes</label><br>
    <input type="radio" id="no" name="language" value="no">
    <label for="no">No</label><br>
    <br>
    <input type="submit" name="submit" value="Greet me now">
</form>

<?php
echo "<br>";

if (array_key_exists('age', $_GET)) {
    $age = (int) $_GET['age'];
} else {
    $age = 0;
}
//echo $age;


if ($age > 0) {
    // Form processing
    if ($age <= 12) {
        if ($_GET['gender'] == "woman") {
            if ($_GET['language'] == "yes") {
                echo "Hello Girl!";
            } else {
                echo "Aloha Girl!";
            }
        } else {
            if ($_GET['language'] == "yes") {
                echo "Hello Boy!";
            } else {
                echo "Aloha Boy!";
            }
        }
    } else if ($age > 12 && $age < 18) {
        if ($_GET['gender'] == "woman") {
            if ($_GET['language'] == "yes") {
                echo "Hello Miss Teen!";
            } else {
                echo "Aloha Miss Teen!";
            }
        } else {
            if ($_GET['language'] == "yes") {
                echo "Hello mister Teen!";
            } else {
                echo "Aloha mister Teen!";
            }
        }
    } else if ($age >= 18 && $age <= 115) {
        if ($_GET['gender'] == "woman") {
            if ($_GET['language'] == "yes") {
                echo "Hello Miss Adult!";
            } else {
                echo "Aloha Miss Adult!";
            }
        } else {
            if ($_GET['language'] == "yes") {
                echo "Hello mister Adult!";
            } else {
                echo "Aloha mister Adult!";
            }
        }
    } else {
        if ($_GET['gender'] == "woman") {
            if ($_GET['language'] == "yes") {
                echo "Hello!Wow! Still alive ? Are you a Miss robot, like me ? Can I hug you ?";
            } else {
                echo "Aloha!Wow! Still alive ? Are you a Miss robot, like me ? Can I hug you ?";
            }
        } else {
            if ($_GET['language'] == "yes") {
                echo "Hello!Wow! Still alive ? Are you a robot, like me ? Can I hug you ?";
            } else {
                echo "Aloha!Wow! Still alive ? Are you a robot, like me ? Can I hug you ?";
            }
        }
    }
}
echo "<br>";
?>

<!-- 5. The Girl Soccer team -->
<br>
<h4>The Girl Soccer team</h4>
<form action="" method="get">
    <label for="name">Please write your name :</label>
    <input type="text" name="name">
    <br><br>
    <label for="age">Please write your age :</label>
    <input type="text" name="age">
    <br>
    <p>Please select your gender :</p>
    <input type="radio" id="male" name="gender" value="male" checked="checked">
    <label for="male">Male</label><br>
    <input type="radio" id="female" name="gender" value="female">
    <label for="female">Female</label><br>
    <br>
    <input type="submit" name="submit" value="Submit">
</form>


<?php
if (array_key_exists('age', $_GET)) {
    $age = (int) $_GET['age'];
} else {
    $age = 0;
}

// 6. Achieve the same, without the ELSE.
if (!empty($_GET['name']) && !empty($_GET['gender'])) {
    $message = "Sorry you don't fit the criteria";
    if ($age >= 21 && $age <= 40 && $_GET['gender'] == 'female') {
        $message = "Welcome to the team !";
    }
    // else {
    //     echo "Sorry you don't fit the criteria";
    // }
}
echo !empty($message);
?>

<!-- 7. "School sucks!" Exercise -->
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


if (!empty($grade)) {
    if ($grade > 0 && $grade < 5) {
        echo "This work is really bad. What a dumb kid! ";
    } else if ($grade >= 5 && $grade <= 9) {
        echo "This is not sufficient. More studying is required.";
    } else if ($grade == 10) {
        echo "Barely enough!";
    } else if ($grade >= 11 && $grade <= 14) {
        echo "Not bad!";
    } else if ($grade >= 15 && $grade <= 18) {
        echo "Bravo, bravissimo!";
    } else if ($grade == 19 || $grade == 20) {
        echo "Too good to be true : confront the cheater!";
    } else {
        echo "This is not a valid grade!";
    }
}
?>
