<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Calculator</title>
</head>

<body>
    <h3>Добро пожаловать в простое приложение <i>калькулятор</i></h3>
    <form action="" method="get">
        <p>
            <label>Первое число
            <input type="number" name="f_number" placeholder="Введите число">
            </label>
        </p>
        <p>
            <label>Второе число
            <input type="number" name="s_number" placeholder="Введите число">
            </label>
        </p>
        <p>
            <label>Выберите действие:</label>
            <button class="action" value="+">+</button>
            <button class="action" value="-">-</button>
            <button class="action" value="*">*</button>
            <button class="action" value="/">/</button>
        </p>
        <button type="submit" value="count">Посчитать</button>
    </form>

<?php

    $f_number = $_GET['f_number'];
    $s_number = $_GET['s_number'];
    
    if($s_number == 0){
        die ("На ноль делить нельзя!");
    }
    
    $operation = $_GET['action'];

    function sum($x,$y){
        $res = $x + $y;
        return $res;
    }

    function diff($x,$y){
        $res = $x - $y;
        return $res;
    }

    function mult($x,$y){
        $res = $x * $y;
        return $res;
    }

    function div($x,$y){
        $res = $x / $y;
        return $res;
    }
    
    function mathOperation($arg1, $arg2, $operation){
        switch($operation){
            case "+":
            return sum($arg1, $arg2);
            break;
            case "-":
            return diff($arg1, $arg2);
            break;
            case "*":
            return mult($arg1, $arg2);
            break;
            case "/":
            return div($arg1, $arg2);
            break;
        }
    }
    
    $result = mathOperation($f_number, $s_number, $operation);
    
    echo "$f_number $operation $s_number" . " = " . "$result";
// Не работает
    echo '<script>
    var actions = document.querySelectorAll('.action');
    var actions = document.querySelectorAll('.action');
    
    actions.forEach( function (el, index){
        el.addEventListener('click', function (e){
            e.preventDefault();
        });
    });
</script>'    
?>
<!--Не работает-->
<script>
    var actions = document.querySelectorAll('.action');
    var actions = document.querySelectorAll('.action');
    
    actions.forEach( function (el, index){
        el.addEventListener('click', function (e){
            e.preventDefault();
        });
    });
</script>
</body>

</html>