<?php
$articles=[
        0=>[
            "header"=>"header_1",
            "content"=>"Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.",
            "src"=>"foto.jpg",
            "date"=>"28.03.19",
            "named"=>"author_1"
        ],
    1=>[
            "header"=>"header_2",
            "content"=>"Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.",
            "src"=>"foto.jpg",
            "date"=>"28.03.19",
            "named"=>"author_2"
        ],
    2=>[
            "header"=>"header_3",
            "content"=>"Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.",
            "src"=>"foto.jpg",
            "date"=>"28.03.19",
            "named"=>"author_3"
        ],
    3=>[
            "header"=>"header_4",
            "content"=>"Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.",
            "src"=>"foto.jpg",
             "date"=>"28.03.19",
             "named"=>"author_4"
        ]
];
?>
<!doctype html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<!-- ____________Таблица умножения___________
<table border="1">

   --><?php
//    $a=20;
//    $b=20;
//    for ($i=1;$i<=$a;$i++){
//        ?><!-- <tr> --><?php
//        for ($j=1;$j<=$b;$j++) {
//            ?><!-- <td bgcolor=#d3d3d3 align="center"> --><?php //echo $i*$j; ?>
<!---->
<!--         </td> --><?php //} ?><!-- </tr> --><?php //} ?>
<!--  </table>-->
<!---->
<!--______________task1________________-->
<?php ///*
//for ($i=1;$i<50;$i++):
//    if ($i%2!==0) {
//        echo $i." ";
//    };
//    endfor;
// */
//?>
<!---->
<!--_________________task2_________________-->
<!--<ul>-->
<?php
//$a=8;
//$i=1;
//while ($i<=$a){
//?><!-- <li> --><?php //echo "Категория ".$i; ?><!-- </li>-->
<!--    --><?php //$i++; };
// ?>
<!--</ul>-->

<!--_________________task4_________________-->
<!--<ul>-->
<!--    --><?php
//    $a=7;
//    for ($i=1;$i<=$a;$i++){
//        ?><!-- <li> --><?php //echo "Категория ".$i; ?><!-- </li>-->
<!--        --><?php //};
//    ?>
<!--</ul>-->
<!--_________________task3_________________-->
<!--<ul class="list-unstyled">-->
<?php
//foreach ($articles as $key=>$elem) { ?>
<!---->
<!--  <li class="media">-->
<!--    <img class="mr-3" src= --><?php //echo $elem["src"];?><!-- alt="Generic placeholder image">-->
<!--    <div class="media-body">-->
<!--      <h5 class="mt-0 mb-1">--><?php //echo $elem["header"];?><!--</h5>-->
<!--         --><?//= $elem["content"];?><!--<br>-->
<!--        --><?//= $elem["date"];?><!--<br>-->
<!--        --><?//= $elem["named"]?>
<!--    </div>-->
<!--  </li>-->
<?php //}; ?>
<?php ////require_once "index1.php";?><!--    _________________task5_________________-->
<!--</ul>-->

<!--_________________task6.1_________________-->
<?php
//$lang="ru";
//$ru=["пн","вт","ср","чт","пт","сб","вс"];
//$en=["md","ts","td","wd","fr","st","sd"];
//if ($lang=="ru") {
//    $arr=$ru;
//    };
//if ($lang==$en) {
//    $arr=$en;
//};
//echo "<pre>";
//var_dump($arr);
//echo "</pre>";
//?>
<!--_________________task6.2_________________-->
<?php
//$lang="en";
//switch ($lang) {
//    case "ru":
//        $arr=["пн", "вт", "ср", "чт", "пт", "сб", "вс"];
//        break;
//    case "en":
//        $arr=["md", "ts", "td", "wd", "fr", "st", "sd"];
//        break;
//};
//echo "<pre>";
//var_dump($arr);
//echo "</pre>";
//?>

<!--_______________task7_________________-->
<!--<pre>-->
<?php ///*
//$a=3;
//$arr[]="x";
//for ($i=0;$i<=$a;$i++) {
//    array_push($arr, $arr[$i] . "x");
//};
// var_dump($arr);
//*/
// ?>
<!--</pre>-->
<!--<>-->
<!--_______________task8_________________-->
<?php
//$arr=[3,3,3,3,3,6,7,1,1];
//for($i=0,$sum=0;$sum<10;$i++,$sum+=$arr[$i]);
//echo $i;
?>
<?php
//$arr = [2,5,9,15,0,4,18,25,4,100];
//foreach ($arr as $elem):
//    if($elem==4) {
//        echo "Есть<br>";
//break;
//    };
//endforeach;
//?>
<?php
//for ($c=0,$num=1000;$num>50;$num/=2,$c++);
//echo $c;
//?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
