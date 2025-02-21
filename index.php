<?php
    // Check if the success parameter is passed in the URL
    if (isset($_GET['success']) && $_GET['success'] == 'true') {
        $showSuccessMessage = true;
    } else {
        $showSuccessMessage = false;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create your account!</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="form">
        <div class="title">Welcome</div>
        <div class="subtitle">Let's create your account!</div>

        <form action="databaseConnection.php" method="POST" id="userForm">
            <div class="input-container ic1">
                <input id="firstname" class="input" type="text" name="firstname" placeholder=" " />
                <div class="cut"></div>
                <label for="firstname" class="placeholder">First name</label>
            </div>

            <div class="input-container ic2">
                <input id="lastname" class="input" type="text" name="lastname" placeholder=" " />
                <div class="cut"></div>
                <label for="lastname" class="placeholder">Last name</label>
            </div>

            <div class="input-container ic2">
                <input id="email" class="input" type="text" name="email" placeholder=" " />
                <div class="cut cut-short"></div>
                <label for="email" class="placeholder">Email</label>
            </div>

            <button type="submit" class="submit">Submit</button>
        </form>

        <?php
        // If success parameter exists, show the success message
        if ($showSuccessMessage) {
            echo "<div class='success-message' id='successMessage'>User added successfully!</div>";
        }
        ?>
    </div>

    <script src="script.js"></script>
</body>
</html>
