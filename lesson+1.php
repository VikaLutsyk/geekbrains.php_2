<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Class</title>
</head>
<body>
    <?php

    class Clothes {
        private $name;
        private $brand;
        private $size;
        private $color;
        private $price;
        
        private $sale;
        
        public function __construct($name,$brand,$size,$color,$price, $sale) {
            $this->name = $name;
            $this->size = $size;
            $this->color = $color;
            $this->price = $price;
            $this->sale = $sale;
            $this->brand = $brand;
            $this->show();
        } 
        public function show() {
            echo $this->name . " <b>\"" . $this->brand . "\"</b>" . "размер " . $this->size . "<br>";
        }
        public function price() {
            echo  "Цена: " . $this->price ."руб.";
        }
        public function sale() {
            echo 
                "Старая цена:  <s>" . $this->price . "</s>руб. 
                <br>Скидка " . $this->sale . "%  
                <br>Новая цена: " . ($this->price-($this->price*$this->sale/100)) . "руб. <br>";
        }
    }
    
    $skirt = new Clothes("Юбка","HOME","S","red","500","10");
    $skirt->price();
    //$skirt->sale();
?>
</body>
</html>