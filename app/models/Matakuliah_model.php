<?php
class Matakuliah_model {
    private $table ='matakuliah'; //database handler
    private $db; //statement yayng digunakan untuk menyimpan query

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getALLMatakuliah()
    {
        $this->db->query('SELECT * FROM '. $this->table);
        return $this->db->resultSet();
    }

    public function getMatakuliahById($id)
    {
        $this->db->query('SELECT * FROM '. $this->table . 'WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

}

?>