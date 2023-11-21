<?php
include '../../connect.php';
include '../../models/category.php';
include 'header.php';
include 'sidebar.php';
include 'home.php';

$url = isset($_GET['url']) ? $_GET['url'] : '/';

switch ($url) {
    case 'list-category':
        $list_category = loadall_category();
        include 'category/list-category.php';
        break;
    case 'add-category':
        if (isset($_POST['add']) && $_POST['add']) {
            $name = $_POST['name'];
            insert_category($name);
            $message = "Thêm thành công!";
        }
        include 'category/add-category.php';
        break;
}
include 'footer.php';
