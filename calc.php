<?php
echo "Hello!! Try my calculator";

$errors = [];
if (isset($_POST['first'])) {
    $first = $_POST['first'];
        if (!ctype_digit($first))
        {
            echo "<div style='color: red;'> Error! Second number nor numerical!</div>";
        }
}
else {
    $first = '';
}
$errors = [];
if (isset($_POST['action'])) {
    $action = $_POST['action'];
    if (($action != '+') && ($action != '-') && ($action != '*') &&($action != '/'))
    {
        echo "<div style='color: red;'> Error!! Put  +,-,*, or / !!</div>";
    }
} else {
    $action = '';
}
$errors = [];
if (isset($_POST['second'])) {
    $second = $_POST['second'];
    if (!ctype_digit($second))
    {
        echo "<div style='color: red;'> Error! Second number nor numerical!</div>";
    }
}
else {
    $second = '';
}
if (!empty($errors)) {
    foreach ($errors as $error) {
        echo "<div style='color: red;'>$error</div>";
    }
}

$form = <<<FORM
<form action="calc.php" method="post">
  <p>Put first number:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type ="text" name="first" value="$first" /></p>
  <p>Put symbol +, - , * or /   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type ="text" name="action" value="$action" /></p>
  <p>Put second number: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="second" value="$second" /></p>
  <p><input type="submit" value="Calculate"/></p>
</form>
FORM;
echo $form;
echo "<br /><br />";
$result = 0;
switch ($action)
{
    case "+":
        $result = $first + $second;
        echo "Your result: " . $result ."<br />";
        break;
    case "-":
        $result = $first - $second;
        echo "Your result: " . $result ."<br />";
        break;
    case "*":
        $result = $first * $second;
        echo "Your result: " . $result ."<br />";
        break;
    case "/":
        if($second == 0)
        {
            echo "<div style='color: red;'> Division by 0 is prohibited!!</div>";
        }
        else {
            $result = $first / $second;
            echo "Your result: " . $result ."<br />";
        }
        break;
    default :
        break;
}

echo "<a href='calc.php'>Back</a>";
