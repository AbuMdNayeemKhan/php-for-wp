<?php
    // Variables
    // $test = "Hello World 1";
    // $another = "We Love PHP";
    // $str = "Abu Md Nayeem Khan";
    // $int = 1619981998;
    // $bull = true;
    // var_dump($str);
    // echo $another;

    // Arithmetic Operators
    $x = 10;
    $y = 2;
    $add = $x + $y;
    $sub = $x - $y;
    $mul = $x * $y;
    $div = $x / $y;
    $div = $x % $y;
    $div = $x ** $y;
    echo $div;

    // Compearijon operator
    // var_dump($x == $y);
    // var_dump($x === $y);
    // var_dump($x != $y);
    // var_dump($x !== $y);
    // var_dump($x < $y);
    // var_dump($x > $y);
    // var_dump($x <= $y);
    // var_dump($x >=  $y);
    $marks = 34;

    // conditional operator
    // if($marks <= 33 && $marks >= 100){
    //     echo "Pass";
    // } else if ($marks < 0 || $marks > 100){
    //     echo "In valid marks";
    // } else {
    //     echo "Fail";
    // }


?>
    <ul>
        <?php
            //for each loop
            $theBoys = ["Nayeem", "Zioun", "Tishat", "Rafi", "Rohan", "Sohan"];
            $theGirls = [
                "Shatul" => 20,
                "Meghla" => 21, 
                "Anika" => 12
            ];

            var_dump($theGirls)

            // foreach($theGirls as $name => $age){
            //     echo "<li>$name is $age years old</li>";
            // }
        ?>
    </ul>