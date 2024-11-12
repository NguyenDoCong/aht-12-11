<!DOCTYPE html>
<html>

<body>

    <h2>HTML Forms</h2>

    <?php
    function checkPrime($n)
    {
        if ($n == 2):
            return true;
        else:
            for ($i = 2; $i <= $n / 2; $i++) {
                if ($n % $i == 0) {
                    return false;
                }
            }
            return true;
        endif;
    }
    ?>
    <div>
        <p>Prime numbers:
            <?php
            for ($i = 2; $i < 100; $i++): {
                    if (checkPrime($i)): ?>
                        <span><?php echo $i ?></span>
            <?php
                    endif;
                }

            endfor; ?>

        </p>
    </div>
</body>

</html>