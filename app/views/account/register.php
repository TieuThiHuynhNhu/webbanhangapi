<?php include 'app/views/shares/header.php'; ?>
<style>
    body {
        background-color: #f8d3e0 !important; /* Màu hồng nhẹ cho toàn bộ trang */
        margin: 0; /* Đảm bảo không có khoảng trống xung quanh */
        padding: 20px; /* Padding cho khoảng cách bên trong */
    }
</style>
<?php
if (isset($errors)) {
echo "<ul>";
foreach ($errors as $err) {
echo "<li class='text-danger'>$err</li>";
}
echo "</ul>";
}
?>
<div class="card-body p-5 text-center">
<form class="user" action="/webbanhang/account/save" method="post">
<div class="form-group row">
<div class="col-sm-6 mb-3 mb-sm-0">
<input type="text" class="form-control form-control-user"

id="username" name="username" placeholder="username">

</div>
<div class="col-sm-6">
<input type="text" class="form-control form-control-user"

id="fullname" name="fullname" placeholder="fullname">

</div>
</div>
<div class="form-group row">
<div class="col-sm-6 mb-3 mb-sm-0">
<input type="password" class="form-control form-control-user"

id="password" name="password" placeholder="password">

</div>
<div class="col-sm-6">
<input type="password" class="form-control form-control-user"
id="confirmpassword" name="confirmpassword" placeholder="confirmpassword">

</div>
</div>
<div class="form-group text-center">
<button class="btn btn-primary btn-icon-split p-3">
Register
</button>
</div>
</form>
</div>
<?php include 'app/views/shares/footer.php'; ?>