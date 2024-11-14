<!DOCTYPE html>
<html>

<body>

    <h2>HTML Forms</h2>

    <form action="/AHT%20Nov/12.11/Future%20Value%20Calculator/future_value.php" method="post">
        <label for="investment">Investment Amount:</label><br>
        <input type="text" id="investment" name="investment"><br>
        <label for="interest">Yearly Interest Rate:</label><br>
        <input type="text" id="interest" name="interest"><br><br>
        <label for="years">Number of Years:</label><br>
        <input type="text" id="years" name="years"><br><br>
        <input type="submit" value="Submit">
    </form>

    <p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>

</html>
