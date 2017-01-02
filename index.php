
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
    <p>
      <?php
      // switch statement
     switch (20) {
        case 0:
            echo "You have zero.";
            break;
        case 1:
            echo "You have one.";
            break;
        case 2:
            echo "You have two.";
            break;
        default:
            echo "You're lucky, you have more than two!";
            break;
     }
    ?>
    </p>
    <p>
      <?php
      // modifying arrays
        $languages = array("HTML/CSS",
        "JavaScript", "PHP", "Python", "Ruby");

        $languages[3] = "Angular";
        echo $languages[3];
      ?>
    </p>
    <p>
      <?php
      // deleting array items
        $languages = array("HTML/CSS",
        "JavaScript", "PHP", "Python", "Ruby");
        unset($languages[3]);

        // for each loop
        foreach($languages as $lang) {
          print "<p>$lang</p>";
        }
      ?>
    </p>
	</body>
</html>
