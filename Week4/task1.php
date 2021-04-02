<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task1</title>
</head>
<body>
<h1>Task1</h1>
    <?php
   // $a = '';
    class Person {
        protected $first = "Heng";
        private $last = "To";
        private $age = "20";
    }

    class Pet extends Person {
        public function owner() {
            $a = $this->first;
            echo $a;
        }
    }
    $pet = new Pet();
    $pet->owner();
?>
</body>
</html>
