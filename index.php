<?php
session_start();
include "view/header.php";
if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'detail':
            // code  vao day

            include 'view/detail.php';
            break;

        case 'hotdeals':
            // code  vao day

            include 'view/hotdeals.php';
            break;

        case 'features':
            include 'view/features.php';
            break;

        case 'blog':
            // code  vao day

            include 'view/blog.php';
            break;

        case 'contact':
            // code  vao day

            include 'view/contact.php';
            break;

        case 'register':
            // code  vao day
            // if (isset($_POST['dangky']) && ($_POST['dangky'])) {
            //     $email = $_POST['email'];
            //     $user = $_POST['user'];
            //     $pass = $_POST['password'];
            //     insert_account($email, $user, $pass);
            //     $thongbao = "Đăng ký thành công. Đăng nhập để sử dụng chức năng";
            // }
            include 'view/account/register.php';
            break;

        case 'login':
            // code  vao day
            // if (isset($_POST['login']) && ($_POST['login'])) {
            //     $user = $_POST['user'];
            //     $pass = $_POST['pass'];
            //     $checkuser = checkuser($user, $pass);
            // if(is_array($checkuser)){
            //     $_SESSION['user'] = $checkuser;
            //     header('Location: index.php');
            // }else{
            //     $thongbao = "Tài khoản không tồn tại vui lòng kiểm tra HOẶC đăng kí mới";
            // }
            // }
            include 'view/account/login.php';
            break;
    }
} else {

    include "view/home.php";
}
include "view/footer.php";

