<?php

include "view/header.php";


if(isset($_GET['act']) && ($_GET['act'] != "")){
    $act = $_GET['act'];
    
    switch ($act) {
        case "sanpham":
            include "view/sanpham.php";
            break;
        case "sanphamct":
            include "view/chitietSp.php";
            break;
        case "dangky":
            include "view/login/dangky.php";
            break;       
        case "dangnhap": 
            include 'view/login/dangnhap.php';          
            break;
        case "dangxuat":
            break;    
        case "quenmk":
            include "view/login/quenmk.php";
            break;
    }
}else{
    include "view/home.php";
}
include "view/footter.php";
?>