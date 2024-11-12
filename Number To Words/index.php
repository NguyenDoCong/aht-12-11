<!DOCTYPE html>
<html>

<body>

    <h2>HTML Forms</h2>

    <form action="" method="post">
        <label for="number">Your number:</label><br>
        <input type="text" id="number" name="number"><br>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") :
        $number = $_POST["number"];
        $hundreds = intdiv($number, 100);
        $tens = intdiv($number - $hundreds * 100, 10);
        $ones = $number % 10;
        $answer = "";
        $answer_hundreds = "";
        $answer_tens = "";
        $answer_ones = "";
        if ($number >= 0 && $number < 1000):

            if ($hundreds < 10 && $hundreds >= 1) :
                switch ($hundreds) {
                    case 1: {
                            $answer_hundreds = "one hundred";
                            break;
                        }
                    case 2: {
                            $answer_hundreds = "two hundreds";
                            break;
                        }
                    case 3: {
                            $answer_hundreds = "three hundreds";
                            break;
                        }
                    case 4: {
                            $answer_hundreds = "four hundreds";
                            break;
                        }
                    case 5: {
                            $answer_hundreds = "five hundreds";
                            break;
                        }
                    case 6: {
                            $answer_hundreds = "six hundreds";
                            break;
                        }
                    case 7: {
                            $answer_hundreds = "seven hundreds";
                            break;
                        }
                    case 8: {
                            $answer_hundreds = "eight hundreds";
                            break;
                        }
                    case 9: {
                            $answer_hundreds = "nine hundreds";
                            break;
                        }
                    default:
                        $answer_hundreds = "";
                }
            else:
                $answer_hundreds = "";
            endif;

            if ($tens < 10 && $tens >= 2):
                switch ($tens) {
                    case 2: {
                            $answer_tens = "twenty";
                            break;
                        }
                    case 3: {
                            $answer_tens = "thirty";
                            break;
                        }
                    case 4: {
                            $answer_tens = "forty";
                            break;
                        }
                    case 5: {
                            $answer_tens = "fifty";
                            break;
                        }
                    case 6: {
                            $answer_tens = "sixty";
                            break;
                        }
                    case 7: {
                            $answer_tens = "seventy";
                            break;
                        }
                    case 8: {
                            $answer_tens = "eightty";
                            break;
                        }
                    case 9: {
                            $answer_tens = "ninety";
                            break;
                        }
                    default:
                        $answer_tens = "";
                }

            elseif ($tens === 0):
                $answer_tens = "";
            endif;

            switch ($ones) {
                case 1: {
                        $answer_ones = " one";
                        break;
                    }
                case 2: {
                        $answer_ones = " two";
                        break;
                    }
                case 3: {
                        $answer_ones = " three";
                        break;
                    }
                case 4: {
                        $answer_ones = " four";
                        break;
                    }
                case 5: {
                        $answer_ones = " five";
                        break;
                    }
                case 6: {
                        $answer_ones = " six";
                        break;
                    }
                case 7: {
                        $answer_ones = " seven";
                        break;
                    }
                case 8: {
                        $answer_ones = " eight";
                        break;
                    }
                case 9: {
                        $answer_ones = " nine";
                        break;
                    }
                default:
                    $answer_ones = "";
            }

            if ($tens === 1):
                $answer_ones = "";
                switch ($ones) {
                    case 0: {
                            $answer_tens = "ten";
                            break;
                        }
                    case 1: {
                            $answer_tens = "eleven";
                            break;
                        }
                    case 2: {
                            $answer_tens = "twelve";
                            break;
                        }
                    case 3: {
                            $answer_tens = "thirteen";
                            break;
                        }
                    case 4: {
                            $answer_tens = "fourteen";
                            break;
                        }
                    case 5: {
                            $answer_tens = "fifteen";
                            break;
                        }
                    case 6: {
                            $answer_tens = "sixteen";
                            break;
                        }
                    case 7: {
                            $answer_tens = "seventeen";
                            break;
                        }
                    case 8: {
                            $answer_tens = "eightteen";
                            break;
                        }
                    case 9: {
                            $answer_tens = "nineteen";
                            break;
                        }
                    default:
                        $answer_tens = "";
                }
            endif;

            $answer = $answer_hundreds . " and " . $answer_tens . $answer_ones;
            if ($number == 0):
                $answer = "zero";
            endif;
            if ($number == 100):
                $answer = "one hundred";
            endif;

        else:
            $answer = "out of ability";

        endif;


    ?>

        <div>
            <p>Number: <?php echo $number ?></p>
            <p>Number to text: <?php echo $answer ?></p>
        </div>
    <?php
    endif;
    ?>

</body>

</html>