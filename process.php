<?php

define(COST, 3.50);
$flavors = "";
$f_name = "";

$isValid = true;

if (empty($_POST['fname'])){
    $isValid = false;
    echo "Enter your first name.<br>";
}
else{
    $f_name = $_POST['fname'];
}

if (empty($_POST['flavor'])){
    $isValid = false;
    echo "Please select your flavor.";
}

else{
    $flavors = $_POST['flavor'];
}
if($isValid){

    $price = 0.0;

    $count = sizeof($_POST['flavor']);

    $price += $count*COST;


    $price = number_format($price, 2);

    echo "<br><p>Thank you $f_name, for your order!</p>";
    echo "<p>Order Summary:</p>";
    echo "<ul>";
    echo "<li>" . implode( "</li><li>", $flavors) . "</li>";
    echo "</ul>";

    echo"<p>Order Total:</p>";
    echo "<p>$$price</p>";

}

