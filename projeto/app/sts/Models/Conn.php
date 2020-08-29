<?php
namespace App\sts\Models;
use PDO;
/**
 * Description of Conn
 *
 * @author paulo
 */
class Conn {

    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $dbname = "website";
    private $port = 3306;
    private $connect;
    
    protected function connect(){
        try {
          /*  $this->connect = $this->connect = new PDO($this->db . ':host=' . $this->host . ';'
                    . 'port=' . $this->port . ';dbname=' , $this->dbname, $this->user, $this->pass);*/
            
        $this->connect = new PDO('mysql:host='. $this->host . ';port=' . $this->port . ';dbname=' . $this->dbname,$this->user, $this->pass);

        return $this->connect;
                       
        } catch (Exception $ex) {
            die('Acesso indisponível, por favor tente mais tarde! Erro: '.$ex);
        }
    }
}
