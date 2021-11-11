<?php
class personas_model{
    private $db;
    private $personas;
 
    public function __construct(){
        $this->db=Database::connect();
        $this->personas=array();
    }
    public function get_personas(){
        $query=$this->db->query("select * from personas;");
        while($filas=$query->fetch(PDO::FETCH_ASSOC)){
            $this->personas[]=$filas;
        }
        return $this->personas;
    }
}
?>
