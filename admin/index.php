<?php
include "../model/pdo.php";
include "../model/bds.php";
include "header.php";

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
            // Controller bat dong san
        case 'addbds':
            if (isset($_POST['submit']) && ($_POST['submit'])) {
                $id_loaibds = $_POST['loaibds'];
                $tenbds = $_POST['name_bds'];
                $avatar = $_FILES['avatar']['name'];
                $price = $_POST['gia'];
                $diachi = $_POST['diachi'];
                $dientich = $_POST['dientich'];
                $info = $_POST['mota'];
                $sophong = $_POST['sophong'];
                // $nguoidang = $_POST['nguoidang'];
                $target_dir = "../uploads/";
                $target_file = $target_dir . basename($_FILES["avatar"]["name"]);

                if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file)) {
                } else {
                }
                insert_bds($tenbds,$avatar,$price,$diachi,$dientich,$info,$sophong,$id_loaibds);
                $thongbao = "Add Succesfull";
            }
            include "bds/add_bds.php";
            break;
        case 'listbds':
            if(isset($_POST['search'])&& ($_POST['search'])){
                $keyword = $_POST['keyword'];
                $iddm = $_POST['id_loaibds'];
            }else{
                $keyword = "";
                $iddm = 0;
            }
            $listbds = loadall_bds($keyword, $id_loaibds);
            include "bds/list_bds.php";
            break;
        case 'deletebds':
            if(isset($_GET['id']) && ($_GET['id']>0)){
                delete_bds($_GET['id']);
                }
                $listbds = loadall_bds();
            include "bds/list_bds.php";
            break;
        case 'fixbds':
            
            include "bds/update_bds.php";
            break;
        case 'updatebds':
            include "bds/add_bds.php";
            break;
        default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
}
include "footer.php";
