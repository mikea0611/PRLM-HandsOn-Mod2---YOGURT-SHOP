<?php
include 'header.php';
?>

<div class="container">
    <h2>Choose Your Yogurt</h2>

    <form method="post">
        
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

        <!-- Choose Cup Size -->
        <label for="size">Choose your cup size:</label>
        <select name="size" id="size">
            <?php
            // Available sizes
            $sizes = ["Small", "Medium", "Large"];

            foreach ($sizes as $size) {
                echo "<option value='$size'>$size</option>";
            }
            ?>
        </select>

        <br><br>

        <button type="submit" name="submit">Submit</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $flavor = $_POST['flavor'];
        $size = $_POST['size'];

        echo "<p>You selected: <strong>$flavor</strong> flavor with a <strong>$size</strong> cup size.</p>";

        // Conditional statement to show messages based on flavor
        if ($flavor == "Vanilla") {
            echo "<p>Enjoy a classic vanilla yogurt! It's a great choice.</p>";
        } elseif ($flavor == "Chocolate") {
            echo "<p>Chocolate lovers unite! Your chocolate yogurt is sure to satisfy.</p>";
        } elseif ($flavor == "Strawberry") {
            echo "<p>Fresh and fruity! Strawberry yogurt is always a great pick!</p>";
        } elseif ($flavor == "Mango") {
            echo "<p>Refreshing and tropical! Mango yogurt is perfect for hot days.</p>";
        }

        // Conditional statement for cup size
        if ($size == "Small") {
            echo "<p>Small size is perfect for a quick treat.</p>";
        } elseif ($size == "Medium") {
            echo "<p>Medium size for when you're feeling just right!</p>";
        } elseif ($size == "Large") {
            echo "<p>Large size for when you need a big indulgence!</p>";
        }
    }
    ?>

</div>

<?php include 'footer.php'; ?>
