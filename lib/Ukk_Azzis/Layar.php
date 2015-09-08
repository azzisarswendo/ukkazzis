<?php
namespace Ukk_Azzis;
class Layar {
    public function __construct($app){
        require_once $app . '/layar/layar.phtml';
        echo strpos(1, $_SERVER["PHP_SELF"]);
    }
}