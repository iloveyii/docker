<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Products list</title>
</head>
<body>
    <h1>Welcome to fresh fruits and candies shop</h1>
    <ul>
        <?php
            $json = file_get_contents('http://product-service');
            $obj = json_decode($json);

            $products = $obj->products;

            foreach ($products as $product) {
                echo "<li>{$product}</li>";
            }
        ?>
    </ul>

</body>
</html>
