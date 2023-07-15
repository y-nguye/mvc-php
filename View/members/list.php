<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách thành viên</title>
</head>
<body>
    <div>
    <h3>Danh sách thành viên</h3>
    <?php
        $data = $db->getAllData();
        while ($row = $data->fetch_assoc()) {
            foreach($row as $key => $value) {
                echo $key . ': ' . $value . " | ";
            }
            echo "<a href='index.php?controller=member&action=edit&id=" . $row['id'] ."'>Edit</a>";
            echo " | ";
            echo "<a href='#'>Del</a>";
            echo "<br>";
        }
    ?>
    </div>
</body>
</html>