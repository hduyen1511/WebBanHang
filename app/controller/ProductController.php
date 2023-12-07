<?php
// Require SessionHelper and other necessary files

class ProductController {
    private $productModel;
    private $db;

    public function __construct() {
        $this->db = (new Database())->getConnection();
        $this->productModel = new ProductModel($this->db);
    }

    public function listProducts() {
        $products = $this->productModel->getProducts();
        include_once 'app/views/products/list.php';
    }

    public function createProduct() {
        if (!SessionHelper::isAdmin()) {
            header('Location: login.php');
            exit;
        }
        // Xử lý tạo sản phẩm
    }

    public function updateProduct($id) {
        if (!SessionHelper::isAdmin()) {
            header('Location: login.php');
            exit;
        }
        // Xử lý cập nhật sản phẩm
    }

    public function deleteProduct($id) {
        if (!SessionHelper::isAdmin()) {
            header('Location: login.php');
            exit;
        }
        // Xử lý xóa sản phẩm
    }
}
?>