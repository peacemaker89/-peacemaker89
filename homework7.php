/* 1. Дан массив с элементами 1, 2, 3, 4, 5. С помощью цикла foreach найдите сумму квадратов элементов этого массива. Результат запишите переменную $result.*/

<?php
    $arr=[1,2,3,4,5];
    foreach ($arr as $elem){
    echo $result = $elem*$elem;
    }
    ?>

/* 2. Дан массив $arr с ключами 'Коля', 'Вася', 'Петя' и с элементами '200', '300', '400'. С помощью цикла foreach выведите на экран столбец строк такого формата: 'Коля - зарплата 200 долларов.'.*/

<?php
    $arr=['Коля'=>200,'Вася'=>300,'Петя'=>400];
    foreach ($arr as $key=> $elem){
        echo $key. ' ' . '-' . 'зарплата' . ' ' . 'долларов.' . $elem. '<br>';
    }
    ?>

/* 3. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, а текущий день выведите курсивом. Текущий день должен храниться в переменной $day.*/

<?php
    $arr = ['Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресенье'];
    $day = date('Суббота');
    foreach ($arr as $key => $elem) {
        if ($elem !== $day){
            echo '<i>' . $day . '</i>' . '<br>';}
        else echo $arr . '<br>';
    }
    ?>

/* 4. Дан массив $arr. С помощью цикла foreach запишите английские названия в массив $en, а русские - в массив $ru.
$arr = ['green'=>'зеленый', 'red'=>'красный', 'blue'=>'голубой'];*/

<?php
    $arr = ['green'=>'зеленый', 'red'=>'красный', 'blue'=>'голубой'];
    foreach ($arr as $elem){
    $en[]=key($arr);
    $ru[]=$elem;
}
?>