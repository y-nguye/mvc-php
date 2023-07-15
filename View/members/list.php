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
    <a href='index.php?controller=member&action=add'>Thêm thành viên</a>
    <br/>
    <br/>
    <?php
        $data = $db->getAllData();
        while ($row = $data->fetch_assoc()) {
            print_members($row);
        }
    ?>
    </div>
</body>
</html>


<?php
function print_members($row) {
    foreach($row as $key => $value) {
        echo $key . ': ' . $value . " | ";
    }
    echo "<a href='index.php?controller=member&action=edit&id=" . $row['id'] ."'>Edit</a>";
    echo " | ";
    echo "<a href='index.php?controller=member&action=delete&id=" . $row['id'] ."'>Del</a>";
    echo "<br>";
}
?>