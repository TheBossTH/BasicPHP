<?php
session_start();
require_once "../Database/Database.php";
if ($_SESSION['username'] == null) {
    echo "<script>alert('กรุณาเข้าสู่ระบบ');</script>";
    header("Refresh:0 , url=../index.html");
    exit();
}

if ($_POST['text_todo'] != null) {
    $sql = "UPDATE todos SET todo='" . trim($_POST['text_todo']) . "'
    WHERE id='" . $_POST['id'] . "'";
    if ($conn->query($sql)) {
        echo "<script>alert('แก้ไขสำเร็จ');</script>";
        header("Refresh:0 , url=todo.php");
        exit();
    } else {
        echo "<script>alert('แก้ไขไม่สำเร็จ');</script>";
        header("Refresh:0 , url=todo.php");
        exit();
    }
    echo $_POST['text_todo'];
} else {
    echo "<script>alert('กรุณากรอกข้อมูล');</script>";
    header("Refresh:0 , url=todo.php");
    exit();
}
