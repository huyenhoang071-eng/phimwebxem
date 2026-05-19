<?php
session_start();
// Kiểm tra xem người dùng đã đăng nhập chưa
if (!isset($_SESSION['username']) || !isset($_SESSION['role']) || $_SESSION['role'] == 0) {
    header('Location: ./login.php');
    exit();
}
?>