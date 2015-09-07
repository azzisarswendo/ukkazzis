<?php
namespace Ukk_Azzis\Db;
class Select extends Db{
    protected $_name;
    
    public function __construct() {
        parent::__construct();
    }

    protected function Insert($data = array(), $table) {
        
    }
    
    public function Query($query) {
        return $this->PDO->query($query);
    }
    
    protected function Select($table) {
        if(null == $table){
            return new Where("SELECT * FROM $this->_name");
        }
        
        return new Where("SELECT * FROM $table");
    }
    
    protected function Update($data = array(), $where, $table) {
        
    }
}

class Where extends Db{
    
    private $select;
    
    public function __construct($select) {
        parent::__construct();
        $this->select = $select;
    }
    
    public function Where($where){
        $this->select .= " WHERE $where";
        return new Order($this->select);
    }
    
    public function Order($order, $desc){
        $this->select .= " ORDER BY $order $desc";
        try {
            $exe = $this->prepare($this->select);
            $exe->execute();
            return $exe->fetchall();
        } catch (PDOException $ex) {
            echo $ex->getMessage();
            return FALSE;
        }
    }
}

class Order extends Db{
    
    private $select;
    
    public function __construct($select) {
        parent::__construct();
        $this->select = $select;
    }
    
    public function __call($name, $arguments) {
        echo $name;
    }
    
    public function toArray() {
        try {
            $exe = $this->prepare($this->select);
            $exe->execute();
            return $exe->fetchall();
        } catch (PDOException $ex) {
            echo $ex->getMessage();
            return FALSE;
        }
    }
    
    public function Order($where, $desc){
        $this->select .= " ORDER BY $where $desc";
        try {
            $exe = $this->prepare($this->select);
            $exe->execute();
            return $exe->fetchall();
        } catch (PDOException $ex) {
            echo $ex->getMessage();
            return FALSE;
        }
    }
}