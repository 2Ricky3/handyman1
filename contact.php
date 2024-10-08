<?php include 'db_connection.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Book a Handyman</title>
    <link rel="stylesheet" href="style.css"> <!-- Your custom CSS file -->
</head>
<body>
    <section class="booking-form">
        <h2>Book a Handyman</h2>
        <form action="submit_booking.php" method="POST">
            <div>
                <label>Name</label>
                <input type="text" name="name" required>
            </div>
            <div>
                <label>Email</label>
                <input type="email" name="email" required>
            </div>
            <div>
                <label>Phone</label>
                <input type="text" name="phone" required>
            </div>
            <div>
                <label>Address</label>
                <input type="text" name="address" required>
            </div>
            <div>
                <label>Service Needed</label>
                <select name="service_needed" required>
                    <option value="Electrical">Electrical</option>
                    <option value="Plumbing">Plumbing</option>
                    <option value="Home Equipment">Home Equipment</option>
                    <option value="General Maintenance">General Maintenance</option>
                </select>
            </div>
            <div>
                <label>Preferred Date</label>
                <input type="date" name="preferred_date" required>
            </div>
            <div>
                <label>Preferred Time</label>
                <input type="time" name="preferred_time" required>
            </div>
            <div>
                <label>Message</label>
                <textarea name="message"></textarea>
            </div>
            <button type="submit" name="submit">Submit Booking</button>
        </form>
    </section>
</body>
</html>
