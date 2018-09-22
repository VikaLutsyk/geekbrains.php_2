<?
include_once "Clothes.class.php";


    class Hollidays_sale extends Clothes {
        private $sale;
        
        public function __construct($name,$brand,$size,$color,$price, $sale) {
            parent:: __construct($name,$brand,$size,$color,$price);
            $this->sale = $sale;
            $this->price();
        }
        
        public function price() {
            echo 
                "Старая цена:  <s>" . $this->price . "</s>руб. 
                <br>Скидка " . $this->sale . "%  
                <br>Новая цена: " . ($this->price-($this->price*$this->sale/100)) . "руб. <br>";
        }
    }
	class Woman_wear extends Clothes {
		
    }
	class Man_wear extends Clothes {
		
    }
	class Childrens_wear extends Clothes {
		
    }

    $clothes2 = new Hollidays_sale("Футболка","HOME","M","white","450","5");



?>