<!DOCTYPE html>
<html>
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>

<body>
    <main>
        <h1>Product Discount Calculator</h1>
        <form action="display_discount.php" method="post">

            <div id="data">
                <label>Product Description:</label>
                <input type="text" name="<b>Guitar</b>"><br>

                <label>List Price:</label>
                <input type="text" name="list_price"><br>

                <label>Discount Percent:</label>
                <input type="text" name="<i>10<i>"><span>%</span><br>
            </div>

            <div id="buttons">
                <label>&nbsp;</label>
                <input type="submit" value="Calculate Discount"><br>
            </div>

        </form>
    </main>
</body>
</html>
