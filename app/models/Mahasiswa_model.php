<?php

class Mahasiswa_model extends Database {
    private $table = 'mahasiswa';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllMahasiswa()
    {
        $this->db->query("SELECT * FROM ". $this->table);
        return $this->db->resultSet();
    }

    public function getMahasiswabyId($id)
    {
        $this->db->query("SELECT * FROM ".$this->table . "WHERE id =: id");
        $this->db->bind('id',$id);
        return $this->db->single();
    }
}