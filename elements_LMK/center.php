<?php
    if(isset($_REQUEST['req'])) {
        $request = $_REQUEST['req'];
        switch ($request) {
            case 'exjs01':
                require './pageJS/exjs.php';
                break;

            case 'exjs02':
                require './pageJS/exjs02.php';
                break;

            case 'exjs03':
                require './pageJS/exjs03.php';
                break;
            
            case 'userview':
                require './elements_LMK/mUser/userView.php';
                break;
            case 'updateuser':
                require './elements_LMK/mUser/userUpdate.php';
                break;
        }
    }
    else {
        require './elements_LMK/default.php';
    }
?>