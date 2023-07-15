<?php

class DataBase {
    private $hostname = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "membersmanager";
    private $table = "members";

    private $conn = null;
    private $result = null;

    public function connect() {
        $this->conn = new mysqli($this->hostname, $this->username, $this->password, $this->dbname);
        if($this->conn) {
            mysqli_set_charset($this->conn, 'utf8');
        } else {
            echo "Could not connect ❌";
            exit();
        }
        return $this->conn;
    }

    public function execute($sql) {
        $this->result = $this->conn->query($sql);
        return $this->result;
    }

    public function getData($id) {
        $sql = "SELECT id, name, yearold, address FROM $this->table WHERE id = $id";

        // Thực thi truy vấn
        $this->result = $this->execute($sql);;

        // Kiểm tra và xử lý kết quả truy vấn
        if ($this->result->num_rows > 0) {
            return $this->result->fetch_assoc();
        } else {
            echo "Không có kết quả.";
        }
    }

    public function getAllData() {
        $sql = "SELECT * FROM $this->table";

        // Thực thi truy vấn
        $this->result = $this->execute($sql);;

        // Kiểm tra và xử lý kết quả truy vấn
        if ($this->result->num_rows > 0) {
            return $this->result;
        } else {
            echo "Không có kết quả.";
        }
    }

    public function setData($hoten, $namsinh, $quequan) {
        // Đưa dữ liệu vào trong bảng $this->table
        $sql = "INSERT INTO $this->table (id, name, yearold, address) VALUES (null, '$hoten', '$namsinh', '$quequan')";
        $this->execute($sql);
    }

    public function updateData($id, $hoten, $namsinh, $quequan) {
        $sql = "UPDATE $this->table SET name = '$hoten', yearold = '$namsinh', address = '$quequan'
        WHERE id = '$id'";
        return $this->execute($sql);
    }

    public function deleteData($id) {
        $sql = "DELETE FROM $this->table WHERE id = '$id'";
        return $this->execute($sql);
    }
}

?>