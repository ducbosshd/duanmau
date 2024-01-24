<main>
    <section class="sua_sp">
        <div class="container p-1">
            <div class="name_sua_sp text-center">
                <h3>Sửa Sản Phẩm</h3>
            </div>
            <div class="form_nd">
                <form action="index.php?act=capnhathh" class="form_sua_sp" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="tensp" class="form-label">Tên Sản Phẩm</label>
                        <input type="text" class="form-control" name="tenhh" id="tensp" value="">
                    </div>
                    <div class="mb-3">
                        <label for="giasp" class="form-label">Danh Mục</label>
                        <select name="iddm" id="" class="form-control">
                            <option value="">Tất Cả</option>
                            <!-- Danh sách danh mục -->
                        </select>
                    </div>
                    <!-- Các trường khác -->
                    <div class="mb-3">
                        <label for="giasp" class="form-label">Giá Tiền</label>
                        <input type="text" class="form-control" name="gia" id="giasp" value="">
                    </div>
                    <div class="mb-3">
                        <label for="giasp" class="form-label">Mô tả</label>
                        <textarea name="mota" class="form-control" cols="30" rows="10"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="hinhanhchinh" class="form-label">Hình Ảnh Chính</label><br>
                        <div class="image-container">
                            <!-- Hình ảnh chính -->
                            <input type="file" class="form-control" id="hinhanhchinh" name="hinhanhchinh">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="hinhanhphu" class="form-label">Hình Ảnh Chi Tiết</label>
                        <div class="hinhanhphu">
                            <div class="image-container image-chitiet">
                                <!-- Hình ảnh chi tiết -->
                            </div>
                            <input type="file" class="form-control hinhanhphu-input" id="hinhanhphu-1" name="hinhanhphu[]" multiple>
                        </div>
                    </div>
                    <div class="flex-column">
                        <input type="hidden" name="id" value="">
                        <button type="submit" class="btn btn-primary" name="luu_hh">Sửa Sản Phẩm</button>
                        <button type="reset" class="btn btn-secondary">Nhập Lại</button>
                        <a href="index.php?act=dshh" class="btn btn-primary">Danh Sách</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>
