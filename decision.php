<!-- decision.php -->
<?php require('header.php'); ?>

    <?php
    // Retrieve form data
    $title = $_POST['title'];
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $role = $_POST['role'];

    // Logic based on role
    if ($role == 'Role1') {
        // Display specific results for Role1
        echo "<h1>Welcome Role1!</h1>";
        echo "<p>Title: $title</p>";
        echo "<p>First Name: $firstName</p>";
        echo "<p>Last Name: $lastName</p>";
        // ...
    } elseif ($role == 'Role2') {
        // Display specific results for Role2
        echo "<h1>Welcome Role2!</h1>";
        echo "<p>Title: $title</p>";
        echo "<p>First Name: $firstName</p>";
        echo "<p>Last Name: $lastName</p>";
        // ...
    } elseif ($role == 'Role3') {
        // Display specific results for Role3
        echo "<h1>Welcome Role3!</h1>";
        echo "<p>Title: $title</p>";
        echo "<p>First Name: $firstName</p>";
        echo "<p>Last Name: $lastName</p>";
        // ...
    } else {
        // Handle other roles or errors
        echo "<h1>Error: Invalid Role</h1>";
    }
    ?>

<?php require('footer.php'); ?>
