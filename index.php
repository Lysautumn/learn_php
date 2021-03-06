
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
    <p>
      <?php
        // For loops
        for ($i = 2; $i < 11; $i = $i + 2) {
          echo $i;
        }
      ?>
    </p>
    <p>
      <?php
        // do-while loop
        $i = 0;
        do {
            echo "This is running!";
            $i++;
        } while($i < 10);
    ?>
    </p>
    <p>
			<?php
	// random winner generator
	// Create an array and push in names of contestants
        $contestants = array();
        array_push($contestants, "Chris");
        array_push($contestants, "Karen");
        array_push($contestants, "John");
        array_push($contestants, "Scout");
        array_push($contestants, "Gatsby");
        array_push($contestants, "Keebler");
        array_push($contestants, "Kassi");
        array_push($contestants, "Mary");
        array_push($contestants, "Todd");
	// Sort the array
        sort($contestants);
	// Randomly select a winner!
	    $count = count($contestants) - 1;
	    $index = rand(0, $count);
	    $winner = $contestants[$index];
	// Print the winner's name in ALL CAPS
	    print strtoupper($winner);
	?>
    </p>
		<p>
			<?php
			// PHP objects!
        class Person {
            public $isAlive = true;
            public $firstname;
            public $lastname;
            public $age;
            public function __construct($firstname, $lastname, $age){
                $this->firstname = $firstname;
                $this->lastname = $lastname;
                $this->age = $age;
            }
            public function greet(){
                return "Hello, my name is " . $this->firstname . " " . $this->lastname . ". Nice to meet you! :-)";
            }
        }
        $teacher = new Person("boring", "12345", 12345);
        $student = new Person("ally", "boyd", 31);
        echo $teacher->isAlive;
				echo $teacher->age;
        echo $student->age;
        echo $teacher->greet();
        echo $student->greet();
        ?>
		</p>
	</body>
</html>
