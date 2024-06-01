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
            // var_dump($theGirls);
            // foreach($theGirls as $name => $age){
            //     echo "<li>$name is $age years old</li>";
            // }
            
        ?>
    </ul>



    <?php
$fullDetails = [
    [1, "Nayeem", 25, "Dhaka"],
    [2, "Zioun", 21, "Dhaka"],
    [3, "Tishat", 19, "Dhaka"],
    [4, "Rafi", 14, "Borguna"],
    [5, "Rohan", 12, "Barishal"],
    [6, "Sohan", 2, "Barishal"],
];
echo "<table border='1'>";
for ($x = 0; $x < count($fullDetails); $x++) {
    echo "<tr>";
        for ($i = 0; $i < count($fullDetails[$x]); $i++){
            
                echo "<td>". $fullDetails[$x][$i] ."</td>";
            
        }
        echo "</tr>";
    }
echo "</table>";
?>