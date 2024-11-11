<!DOCTYPE html>
<html>

<body>

    <h2>HTML Forms</h2>

    <form action="/AHT%20Nov/12.11/Product%20Discount%20Calculator/display_discount.php" method="post">
        <label for="description">Product Description:</label><br>
        <input type="text" id="description" name="description"><br>
        <label for="price">List Price:</label><br>
        <input type="text" id="price" name="price"><br><br>
        <label for="discount">Discount Percent:</label><br>
        <input type="text" id="discount" name="discount"><br><br>
        <input type="submit" value="Submit">
    </form>

    <p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>

</html>