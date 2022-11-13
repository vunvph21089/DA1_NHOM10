<?php
    function insert_bds($tenbds,$avatar,$price,$diachi,$dientich,$info,$sophong,$id_loaibds){
        $sql = "INSERT INTO `bds` (`name`, `img`, `price`, `location`, `dientich`, `info`, `sophong`, `id_loaibds`) 
        VALUES ('$tenbds', '$avatar', '$price', '$diachi', '$dientich', '$info', '$sophong', '$id_loaibds')";
        pdo_execute($sql);
    }
    function delete_bds($id){
        $sql = "DELETE FROM bds WHERE id=".$id;
        pdo_execute($sql);
    }
    function loadall_bds($keyword="", $id_loaibds=0){
        $sql = "SELECT * FROM bds WHERE 1";
        if($keyword!=""){
            $sql.=" and name like '%".$keyword."%'";
        }
        if($id_loaibds>0){
            $sql.=" and id_loaibds= '".$id_loaibds."' ";
        }
        
        $sql.=" ORDER BY id DESC";
        $listbds = pdo_query($sql);
        return $listbds;
    }
    function loadall_pro_home(){
        $sql = "SELECT*FROM products WHERE 1 ORDER BY id DESC LIMIT 0,9";
        $listpro = pdo_query($sql);
        return $listpro;
    }
    function loadall_pro_top10(){
        $sql = "SELECT*FROM products WHERE 1 ORDER BY view DESC LIMIT 0,10";
        $listpro = pdo_query($sql);
        return $listpro;
    }
    function load_ten_dm($iddm){
        if($iddm>0){
        $sql = "SELECT * FROM categories WHERE id=".$iddm;
        $dm = pdo_query_one($sql);
        extract($dm);
        return $name;
        }else{
            return "";
        }
    }
    function loadone_pro($id){
        $sql = "SELECT * FROM products WHERE id=".$id;
        $sp = pdo_query_one($sql);
        return $sp;
    }
    function load_pro_cungloai($id, $iddm){
        $sql = "SELECT * FROM products WHERE iddm=".$iddm." AND id<>".$id;
        $listpro = pdo_query($sql);
        return $listpro;
    }
    function update_pro($id,$iddm, $tensp, $price, $mota, $image){
        if($image!=""){
            $sql = "UPDATE `products` SET `name` = '$tensp', `price` = '$price',`img` = '$image', `mota` = '$mota', `iddm` = '$iddm' 
            WHERE `products`.`id` = $id";
        }else
        $sql = "UPDATE `products` SET `name` = '$tensp', `price` = '$price', `mota` = '$mota', `iddm` = '$iddm' 
        WHERE `products`.`id` = $id";
        pdo_execute($sql);
    }
