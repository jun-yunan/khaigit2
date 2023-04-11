<div>Cập nhật người dùng </div>
<?php
require '../mod/userCls.php';
$iduser =$_GET['iduser'];
$user = new userCls();
$getuser=$user->UserGetbyId($iduser);
?>
<div class="title_user">Người dùng mới</div>
<div class="content_user">
    <form name="updateuser" id="formupdate" method="post" action="./elements_LMK/mUser/userupdate.php?reqact=updateuser">
        <input type="hidden"name id="iduser" value="<?php echo $iduser;?>"/>
        <table>
        <tr>
            <td>Tên đăng nhập</td>
            <td><input type="text" name="username" value="<?php echo $getuser ->usrename; ?> "/></td>
        </tr>
        <tr>
            <td>Mật khẩu</td>
            <td><input type="text" name="password" value="<?php echo $getuser->passwork;?>"/></td>
        </tr>
        <tr>
            <td>Họ tên</td>
            <td><input type="text" name="hoten" value="<?php echo $getuser ->hoten;?>"/></td>
        </tr>
        <tr>
            <td>giới tính </td>
            <td><input type="radio" name="gioitinh" value="1"<?php if ($getuser->gioitinh==1) echo 'checked';?>/>
            Nữ <input type="radio" name="gioitinh" value="0"<?php if ($getuser ->gioitinh==0) echo 'checked';?>/>
        </td>
        </tr>
        <tr>
            <td>Ngày sinh</td>
            <td><input type="date" name="ngaysinh" value="<?php echo $getuser ->ngaysinh;?>"/></td>
        </tr>
        <tr>
            <td>Địa chỉ</td>
            <td><input type="text" name="diachi" value="<?php echo $getuser->diachi;?>"/></td>
        </tr>
        <tr>
            <td>Điện thoại</td>
            <td><input type="tel" name="dienthoa" value="<?php echo $getuser->dienthoai;?>"/></td>
        </tr>
        <tr>
            <td><input type="submit" id="btnsubmit" value="CẬP NHẬT"/></td>
            <td><input type="reset" value="Làm lại"/><b id="noteForm"></b></td>
        </tr>
        </table>
    </form>
</div>