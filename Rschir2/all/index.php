<html lang="en">
<head>
    <title>Drawer</title>
</head>
<body style="height: auto">
<?php
    require_once 'draw.php';
    $num = $_GET["num"];
    if ($num == 1)
    {
        print_r(triangle());
    }
    if ($num == 2)
    {
        print_r(circle());
    }
    if ($num == 3)
    {
    print_r(star());
    }
    if (($num != 1) and ($num != 2) and ($num != 3))
    {
        echo("пример правильного ввода(цифры num от 1 до 3): http://localhost:8080/index.php?num=2");
    }

?>
</body>
</html>
