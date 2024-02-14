<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <?php
        // Defining variables
        $name = $email = $level = $review = "";
  


        // Checking for a POST request
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $name = test_input($_POST["name"]) ;
          $email = test_input($_POST["email"]) ;
          $review = test_input($_POST["review"]) ;
          $level = test_input($_POST["level"]) ;

          if (!(is_null($_POST["name"])))  echo $name . ", <p>your input is displayed under the form</p>";
            if (!(is_null($_POST["email"]))) {
                $sent = mail( $email,  
                              $name . ", your input is: ",
                              $review . ", " . $level, 
                              "Content-type: text/html\r\n");
                if($sent)   echo "The email sent successfully...";
                else        echo "The email could not be sent...";
                                                             }
        }
  
        // sanitizing the input
        function test_input($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
        }
        ?>
  
        <h2>This form submits to itself</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
            Name:
            <input type="text" name="name">
            <br>
            <br> 
            E-mail:
            <input type="text" name="email">
            <br>
            <br>
            Review:
            <textarea name="review" 
                      rows="5" cols="40">
            </textarea>
            <br>
            <br> 
            Rating:
            <input type="radio" name="level" 
                   value="Awful">Awful
            <input type="radio" name="level"
                   value="So so">So so
            <input type="radio" name="level"
                   value="Awesome">Awesome
            <br>
            <br>
            <input type="submit" name="submit"
                   value="Submit">
        </form>
  
        <?php
            echo $email;
            echo "<br>";
            echo $review;
            echo "<br>";
            echo $level;
        ?>
</body>
  
</html>