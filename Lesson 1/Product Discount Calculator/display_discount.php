<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") :
    $description = $_POST["description"];
    $price = $_POST["price"];
    $discount = $_POST["discount"];
?>
    <div>
        <p>Mô tả: <?php echo $description ?></p>
        <p>Giá: <?php echo $price ?></p>
        <p>Giảm: <?php echo $discount ?></p>
    </div>
    <?php
    $discount_amount = $discount * $price * 0.01;
    $discount_price =  $price - $discount_amount;
    ?>
    <div>
        <p>Được giảm: <?php echo $discount_amount ?></p>
        <p>Giá sau giảm: <?php echo $discount_price ?></p>
    </div>
<?php
endif;
