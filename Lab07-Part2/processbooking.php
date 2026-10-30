
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Booking Confirmation</title>
</head>
<body>

    <h1>Rohirrim Tour Booking Confirmation</h1>
    
    <?php
    // Extract personal details
    $firstname = isset($_POST['firstname']) ? $_POST['firstname'] : "";
    $lastname = isset($_POST['lastname']) ? $_POST['lastname'] : "";
    $age = isset($_POST['age']) ? $_POST['age'] : "";
    $species = isset($_POST['species']) ? $_POST['species'] : "";

    // Extract booking details
    $accom = isset($_POST['accom']) ? $_POST['accom'] : "Not selected";
    $day4 = isset($_POST['4day']) ? $_POST['4day'] : "Not selected";
    $day10 = isset($_POST['10day']) ? $_POST['10day'] : "Not selected";

    $food = isset($_POST['food']) ? $_POST['food'] : "";
    $bookday = isset($_POST['bookday']) ? $_POST['bookday'] : "";
    $partysize = isset($_POST['partysize']) ? $_POST['partysize'] : "";

    // Display confirmation
    echo "<p>First name: " . htmlspecialchars($firstname) . "</p>";
    echo "<p>Last name: " . htmlspecialchars($lastname) . "</p>";
    echo "<p>Age: " . htmlspecialchars($age) . "</p>";
    echo "<p>Species: " . htmlspecialchars($species) . "</p>";

    echo "<p>Accommodation: " . htmlspecialchars($accom) . "</p>";
    echo "<p>4 Day Tour: " . htmlspecialchars($day4) . "</p>";
    echo "<p>10 Day Tour: " . htmlspecialchars($day10) . "</p>";

    echo "<p>Food preference: " . htmlspecialchars($food) . "</p>";
    echo "<p>Booking date: " . htmlspecialchars($bookday) . "</p>";
    echo "<p>Number of travellers: " . htmlspecialchars($partysize) . "</p>";
    ?>


</body>
</html>
