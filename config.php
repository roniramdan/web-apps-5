<?php

class Config{
    protected $host = "localhost";
    protected $db = "db_siswa";
    protected $username = "root";
    protected $pass = "";
    protected $conn;

    public function __construct(){
        try {
            //melakukan koneksi kedalam database
            $this->conn = new PDO('mysql:host='.$this->host.';dbname='.$this->db.'', $this->username, $this->pass);  

            //jika ditemukan masalah maka menampilkan pesan error disertai kode dengan deskripsi error
        } catch (PDOException $e) {
            print "Error !: " . $e->getMessage() . "<br/>";
            die();
        } 

        //kembalikan fungsi conn 
        return $this->conn;
    }
}
//roni 
?>