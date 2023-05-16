<?php 
    include './layout/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3 class="text-center bg-light text-success">Quản lý khách hàng</h3>

    <table class="table table-condensed">
    <thead>
      <tr>
        <th>Mã </th>
        <th>Email</th>
        <th>Mật khẩu</th>
        <th>Ảnh</th>
        <th>Vai trò</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <th>
            <button type="button" class="btn btn-info">Sửa</button>
            <button type="button" class="btn btn-warning">Xoá</button>
        </th>
        
      </tr>
    </tbody>
  </table>
  <button type="button" class="btn btn-primary">Thêm tài khoản</button>
</body>
</html>