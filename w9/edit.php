<?php include "connect.php"?>    

<?php
    $stmt = $pdo->prepare("UPDATE member SET name=?, address=?, email=? WHERE username=?");
    $stmt->bindParam(1,$_POST["name"]);
    $stmt->bindParam(2,$_POST["address"]);
    $stmt->bindParam(3,$_POST["email"]);
    $stmt->bindParam(4,$_POST["username"]);

    if($stmt->execute())
        echo "เเก้ไขข้อมูลผู้ใช้ ".$_POST["username"]." สำเร็จ";
?>