<main>
    <section class="sanpham">
        <h3>Quản Lí Sản Phẩm</h3>
        <div class="container">
            <form class="row g-3">
                <div class="col-auto">
                    <label for="timkiem_text" class="visually-hidden">Nhập vào từ khóa...</label>
                    <input type="text" class="form-control" id="timkiem_text" placeholder="Nhập vào từ khóa...">
                </div>
                <div class="col-auto ">
                    <select class="form-select " aria-label="Default select example" name="iddm" id="">
                        <option selected>Tất Cả</option>
                    </select>
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-3">Tìm Kiếm</button>
                </div>
            </form>
            <div class="table-responsive ">
                <table class="table table-bordered ">
                    <thead>
                        <tr>
                            <th scope="col">Chọn</th>
                            <th scope="col">Mã</th>
                            <th scope="col">Hình Ảnh</th>
                            <th scope="col">Tên Sản Phẩm</th>
                            <!-- Danh sách các thương hiệu -->
                            <th scope="col">Giá Tiền</th>
                            <th scope="col">Mô tả</th>
                            <th scope="col">Lượt Thích</th>
                            <th scope="col">Bình Luận</th>
                            <th scope="col">Hành Động</th>
                        </tr>
                    </thead>
                    <!-- Dữ liệu sản phẩm -->
                </table>
            </div>
            <div class="row">
                <div class="d-flex  p-1 m-1  ">
                    <input type="submit" class="btn btn-primary mx-1 py-1" value="Chọn Tất Cả">
                    <input type="reset" class="btn btn-primary mx-1 py-1" value="Bỏ chọn Tất Cả">
                    <input type="reset" class="btn btn-danger mx-1 py-1" value="Xóa Mục Đã Chọn">
                    <a href="index.php?act=themhh" class="btn btn-primary  mx-1">Nhập Thêm</a>
                    <a href="#" class="btn btn-primary  mx-1">Biểu Đồ Bình Luận</a>
                </div>
            </div>
        </div>
    </section>
</main>