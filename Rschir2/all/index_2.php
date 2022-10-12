<html lang="en">
<head>
    <title>Sorter</title>
</head>
<body>
<?php
    require_once 'sort.php';
    $a=$_GET["array"];

    if ($a == "")
    {
        echo("пример правильного ввода: http://localhost:8080/index_2.php?array=1,4,3,b,99,д,2,8,г,a,6,74,52");
    }
    else{
    echo 'До быстрой сортировки: ' . $a . '<br>';
    $array = explode(",", $_GET["array"]);
    $array = quickSort($array);
    $array = implode(",", $array);
    echo 'После быстрой сортировки: ' . $array;
    }
    
?>
</body>
</html>