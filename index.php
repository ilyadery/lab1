<html>
<head>
    <title>Lab 1</title>
</head>
<body>
<?php
$first_number = $_POST['last'];
$second_number = $_POST['next'];
$third_number = $_POST['tarif'];


$answer = ($first_number - $second_number) * $third_number;
echo "Сколько мы должны: " . $answer . "<BR>";
?>
<BR>
<form method="POST" action="index.php">
    Прошлый месяц: <BR>
    <input name="last" type="number"  placeholder="введите прошлый показания"><BR>
    Этот месяц: <BR>
    <input name="next" type="text" ><BR>
    Тариф: <br>
    <input name="tarif" type="text" required>
    <BR>
    <BR>
    <input type="submit" value="Вычислить">
</form>
</body>
</html>