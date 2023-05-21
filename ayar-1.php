<?php 

class User{

public $db,$sql,$hatirla;

public function __construct(){

    $this->db = new PDO('mysql:host=localhost;dbname=klasproje','root','');
  
    $this->db->exec("SET NAMES utf8");


}

public function giris($user,$password){

$this->sql=$this->db->query("SELECT* FROM person WHERE password='$password' AND username='$user' ");



}

public function dondur(){

if ($this->sql->rowCount() > 0) {
    
return $_SESSION['uye']=1;


}
else{

return $_SESSION['uye']=0;

}

}


public function kapat(){

unset($_SESSION['uye']);


}


}


?>
