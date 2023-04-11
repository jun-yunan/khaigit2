<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login website</title>
    <link type="text/scc" rel="stylesheet" href="stylescss_LMK/mycss.css"/>

</head>
<body>
    <div id="LoginBody">
        <h4 align="center">ĐĂNG NHẬP HỆ THỐNG </h4>
        <form name="frmLogin" method="post" action="elements_LMK/mUser/userAct.php?reqact=checklogin">
            <table>
            <tr><td>Tên tài khoản:</td>
                <td><input type="text" name="username" id="userame"/></td></tr>
            <tr><td>Mật khẩu:</td>
                <td><input type="password" name="password" id="passwork"></td></tr>
            <tr><td></td>
        <td><input type="submit" value="Đăng nhập"/></td></tr>
            </tr>
            </table>
        </form>
    </div>
</body>
</html>