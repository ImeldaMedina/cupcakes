
<?php
/**
 * @author Imelda Medina
 * @version 1.0
 * index.php
 * 1/10/2020
 * This program is for a cupcake fundraiser where a client can buy 7 different kinds of cupcakes this form will
 * capture the client's information and send it to a confirmation page.
 */
$name=$_POST['name'];
//Turn on error reporting
ini_set('display_errors',1);
error_reporting(E_ALL);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Cupcake Fundraiser</title>
    <!--Favicon-->
    <link rel="icon" type="image/jpg" href="images/cupcake.jpg">
    <link rel="stylesheet" type="text/css" href="cupcakes.css">
    <title>Cupcake Fundraiser</title>
</head>
<body>
<div align="center">
    <div class="jumbotron">
        <h1 class="display-4">Cupcake Fundraiser</h1>
    </div>
</div>

<form action="confirmation.php" method="post">

    <div class="form-name">
        <label for="fName">Your name:</label><br>
        <input type="text" class="form-control" name="name" value="<?php echo $name; ?>" />
        <span class="err" id="err-name">
            Please enter your name</span>
    </div>
    <br>
    <legend>Cupcake flavors:</legend>

    <?php
    $flavors= array( "grasshoper" => "The Grasshopper", "mapple" => "Whiskey Maple Bacon", "carrot" => "Carrot Walnut",
    "caramel" => "Salted Caramel Cupcake", "velvet" => "Red Velvet", "lemon" => "Lemon Drop", "tiramisu" => "Tiramisu");

    foreach($flavors as $key => $flavor){
        echo "<input type='checkbox' name='flavors[]' value='".$flavors[$key]."'>".$flavor."<br>";
    }

    ?>



    <div>
        <button type="submit">Order</button>

    </div>
</form>
    <script src="js/jquery.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>