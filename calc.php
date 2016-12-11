<?php
echo "������, �������� ��� �����������";

$errors = [];
if (isset($_POST['first'])) {
    $first = (string) $_POST['first'];
    if (gettype($first) != 'string') {
        $errors[] = '����!!!';
    }
} else {
    $first = '';
}
$errors = [];
if (isset($_POST['action'])) {
    $action = (string) $_POST['action'];
    if (gettype($action) != 'string') {
        $errors[] = '����!!!';
    }
} else {
    $action = '';
}
if (isset($_POST['second'])) {
    $second = (integer) $_POST['second'];
    if (gettype($second) != 'integer') {
        $errors[] = '������ ������� �����!!!';
    }
} else {
    $second = '';
}
if (!empty($errors)) {
    foreach ($errors as $error) {
        echo "<div style='color: red;'>$error</ div>";
    }
}

$form = <<<FORM
<form action="calc.php" method="post">
  <p>������� ������ �����:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type ="text" name="first" value="$first" /></p>
  <p>������� ����: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type ="text" name="action" value="$action" /></p>
  <p>������� ������ �����: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="second" value="$second" /></p>
  <p><input type="submit" /></p>
</form>
FORM;
echo $form;
echo "<br /><br />";
$result = 0;
switch ($action)
   {
    case "+":
        $result = $first + $second;
        echo "��� ���������: " . $result ."<br />";
        break;
    case "-":
        $result = $first - $second;
        echo "��� ���������: " . $result ."<br />";
        break;
    case "*":
        $result = $first * $second;
        echo "��� ���������: " . $result ."<br />";
        break;
    case "/":
        if($second == 0)
        {
            echo "������� �� ���� ���������!!! <br />";
        }
        else {
            $result = $first / $second;
            echo "��� ���������: " . $result ."<br />";
        }
        break;
    default :
        break;
   }

echo "<a href='calc.php'>Back</a>";
