<?php?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form id="myForm" action="process.php" method="post">
    <div>
        <h1>Cupcake Fundraiser</h1>
    </div>
    <p>Your name: </p>
    <div>
        <label><input type="text" name="fname" placeholder="Please input your name" </label>
    </div>

    <div>
        <p>Cupcake flavors: </p>
    </div>

    <div class="form-check">
        <label class='form-check-label'><input type='checkbox' name='flavor[]' value="The Grasshopper">The Grasshopper</label>
    </div>
    <div class="form-check">
        <label class='form-check-label'><input type='checkbox' name='flavor[]' value="Whiskey Maple Bacon">Whiskey Maple Bacon</label>
    </div>
    <div class="form-check">
        <label class='form-check-label'><input type='checkbox' name='flavor[]' value="Carrot Walnut">Carrot Walnut</label>
    </div>
    <div class="form-check">
        <label class='form-check-label'><input type='checkbox' name='flavor[]' value="Salted Caramel Cupcake">Salted Caramel Cupcake</label>
    </div>
    <div class="form-check">
        <label class='form-check-label'><input type='checkbox' name='flavor[]' value="Red Velvet">Red Velvet</label>
    </div>
    <div class="form-check">
        <label class='form-check-label'><input type='checkbox' name='flavor[]' value="Tiramisu">Tiramisu</label>

        <br><button class="btn btn secondary" type="submit" value="Order" name="button">Order</button>


</form>

</body>
</html>
