<!-- form.php -->
<?php require('header.php'); ?>

    <h1>Form</h1>
    <form action="decision.php" method="post">
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" required>
        <br>
        <label for="first_name">First Name:</label>
        <input type="text" name="first_name" id="first_name" required>
        <br>
        <label for="last_name">Last Name:</label>
        <input type="text" name="last_name" id="last_name" required>
        <br>
        <label for="role">Role:</label>
        <select name="role" id="role" required>
            <option value="Role1">Role 1</option>
            <option value="Role2">Role 2</option>
            <option value="Role3">Role 3</option>
        </select>
        <br>
        <input type="submit" value="Submit">
    </form>

<?php require('footer.php'); ?>
