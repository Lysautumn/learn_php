
<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
        <p>
          <?php
          // echo and string concatenation
            echo "My name is " . " " . "Ally";
          ?>
        </p>
        <p>
          <?php
          // math
            echo 17 * 123;
          ?>
        </p>
        <p>
	      <?php
        // variables
	        $myName = "Ally";
          $myAge = 31;
          echo $myName;
          echo $myAge;
	      ?>
	    </p>
      <p>
      <?php
      // if / else statement
        $items = 3;

        if($items > 5) {
          echo "You get a 10% discount!";
        }
        else {
          echo "You get a 5% discount!";
        }
      ?>
    </p>
	</body>
</html>
