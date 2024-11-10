<?php
// brgy.php

include('db.php');  // Include the database connection

// Fetch barangay data
$query = "SELECT * FROM hotlines";  // Assuming you have a hotlines table
$result = $conn->query($query);

// Check if the query was successful
if ($result === false) {
    die("Query failed: " . $conn->error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barangay Hotlines</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Header -->
    <?php include('header.php'); ?>

    <!-- Barangay Section -->
    <section>
        <h2>Barangay Hotlines</h2>
        <div class="accordion-container">

            <?php
            // Loop through each barangay and display as an accordion item
            while ($row = $result->fetch_assoc()) {
                ?>
                <div class="accordion">
                    <div class="accordion-item" onclick="toggleAccordion(<?php echo $row['id']; ?>)">
                        <strong><?php echo $row['barangay']; ?></strong>
                    </div>
                    <div class="accordion-content" id="content-<?php echo $row['id']; ?>">
                        <p><strong>Police:</strong> <?php echo $row['police']; ?></p>
                        <p><strong>Medic:</strong> <?php echo $row['medic']; ?></p>
                        <p><strong>Fire:</strong> <?php echo $row['fire']; ?></p>
                        <p><strong>Rescue:</strong> <?php echo $row['rescue']; ?></p>
                    </div>
                </div>
                <?php
            }
            ?>

        </div>
    </section>

    <!-- Footer -->
    <?php include('footer.php'); ?>

    <script>
        // Toggle the accordion content
        function toggleAccordion(id) {
            var content = document.getElementById('content-' + id);
            if (content.style.display === "block") {
                content.style.display = "none";
            } else {
                content.style.display = "block";
            }
        }
    </script>
</body>
</html>
