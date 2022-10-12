<html lang="en">
<head>
    <title>Info</title>
</head>
<body>
<?php
require_once 'lib.php';
echo 'ls: ';
print_r(ls());
echo '<br>';

echo 'ps: ';
print_r(ps());
echo '<br>';

echo 'whoami: ';
print_r(whoami());
echo '<br>';

echo 'id: ';
print_r(id());
echo '<br>';

echo 'pwd: ';
print_r(pwd());
echo '<br>';
?>
</body>
</html>
