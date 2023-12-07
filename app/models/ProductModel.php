<?php
class ProductModel {
    private $conn;
    private $table_name = "products";

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getProducts() {
        $query = "SELECT id, name, description, price FROM " . $this->table_name;

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt;
        // Truy vấn lấy tất cả sản phẩm
    }

    public function createProduct($name, $description, $price) {
        // Truy vấn tạo sản phẩm mới
    }

    public function updateProduct($id, $name, $description, $price) {
        // Truy vấn cập nhật sản phẩm
    }

    public function deleteProduct($id) {
        // Truy vấn xóa sản phẩm
    }
}
