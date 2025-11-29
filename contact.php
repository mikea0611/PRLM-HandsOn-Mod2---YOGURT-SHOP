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
