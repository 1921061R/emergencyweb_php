<?php
$title = 'Contact Us - Emergency Hotline';
include 'header.php';

// Include database connection
include 'db.php';

// Fetch hotline numbers from the database for Marawoy
$sql = "SELECT * FROM hotlines LIMIT 1";
$result = $conn->query($sql);
$hotlines = $result->fetch_assoc();
?>

<section class="contact-section">
    <h1>Contact Us</h1>
    <p>If you need assistance, don’t hesitate to contact us.</p>
    
    <div class="contact-info">
        <div class="contact-box">
            <ion-icon name="call" class="contact-icon"></ion-icon>
            <h2>Emergency Hotline Numbers</h2>
            <p><strong>Fire Department:</strong> <?php echo $hotlines['fire']; ?></p>
            <p><strong>Police Department:</strong> <?php echo $hotlines['police']; ?></p>
            <p><strong>Medical Assistance:</strong> <?php echo $hotlines['medic']; ?></p>
            <p><strong>Rescue:</strong> <?php echo $hotlines['rescue']; ?></p>
        </div>
        
        <div class="contact-box">
            <ion-icon name="mail" class="contact-icon"></ion-icon>
            <h2>Email Us</h2>
            <p>For non-emergency inquiries or additional information, you can email us at:</p>
            <p><a href="mailto:info@emergencylipa.com">info@emergencylipa.com</a></p>
        </div>

        <div class="contact-box">
            <ion-icon name="location" class="contact-icon"></ion-icon>
            <h2>Visit Us</h2>
            <p>Lipa City Emergency Office</p>
            <p>123 Safety St, Lipa City, Philippines</p>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
