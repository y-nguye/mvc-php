<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa thành viên</title>
</head>
<body>
    <div>
    <h3>Sửa thành viên</h3>
    <a href='index.php?controller=member&action=list'>Danh sách thành viên</a>
    <br/>
    <br/>
    <form action="" method="post" enctype="multipart/form">
        <label for="">Tên:</label><br/>
        <input type="text" name="name-input" value="<?php echo $dataByID['name']?>"><br/><br/>

        <label for="">Năm sinh:</label><br/>
        <input type="text" name="yearold-input" value="<?php echo $dataByID['yearold']?>"><br/><br/>

        <label for="">Địa chỉ:</label><br/>
        <input type="text" name="address-input" value="<?php echo $dataByID['address']?>"><br/><br/>

        <input type="submit" name="update_member" value="Cập nhật"/>

    </form>
    </div>
</body>
</html>