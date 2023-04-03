<?php
include 'config.php';
class CRUD extends Config{
    public static function index(){
    $sql = $this->conn->prepare("select * from db_siswa")
    ->execute();
    }
    public static function save(){
    }
    public static function get_data(){
    }
    public static function delete(){

    }


}
?>