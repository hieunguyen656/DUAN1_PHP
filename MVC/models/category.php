<?php
function insert_category($name)
{
    $sql = "INSERT INTO categories(name) VALUES ('$name')";
    pdo_execute($sql);
}
function loadall_category()
{
    $sql = "select * from categories";
    $listcategory = pdo_query($sql);
    return $listcategory;
}
function delete_category($id)
{
    $sql = "DELETE FROM categories where id=" . $_GET['id'];
    pdo_execute($sql);
}
function loadone_category($id)
{
    $sql = "select * from categories where id=" . $id;
    $dm = pdo_query_one($sql);
    return $dm;
}
function update_category($id, $name)
{
    $sql = "update categories set name='" . $name . "' where id=" . $id;
    pdo_execute($sql);
}
