
<!DOCTYPE html>
<html>
<head>
    <title>Guessing Game 191ebb19</title>
</head>
<body>
    <h1>Welcome to the Guessing Game</h1>
    <p>Guess the number between 1 and 100.</p>
    <form>
        <input type="text" name="guess">
        <input type="submit">
    </form>

<?php
if (!isset($_GET['guess'])) {
    echo "<p>Please enter a guess and press Submit.</p>";
} else if (strlen($_GET['guess']) < 1) {
    echo "<p>Your guess is too short.</p>";
} else if (!is_numeric($_GET['guess'])) {
    echo "<p>Your guess is not a number.</p>";
} else {
    $guess = $_GET['guess'] + 0;
    if ($guess < 22) {
        echo "<p>Your guess is too low.</p>";
    } else if ($guess > 22) {
        echo "<p>Your guess is too high.</p>";
    } else {
        echo "<p>Congratulations - You are right!</p>";
    }
}
?>
</body>
</html>
