<?
include_once "Clothes.class.php";


    class Hollidays_sale extends Clothes {
        private $h_sale;
        
        public function __construct($name,$brand,$size,$color,$price, $h_sale) {
            parent:: __construct($name,$brand,$size,$color,$price);
            $this->h_sale = $h_sale;
            $this->sale();
        }
        
        public function sale() {
            echo 
                "Старая цена:  <s>" . $this->price . "</s>руб. 
                <br>Скидка " . $this->h_sale . "%  
                <br>Новая цена: " . ($this->price-($this->price*$this->h_sale/100)) . "руб. <br>";
        }
    }

    $clothes2 = new Hollidays_sale("Футболка","HOME","M","white","450","2");



?>