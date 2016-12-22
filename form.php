<?php
$form = <<<FORM
<form action="calc.php" method="post">
  <p>Put first number:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type ="text" name="first" value="$first" /></p>
  <p>Put symbol +, - , * or /   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type ="text" name="action" value="$action" /></p>
  <p>Put second number: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="second" value="$second" /></p>
  <p><input type="submit" value="Calculate"/></p>
</form>
FORM;
