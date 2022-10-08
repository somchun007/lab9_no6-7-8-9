<?php include "connect.php" ?>

<html>
<head><meta charset="utf-8"></head>
<body>
    <?php
        $ken = $pdo->prepare("SELECT * from member WHERE username=?");
        $ken->bindparam(1,$_GET["username"]);
        $ken->execute();
        $row = $ken->fetch();
    ?>
        <h2>ข้อมูลสมาชิกใหม่</h2>

        Name: <?=$row["name"]?><br>
        Address: <?=$row["address"]?><br>
        Mobile: <?=$row["mobile"]?><br>
        Email: <?=$row["email"]?><br>
 
</body>
</html>