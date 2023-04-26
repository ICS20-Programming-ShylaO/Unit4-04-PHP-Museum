<!DOCTYPE html>

<!-- ICS20-Programming-Unit4-04-Museum -->
<html lang="en-ca">
  <head>
    
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Museum Admission Discounts, with PHP">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Shyla Oommen">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon[1].png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32[1].png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16[1].png">
    <link rel="manifest" href="./favicon/site[2].webmanifest">
      
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    
    <!-- Title -->
    <title>Museum Discount Checker, Using PHP</title>
  </head>
  <body>
    
    <!-- php echo to print the html to the page -->
    <?php
      echo "<h1>Museum Admissions Discount Checker</h1>";
      echo "<h3>This program will tell you what discounts you are eligible for depending on the age and day of the week.</h3>";
    ?>
    <center>
    <img src="./images/dino_img.jpg" alt="Dinosaur Museum Image" width="25%" height="25%"><br><br>
      
    <!-- Form for the user's age and day of the week -->
    <form action="./results.php" method="post" target="results">
      <label for="lblUserAge">Age:</label>
      <input type="number" id="user-age" step="1" min="0" placeholder="Eg. 5" name="user-age"><br><br>
      <label for="day">Day:</label>
      <select name="day" id="day">
        <option value="">--Day of the Week--</option>
        <option value="Sunday">Sunday</option>
        <option value="Monday">Monday</option>
        <option value="Tuesday">Tuesday</option>
        <option value="Wednesday">Wednesday</option>
        <option value="Thursday">Thursday</option>
        <option value="Friday">Friday</option>
        <option value="Saturday">Saturday</option>
      </select>
      <br><br>
      <input type="submit" value="Check for Discounts">
    </form>
      
    <!-- iframe to display discounts based on age to user and day -->
    <iframe id="results" name="results"></iframe>
    </center>
  </body>
</html>