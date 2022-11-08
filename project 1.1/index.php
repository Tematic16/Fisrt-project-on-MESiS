<?php
//echo "Hello World!";
//$a="Hi, Artem!";
//$b="How are you?";
//echo "<br>";
//echo $a;
//echo "<br>";
//echo $b;
//echo "<br>";
//$a=5;
//$b=15;
//if ($a>$b) {
//    echo "Больше - " . $a . "<br>";
//}
//else if ($a<$b){
//    echo "Больше - " . $b . "<br>";
//}
//else {
//    echo "Равны" . "<br>";
//}
//function summa($arg1, $arg2) {
//    return $arg1 + $arg2;
//}
//function splitt($arg1, $arg2) {
//    if ($arg2 == 0){
//        return "Нельзя на 0 делить!";
//    }
//    return $arg1 / $arg2;
//}
//echo summa(28,18);
//echo "<br>";
//echo splitt(28,18);
//
//function math($arg1, $arg2, $operation){
//    switch ($operation){
//        case "Сложение":
//            echo summa($arg1,$arg2);
//        break;
//        case "Деление":
//            echo splitt($arg1,$arg2);
//        break;
//        default:
//            echo "Что то пошло не так!";
//    }
//}
//echo "<br>";
//echo " Оператор switch " , math(10, 10, "Сложение");
//echo "<br>";
//for ($i=0; $i<=100; $i++){
//    if ($i%3==0){
//        echo $i, " ";
//        echo "<br>";
//    }
//}
//$i=0;
//while ($i!=100){
//    if ($i%3==0){
//        echo $i," ";
//    }
//    $i=$i+1;
//}
//$myArray = [];//Это массив!
//var_dump ($myArray);
//echo "<br>";
//$myArray[] = true;
//$myArray[] = 1;
//$myArray[] = "Привет";
//var_dump ($myArray);
//$agr =["html","css","php","js","mysgl"];
//    for ($i =0; $i<count($agr); $i++){
//        echo $agr[$i]," ";
//    }
//echo "<br>";
//foreach ($agr as $item){
//    echo $item, " ";
//}

//$users=[];
//
//$users[0]=[
//    "name"=> "Alex",
//    "email"=>"123456@gmail.com"
//];
//$users[1]=[
//    "name"=> "Alex",
//    "email"=>"123456@gmail.com"
//];
//$users[2]=[
//    "name"=> "Alex",
//    "email"=>"123456@gmail.com"
//];
//    
//foreach ($users as $key => $item){
//    echo "Ключ ",$key, "<br>";
//    foreach ($item as $value){
//        echo "Значение ", $value, "<br>";
//    }
//}
function rasn($arg1, $arg2) {
    return $arg1 - $arg2;
}
function summa($arg1, $arg2) {
    return $arg1 + $arg2;
}
function umn($arg1, $arg2) {
    return $arg1 * $arg2;
}
function splitt($arg1, $arg2) {
    if ($arg2 == 0){
        return "Нельзя на 0 делить!";
    }
    return $arg1 / $arg2;
}
function math($arg1, $arg2, $operation){
    switch ($operation){
        case "Сложение":
            echo summa($arg1,$arg2);
        break;
        case "Деление":
            echo splitt($arg1,$arg2);
        break;
        case "Вычитание":
            echo rasn($arg1,$arg2);
        break;
        case "Умножение":
            echo umn($arg1,$arg2);
        break;
        default:
            echo "Что то пошло не так!";
    }
}
echo " Оператор switch " , math(10, 10, "Вычитание");



?>