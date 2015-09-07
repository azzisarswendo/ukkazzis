<?php
namespace Ukk_Azzis\Db;
use PDO;

class Db extends PDO{
    
    protected $PDO;

    public function __construct(){
        if(isset(\Ukk_Azzis\konfig\konfig()["database"])){
            $this->jalan();
        }
    }
    
    private function jalan(){
        try{
            parent::__construct(\Ukk_Azzis\konfig\konfig()["database"]["adaptor"] . ":host=" . \Ukk_Azzis\konfig\konfig()["database"]["host"] . ";port=" . \Ukk_Azzis\konfig\konfig()["database"]["port"] . ";dbname=" . \Ukk_Azzis\konfig\konfig()["database"]["db"], \Ukk_Azzis\konfig\konfig()["database"]["user"], \Ukk_Azzis\konfig\konfig()["database"]["pass"]);
            $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
        }
        catch(PDOException $e) {
            echo $e->getMessage();
        }
    }
    
    protected function berhenti(){
        
    }
}
