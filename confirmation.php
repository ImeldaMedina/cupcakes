<?php
/**
 * @author Imelda Medina
 * @version 1.0
 * confirmation.php
 * 1/10/2020
 * This program will create a thank you message for the client and a
 * brief description of the order and the total
 */

//validate the data
    $isValid=true;
//Thank you message with the name of the person printed
$name= $_POST['name'];
$realName=preg_match('/^[a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*/', $name);
if(!empty($name)) {
    if ($realName) {
        echo "Thank you, " . $name . ", for your order!" . "<br>" . "<br>";
    }
    else{
        echo "<p>Please enter a valid name</p>";
    }
}
else {
    echo "<p>First name is required</p>";
    $isValid = false;
}

//Print the cupcake flavors selected
$flavors = $_POST['flavors'];

if (isset($flavors)) {
    if ($realName) {
        echo 'Order Summary:' . '<br>' . '<br>';
        foreach ($flavors as $key => $value) {
            echo $value . '<br>' . '<br>';
        }
    }
} else {
    echo "You haven't selected any flavor";
    $isValid = false;
}
//Count the flavors selected
$checked_arr = $_POST['flavors'];
$count = count($checked_arr);

//Each cupcake is $3.50 sum the cupcakes selected and print the total
if(isset($flavors)){
    if($realName){
        if($count >= 1) {
            $sum = 3.50 * $count;
            echo "Order Total: \$" . $sum;
        }
    }
    else{
        $isValid=false;
    }
}