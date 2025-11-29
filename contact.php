<?php include 'header.php'; ?>

<div class="container">
    <h2>Contact Us</h2>
    <p>If you have any questions, feedback, or concerns, feel free to reach out using the form below.</p>

    <form method="post">
        <label for="name">Your Name:</label>
        <input type="text" name="name" id="name" required>

        <label for="email">Your Email:</label>
        <input type="email" name="email" id="email" required>

        <label for="subject">Subject:</label>
        <input type="text" name="subject" id="subject" required>

        <label for="message">Message:</label>
        <textarea name="message" id="message" rows="5" required></textarea>

        <button type="submit" name="submit">Send Message</button>
    </form>

    <hr>

    <!-- SOCIAL + LOCATION SECTION -->
    <h3>Find Us</h3>

    <p><strong>Address:</strong><br>
       123 Yogurt Street, San Fernando, Pampanga, Philippines
    </p>

    <p><strong>Phone:</strong><br>
       0912-345-6789
    </p>

    <p><strong>Email:</strong><br>
       support@yogurtshop.com
    </p>

    <h3>Follow Us</h3>

    <ul>
        <li><strong>Facebook:</strong> <a href="#">facebook.com/YogurtShop</a></li>
        <li><strong>Instagram:</strong> <a href="#">instagram.com/YogurtShop</a></li>
        <li><strong>TikTok:</strong> <a href="#">tiktok.com/@YogurtShop</a></li>
    </ul>

    <hr>

    <?php
    if (isset($_POST['submit'])) { 
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $subject = htmlspecialchars($_POST['subject']);
        $message = nl2br(htmlspecialchars($_POST['message']));

        echo "<h3>Message Received</h3>";
        echo "<p><strong>Name:</strong> $name</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Subject:</strong> $subject</p>";
        echo "<p><strong>Message:</strong><br>$message</p>";
    }
    ?>
</div>

<?php include 'footer.php'; ?>
