<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Class</title>
</head>
<body>
    <?php

    class Clothes {
        protected $name;
        protected $brand;
        protected $size;
        protected $color;
        protected $price;
        
        
        public function __construct($name,$brand,$size,$color,$price) {
            $this->name = $name;
            $this->size = $size;
            $this->color = $color;
            $this->price = $price;
            $this->brand = $brand;
            $this->show();
        }
        
        public function show() {
            echo "<br>" . $this->name . " <b>\"" . $this->brand . "\"</b>" . "размер " . $this->size . 
			"<br> Цвет: " . $this->color. "<br>";
        }
        public function price() {
            echo  "Цена: " . $this->price ."руб.<br>";
        }
    }
    
    $clothes1 = new Clothes("Юбка","HOME","S","red","500");
    $clothes1->price();
?>
</body>
</html>