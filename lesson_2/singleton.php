<?php
trait forSingleton {
    protected static $_instance;
   // private function __construct() {}
    
    public static function getInstance() {
        if (self::$_instance === null) {
            self::$_instance = new self;
        }
        return self::$_instance;
    }
    
    public function getTestMessage() {
        
        echo "we did it!";
    }
}
class Someclass {
    use forSingleton;
}
$test = new Someclass;
$test->getTestMessage();
?>