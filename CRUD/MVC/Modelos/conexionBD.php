<?php
class ConexionBD{
    public function cBD(){
        $bd = new PDO("mysql:host=localhost;dbname=crud;port=33065","root","");
      
        return $bd;
    }
}
?>