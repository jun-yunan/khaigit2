<?php
session_start();
require '../mod/userCls.php';
if (isset($_REQUEST['reqact'])) {
    $requestAction = $_REQUEST['reqact'];
    switch ($requestAction) {
        case 'addnew':
            $username = $_REQUEST['username'];
            $password = $_REQUEST['password'];
            $hoten = $_REQUEST['hoten'];
            $gioitinh = $_REQUEST['gioitinh'];
            $ngaysinh = $_REQUEST['ngaysinh'];
            $diachi = $_REQUEST['diachi'];
            $dienthoai = $_REQUEST['dienthoai'];

            $user = new userCls();
            $rs = $user->UserAdd($username, $password, $hoten, $gioitinh, $ngaysinh, $diachi, $dienthoai);

            if ($rs) {
                header('location:../../index.php?req=userview&result=ok');
            }
            else {
                header('location:../../index.php?req=userview&result=notok');
            }
            break;
        case 'deleteuser':
            $iduser = $_REQUEST['iduser'];
            $user = new userCls();
            $rs = $user->UserDelete($iduser);

            if ($rs) {
                header('location:../../index.php?req=userview&result=ok');
            }
            else {
                header('location:../../index.php?req=userview&result=notok');
            }
            break;
        case 'updateuser' :
                $iduser = $_POST['iduser'];
                $username =$_POST['username'];
                $password = $_POST['password'];
                $hoten =$_POST['hoten'];
                $gioitinh =$_POST['gioitinh'];
                $ngaysinh =$_POST['ngaysinh'];
                $diachi=$_POST['diachi'];
                $dienthoai=$_POST['dienthoai'];
                $user =new userCls();
                $rs = $user->UserUpdate($username, $password, $hoten, $gioitinh,$ngaysinh,$dienthoai,$iduser);
                if ($rs) {
                    header('location:../../index.php?req=userview&result=ok');
                } else {
                    header('location:../../index.php?req=userview&result=notok');
                }
                break;
                case 'checklogin':
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $user =new user();
                    $rs = $user->UserCheckLogin($username,$password);
                    if ($rs){
                        if ($username == "admin"){
                            $_SESSION['ADMIN']= $username;
                        } else{
                            $_SESSION['USER'] = $username;
                        }
                        header('location:../../index.php?req=userview&resul=ok');
                    }else {
                        header('location:../../elements_LMK/mUser/userView.php?req=usreview&resul=notok')
                    }
                    break;
                     case 'userloguot':
                        session_destroy();
                        header('location:../../index.php?');
                        break;
        
        default:
            header('location:../../index.php?req=userview');
            break;
        }
        
        } else{
 
    header('location:../../index.php?req=userview');
}
?>
