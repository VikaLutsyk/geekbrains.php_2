<?php
 abstract class Goods {
    protected $name; //имя
    protected $brand; //бренд
    protected $desc; //описание
    //private $status; //статус в наличии/нет
    protected $price; //цена
    protected $goods_code; //код товара
    protected $weight; //вес
    
    public  function __construct($name,$brand,$desc,$price,$goods_code,$weight) {
        $this->name=$name;  
        $this->brand=$brand;
        $this->desc=$desc;
        $this->price=$price;  
        $this->goods_code=$goods_code;
        $this->weight=$weight;
    } 
    public  function getName() {
        return $this->name;
    }
    public  function getBrand() {
        return $this->brand;
    }
    public  function getDescription() {
        return $this->desc;
    }
    public  function getPrice() {
        return ($this->price)*($this->weight);
    }
    public  function getGoodscode() {
        return $this->goods_code;
    }
    public  function getWeight() {
        return $this->weight;
    }
}
class Webinar extends Goods {}
class Toys extends Goods {}
class Candies extends Goods{}

$products = array(
    new Webinar('Курс по PHP','GeakBrains','php1+php2','14000','1440','1'),
    new Webinar('Курс по JS','GeakBrains','js1+js2','13000','1445','1'),
    new Toys('Хомяк','GeakBrains','Хомяк грызущий книгу  от GeakBrains','399','10350','1'),
    new Candies('Manual php','GeakBrains','Печенье с "предсказаниями" - подсказки по php','239','14400','1.3'),
);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Class</title>
</head>
<body>
<?php
foreach ($products as $product) {
    printf("<br>
            Бренд: %s <br>
            Товар: %s <br>
            Описание: %s <br>
            Количество: %s <br>
            Цена: %s руб. <br>
            Код товара: %s <br>",
        $product->getBrand(),
        $product->getName(),
        $product->getDescription(),
        $product->getWeight(),
        $product->getPrice(),
        $product->getGoodsCode()
    );
}
?>
    </body>
</html>