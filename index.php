<html>
<head>
    <title>Lab 1</title>
</head>
<body>
<?php
$first_number = $_POST['last'];
$second_number = $_POST['next'];
$third_number = $_POST['tarif'];

if(enter($first_number) && enter($second_number) && enter($third_number) && $first_number > $second_number) {
    $res = ($first_number - $second_number) * $third_number;
} else {
    echo "Ошибка,введите корректные данные!";
}

function enter($num)
{
   return is_numeric($num) && $num > 0;
}
//echo "Сколько мы должны: " . $answer . "<BR>";

?>
<BR>
<form method="POST" action="index.php">
    Прошлый месяц: <BR>
    <input name="last" type="number" placeholder="Введите прошлый показатель"><BR>
    Этот месяц: <BR>
    <input name="next" type="number"><BR>
    Тариф: <br>
    <input name="tarif" type="number" required>
    <BR>
    <BR>
    <input type="submit" value="Вычислить">
    <div label>Результат: </label><input name="result" id="calc_result" value="<?php echo $res ?>"  disabled="disabled" size="4" />
    </div>
</form>
</body>
</html>
