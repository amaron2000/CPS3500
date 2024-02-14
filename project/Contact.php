<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact me</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #333;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#" style="color: white;">Contact Me</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="Home.html" style="color: white;">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="AboutMe.html" style="color: white;">About Me</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#" style="color: white;">Contact Me</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Experience.html" style="color: white;">My Work Experience</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="content">
    <?php
    // Defining variables
    $name = $email = $content = "";

    // Checking for a POST request
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $name = test_input($_POST["name"]);
      $email = test_input($_POST["email"]);
      $content = test_input($_POST["content"]);

      echo "<h2>Your Input:</h2>";
      echo "<p>Name: $name</p>";
      echo "<p>Email: $email</p>";
      echo "<p>Content: $content</p>";
    }

    // Sanitizing the input
    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    ?>

    <h2>Contact Form</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
        Name: <input type="text" name="name"><br><br>
        E-mail: <input type="text" name="email"><br><br>
        Content: <textarea name="content" rows="5" cols="40"></textarea><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
