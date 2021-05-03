<?php


class Department {

    
    private $conn;
    private $table_name = "department";
    public $id;
    public $name;
    public function __construct($db) {
        $this->conn = $db;
    }
    function read() {
        $query = "SELECT d.dept_id, d.dept_name
            FROM
                " . $this->table_name . " d
            ORDER BY
                d.dept_id";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

 
    function create() {
        $query = "INSERT INTO
                " . $this->table_name . "
            SET
                dept_name=:name";
        $stmt = $this->conn->prepare($query);
        $this->name = htmlspecialchars(strip_tags($this->name));
        $stmt->bindParam(":name", $this->name);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    function update() {
        $query = "UPDATE
                " . $this->table_name . "
            SET
                dept_name = :name
            WHERE
                dept_id = :id";

  
        $stmt = $this->conn->prepare($query);
        $this->name = htmlspecialchars(strip_tags($this->name));
        $this->id = htmlspecialchars(strip_tags($this->id));
        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':id', $this->id);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    function delete() {
        $query = "DELETE FROM " . $this->table_name . " WHERE dept_id = ?";
        $stmt = $this->conn->prepare($query);
        $this->id = htmlspecialchars(strip_tags($this->id));
        $stmt->bindParam(1, $this->id);

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }
}