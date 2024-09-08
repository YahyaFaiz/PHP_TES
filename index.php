<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Example</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <form action="formhandler.php" method="POST">
            <label for="firstname">First Name:</label>
            <input required id="firstname" type="text" name="firstname" placeholder="Enter your first name">

            <label for="lastname">Last Name:</label>
            <input id="lastname" type="text" name="lastname" placeholder="Enter your last name">

            <label for="favouritepet">Favorite Pet:</label>
            <select name="favouritepet" id="favouritepet">
                <option value="none">None</option>
                <option value="dog">Dog</option>
                <option value="cat">Cat</option>
                <option value="bird">Bird</option>
            </select>
            <button type="submit">Submit</button>
        </form>
    </main>
</body>

</html>
