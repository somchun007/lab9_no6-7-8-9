<?php include "connect.php" ?>

<html>
<head><meta charset="utf-8">
<script>
function confirmDelete(username) { 
    var ans = confirm("ต้องการลบหรือไม่" + username); 
    if (ans==true) 
        document.location = "delete.php?pid=" + username; 
}
</script>
</head>
<body>
<?php
$stmt = $pdo->prepare("SELECT * FROM member");
$stmt->execute();
while ($row = $stmt->fetch()) {
    ?>
    ชื่อสมาชิก: <?= $row["name"] ?> <br>
    ที่อยู่: <?= $row["address"] ?> <br>
    อีเมลล์: <?= $row["email"] ?> <br>
    <a href='delete.php?username=<?=$row["username"]?>' onclick='confirmDelete(".$row["username"].")'>ลบ</a>
    <hr>

<?php } ?>
</body>
</html>