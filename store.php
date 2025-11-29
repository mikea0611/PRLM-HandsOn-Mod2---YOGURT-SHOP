<?php
include 'header.php';
?>

<div class="container">
    <h2>Choose Your Yogurt</h2>

    <form method="post">
        
        <!-- Flavor -->
        <label for="flavor">Choose a flavor:</label>
        <select name="flavor" id="flavor">
            <?php
            $flavors = ["Vanilla", "Chocolate", "Strawberry", "Mango"];

            foreach ($flavors as $flavor) {
                echo "<option value='$flavor'>$flavor</option>";
            }
            ?>
        </select>

        <br><br>

        <!-- Cup Size -->
        <label for="size">Choose your cup size:</label>
        <select name="size" id="size">
            <?php
            $sizes = ["Small", "Medium", "Large"];

            foreach ($sizes as $size) {
                echo "<option value='$size'>$size</option>";
            }
            ?>
        </select>

        <br><br>

        <!-- Toppings -->
        <label>Choose your toppings:</label><br>
        <?php
        $toppings = ["Oreo Crumbs", "Sprinkles", "Granola", "Nuts"];
        foreach ($toppings as $t) {
            echo "<input type='checkbox' name='toppings[]' value='$t'> $t <br>";
        }
        ?>

        <br>

        <!-- Sweetness Level -->
        <label for="sweetness">Sweetness Level:</label>
        <select name="sweetness" id="sweetness">
            <?php
            $levels = ["Low", "Medium", "High"];
            foreach ($levels as $lvl) {
                echo "<option value='$lvl'>$lvl</option>";
            }
            ?>
        </select>

        <br><br>

        <!-- Payment Method -->
        <label for="payment">Payment Method:</label>
        <select name="payment" id="payment">
            <?php
            $payments = ["Cash", "GCash", "Bank"];
            foreach ($payments as $pay) {
                echo "<option value='$pay'>$pay</option>";
            }
            ?>
        </select>

        <br><br>

        <!-- Quantity -->
        <label for="qty">Quantity:</label>
        <input type="number" name="qty" id="qty" min="1" value="1">

        <br><br>

        <button type="submit" name="submit">Submit</button>
    </form>

    <hr>

    <?php
    if (isset($_POST['submit'])) {
        $flavor = $_POST['flavor'];
        $size = $_POST['size'];
        $sweetness = $_POST['sweetness'];
        $payment = $_POST['payment'];
        $qty = $_POST['qty'];

        echo "<h3>Order Summary</h3>";
        echo "<p>You selected: <strong>$flavor</strong> flavor with a <strong>$size</strong> cup size.</p>";

        // Flavor message
        if ($flavor == "Vanilla") {
            echo "<p>Enjoy a classic vanilla yogurt! It's a great choice.</p>";
        } elseif ($flavor == "Chocolate") {
            echo "<p>Chocolate lovers unite! Your chocolate yogurt is sure to satisfy.</p>";
        } elseif ($flavor == "Strawberry") {
            echo "<p>Fresh and fruity! Strawberry yogurt is always a great pick!</p>";
        } elseif ($flavor == "Mango") {
            echo "<p>Refreshing and tropical! Mango yogurt is perfect for hot days.</p>";
        }

        // Cup size message
        if ($size == "Small") {
            echo "<p>Small size is perfect for a quick treat.</p>";
        } elseif ($size == "Medium") {
            echo "<p>Medium size for when you're feeling just right!</p>";
        } elseif ($size == "Large") {
            echo "<p>Large size for when you need a big indulgence!</p>";
        }

        // Toppings (ONE conditional + ONE loop)
        if (!empty($_POST['toppings'])) {
            echo "<p>You added these toppings:</p><ul>";
            foreach ($_POST['toppings'] as $t) {
                echo "<li>$t</li>";
            }
            echo "</ul>";
        } else {
            echo "<p>No toppings added.</p>";
        }

        // Sweetness
        echo "<p>Sweetness Level: <strong>$sweetness</strong></p>";

        // Payment method
        echo "<p>Payment Method: <strong>$payment</strong></p>";

        // Quantity
        if ($qty > 1) {
            echo "<p>Quantity: <strong>$qty cups</strong></p>";
        } else {
            echo "<p>Quantity: <strong>1 cup</strong></p>";
        }
    }
    ?>

</div>

<?php include 'footer.php'; ?>
