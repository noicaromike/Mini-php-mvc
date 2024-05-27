<?php

namespace App\Models;

use App\lib\Database;

class Users
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }
    public function getAllUsers()
    {
        $this->db->query('SELECT * FROM users ORDER BY id DESC');
        $result = $this->db->resultSet();
        return $result;
    }
}
