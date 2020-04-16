<?php
    $password_get = $_GET['password'];
    echo 'valore di password_get è: ' . $password_get . '<br>';

?>

<?php  if ($password_get != 'Boolean'): ?>
<p style='color:red'> This password is invalid </p>

<?php else: ?>
<p style='color:green'> This password is valid </p>

<?php endif ?>
