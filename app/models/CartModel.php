<?php

class CartModel {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    // Add a product to the cart
    public function addProductToCart($userId, $productId, $quantity) {
        $this->db->query("INSERT INTO cart (user_id, product_id, quantity) 
                          VALUES (:user_id, :product_id, :quantity)
                          ON DUPLICATE KEY UPDATE quantity = quantity + :quantity");
        $this->db->bind(':user_id', $userId);
        $this->db->bind(':product_id', $productId);
        $this->db->bind(':quantity', $quantity);
        $this->db->execute();
    }

    // Get cart items for a specific user
    public function getCartItems($userId) {
        $this->db->query("SELECT products.id, products.name, products.price, cart.quantity 
                          FROM cart
                          JOIN products ON cart.product_id = products.id
                          WHERE cart.user_id = :user_id");
        $this->db->bind(':user_id', $userId);
        return $this->db->resultSet();
    }

    // Remove an item from the cart
    public function removeCartItem($userId, $productId) {
        $this->db->query("DELETE FROM cart WHERE user_id = :user_id AND product_id = :product_id");
        $this->db->bind(':user_id', $userId);
        $this->db->bind(':product_id', $productId);
        $this->db->execute();
    }
}