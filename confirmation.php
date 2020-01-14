<?php
/**
 * @author Imelda Medina
 * @version 1.0
 * 1/10/2020
 */

//Thank you message with the name of the person printed
$name= $_POST['name'];
if(isset($name)) {
    echo "Thank you, " . $name . ", for your order!" . "<br>" . "<br>";
}

//Print the cupcake flavors selected
$flavors = $_POST['flavors'];

if (isset($flavors)) {
    echo 'Order Summary:' . '<br>' . '<br>';
    foreach ($flavors as $key => $value) {
        echo $value . '<br>'. '<br>';
    }
} else {
    echo "You haven't selected any flavor";
}
//Count the flavors selected
$checked_arr = $_POST['flavors'];
$count = count($checked_arr);

//Each cupcake is $3.50 sum the cupcakes selected and print the total
if(isset($flavors)){
    if($count >= 1) {
        $sum= 3.50 * $count;
    }
    echo "Order Total: \$".$sum;
}