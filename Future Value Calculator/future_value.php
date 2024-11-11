<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") :
    $investment = $_POST["investment"];
    $interest = $_POST["interest"];
    $years = $_POST["years"];
?>
    <?php
    for ($i = 0; $i < $years; $i++) {
        $investment = $investment + $investment * $interest * 0.01;
    }
    ?>
    <div>
        <p>Giá trị sau <?php echo $years ?> là: <?php echo $investment ?></p>
    </div>
<?php
endif;
