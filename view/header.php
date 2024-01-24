<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/css.css">
    <link rel="stylesheet" href="css_bootstrap/bootstrap.min.css">
    <script src="js_bootstrap/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/b1ce9c2366.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <section class="logo">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <img src="img/boss.jpg" class="img-fluid" alt="" width="200px">
                    </div>
                    <div class="col-md-3 p-0 item_hearder">
                        <div class="row py-4">
                            <div class="col py-1">
                                <div class="fs-3">
                                    <i class="fa-regular fa-user"></i>
                                </div>
                            </div>
                            <div class="col">
                                <a href="trangchu.php?act=dangnhap" class="item_dangnhap">
                                    Xin Chào <br>
                                    <strong>ĐăngNhập</strong>
                                </a>
                            </div>
                            <div class="col py-1">
                                <a href="#" class="position-relative">
                                    <span class="fs-3" style="color: black;"><i
                                            class="fa-solid fa-cart-shopping"></i></span>
                                    <span
                                        class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                        0
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="menu">
            <div class="container" style="background-color: bisque;">
                <nav class="navbar navbar-expand-lg navbar-light ">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="trangchu.php" style="color:black;">Trang Chủ</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#mynavbar">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="mynavbar">
                            <ul class="navbar-nav me-auto">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                        style="color:black">Danh Mục</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Áo</a></li>
                                        <li><a class="dropdown-item" href="#">Quần</a></li>
                                        <li><a class="dropdown-item" href="#">Phụ Kiện</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="trangchu.php?act=sanpham" style="color:black">Sản Phẩm</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="javascript:void(0)" style="color:black">Tin Tức</a>
                                </li>
                            </ul>
                            <form class="d-flex">
                                <input class="form-control me-2" type="text" placeholder="Tìm Kiếm">
                                <button class="btn btn-primary" type="button">Search</button>
                            </form>
                        </div>
                    </div>
                </nav>
            </div>
        </section>
    </header>
    <!-- end header -->