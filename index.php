<?php
$destination = "Your Dream Destination"; // change this anytime

$attractions = [
    "Scenic Mountain Viewpoint",
    "Historic Old Town Walk",
    "Sunset Beach Experience",
    "Local Cultural Museum",
    "Adventure Nature Trail"
];

$hotels = [
    ["name" => "Budget Inn Stay", "price" => "$40/night", "rating" => "4.1"],
    ["name" => "City Comfort Lodge", "price" => "$55/night", "rating" => "4.3"],
    ["name" => "Traveler’s Rest Hotel", "price" => "$50/night", "rating" => "4.0"],
    ["name" => "Green Valley Stay", "price" => "$45/night", "rating" => "4.2"],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Local Tourism Guide</title>

<!-- Modern font -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

<style>
    body {
        margin: 0;
        font-family: "Poppins", sans-serif;
        background: #f4f7fb;
        color: #333;
    }

    header {
        background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
        color: white;
        padding: 20px;
        text-align: center;
    }

    .banner {
        width: 100%;
        height: 320px;
        background: url('https://source.unsplash.com/1600x600/?travel,nature') center/cover;
    }

    .container {
        width: 90%;
        max-width: 1100px;
        margin: auto;
        padding: 20px;
    }

    h2 {
        color: #2c5364;
        border-left: 5px solid #2c5364;
        padding-left: 10px;
        margin-top: 30px;
    }

    ul {
        background: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 3px 10px rgba(0,0,0,0.1);
    }

    table {
        width: 100%;
        border-collapse: collapse;
        background: white;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 3px 10px rgba(0,0,0,0.1);
    }

    th, td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #eee;
    }

    th {
        background: #2c5364;
        color: white;
    }

    .form-box {
        background: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 3px 10px rgba(0,0,0,0.1);
    }

    input, button {
        width: 100%;
        padding: 10px;
        margin-top: 10px;
        border-radius: 6px;
        border: 1px solid #ccc;
        font-family: inherit;
    }

    button {
        background: #2c5364;
        color: white;
        border: none;
        cursor: pointer;
    }

    button:hover {
        background: #1b2e3a;
    }

    footer {
        text-align: center;
        padding: 15px;
        margin-top: 30px;
        background: #0f2027;
        color: white;
    }
</style>
</head>

<body>

<header>
    <h1>Roll Number: 24</h1>
    <h2 style="border:none; color:#ffd369;">Theme: Local Tourism Guide</h2>
    <p>Explore <?php echo $destination; ?> with style</p>
</header>

<div class="banner"></div>

<div class="container">

    <h2>Top 5 Must-Visit Attractions</h2>
    <ul>
        <?php foreach ($attractions as $place): ?>
            <li><?php echo $place; ?></li>
        <?php endforeach; ?>
    </ul>

    <h2>Nearby Budget-Friendly Hotels</h2>
    <table>
        <tr>
            <th>Hotel Name</th>
            <th>Price</th>
            <th>Rating</th>
        </tr>

        <?php foreach ($hotels as $hotel): ?>
        <tr>
            <td><?php echo $hotel["name"]; ?></td>
            <td><?php echo $hotel["price"]; ?></td>
            <td><?php echo $hotel["rating"]; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

    <h2>Quick Tour Booking Form</h2>
    <div class="form-box">
        <form method="post">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Email Address" required>
            <input type="date" name="date" required>
            <input type="number" name="people" placeholder="Number of People" required>
            <button type="submit">Book Now</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            echo "<p style='color:green; margin-top:10px;'>
                    Booking received! We will contact you soon.
                  </p>";
        }
        ?>
    </div>

</div>

<footer>
    © <?php echo date("Y"); ?> Tourism Guide | Designed for Academic Project
</footer>

</body>
</html>
