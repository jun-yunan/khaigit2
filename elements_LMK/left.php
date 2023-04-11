<!-- <div>Menu</div>
<div class="cateOrder">
    <a href="#">Cấp số a </a>
</div>
<div class="itemOrder">
    <ul>
        <li><a href="#">Nội dung A1</a></li>
        <li><a href="#">Nội dung A2</a></li>
        <li><a href="#">Nội dung A3</a></li>
    </ul>
</div>
<div class="cateOrder">
    <a href="#">Cấp số B</a>
</div>
<div class="itemOrder">
    <li><a href="#">Nội dung B1</a></li>
    <li><a href="#">Nội dung B2</a></li>
</div>
<div class="cateOrder">
    <a href="#">Cấp số C</a>
</div>
<div class="itemOrder">
    <ul>
        <li><a href="#">Nội dung C1</a></li>
        <li><a href="#">Nội dung C2</a></li>
        <li><a href="#">Nội dung C3</a></li>
    </ul>
</div>
<h3>Menu</h3>
<div class="cateOrder">
    <a href="#">Quản lý</a>
</div>

<div class="itemOrder">
    <ul>
        <li><a href="index.php?req=userview">Tài khoản</a></li>
    </ul>
</div>

<div class="cateOrder">
    <a href="#">Ex jquery</a>
</div>

<div class="itemOrder">
    <ul>
        <li><a href="index.php?req=exjs01">Ví dụ 01</a></li>
        <li><a href="index.php?req=exjs02">Ví dụ 02</a></li>
        <li><a href="index.php?req=exjs03">Ví dụ 03</a></li>
    </ul>
</div> -->


<!-- <hr/>
<?php 
//require './elements_LMK/mod/userCls.php';
?>
<div class="title_user">Danh sách người dùng</div>
<div class="content_user">
    <?php 
    // $obj_User= new userCls();
    // $list_User=$obj_User->UserGetAll();
    // $I =count($list_User);
    ?>
    <p>Trong bảng có <b>?php echo $i;?</b></p>
    <?php
    //if ($i>0){
    ?>
    <table border="1">
        <thead>
            <tr>
                <th>id</th>
                <th>Username</th>
                <th>Password</th>
                <th>Họ tên </th>
                <th>giới tính    </th>
                <th>Ngày sinh</th>
                <th>địa chỉ</th>
                <th>điện thoại </th>
                <th>ngày đăng kí </th>
                <th>hoạt động</th>
                <th>xóa</th>
            </tr>
        </thead>
        <tbody>
            <?php
            //foreach ($list_User as $v){
                ?>
            <tr>
                <td><?php //echo $v->iduser;?></td>
                <td><?php //echo $v->username;?></td>
                <td><?php //echo $v->password;?></td>
                <td><?php //echo $v->hoten;?></td>
                <td><?php //echo $v->gioitinh;?></td>
                <td><?php //echo $v->ngaysinh;?></td>
                <td><?php //echo $v->diachi;?></td>
                <td><?php //echo $v->dienthoai;?></td>
                <td><?php //echo $v->ngaydangki;?></td>
                <td><?php //echo $v->ability;?></td>
                <td><?php //echo $v->Xóa;?></td>
            </tr>   
            <?php 
            //}
            ?>
        </tbody>
    </table>
    <?php
        //}
    ?>
</div> -->









<h3>Menu</h3>
<div class="cateOrder">
    <a href="#">Quản lý</a>
</div>

<div class="itemOrder">
    <ul>
        <li><a href="index.php?req=userview">Tài khoản</a></li>
    </ul>
</div>

<div class="cateOrder">
    <a href="#">Ex jquery</a>
</div>

<div class="itemOrder">
    <ul>
        <li><a href="index.php?req=exjs01">Ví dụ 01</a></li>
        <li><a href="index.php?req=exjs02">Ví dụ 02</a></li>
        <li><a href="index.php?req=exjs03">Ví dụ 03</a></li>
    </ul>
</div>