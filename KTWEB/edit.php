<?php
    include 'admin/header.php';
    include 'admin/config.php';
    
?>
  <main class = 'container'>
      <h2>Sửa thông tin </h2>
      <form action="process-addE.php" method="post">
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Tên Thuốc</label>
            <input type="text" class="form-control" id="empName" name = "empName" placeholder="Nhập Tên thuốc....">
    </div>

    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Loại thuốc</label>
            <input type="text" class="form-control" id="empPosition" name ="empPosition" >
    </div>

    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Mã vạch</label>
            <input type="text" class="form-control" id="empPhone" name ="empPhone"  >
    </div>

    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Liều lượng</label>
            <input type="text" class="form-control" id="empEmail" name = "empEmail" placeholder="Nhập email....">

    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Mã</label>
            <input type="text" class="form-control" id="empEmail" name = "empEmail" placeholder="Nhập email....">
    </div>

    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Giá Nhập</label>
            <input type="text" class="form-control" id="empEmail" name = "empEmail" placeholder="Nhập email....">
    </div>

    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Giá bán</label>
            <input type="text" class="form-control" id="empEmail" name = "empEmail" placeholder="Nhập email....">
    </div>

    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Trạng thái hạn sử dụng</label>
            <input type="text" class="form-control" id="empEmail" name = "empEmail" placeholder="Nhập email....">
    </div>

    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Công ty</label>
            <input type="text" class="form-control" id="empEmail" name = "empEmail" placeholder="Nhập email....">
    </div>

    <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Ngày sản xuất</label>
                    <div class="col-sm-10">
                        <input name="bd_reg_date" type="date" class="form-control" id="inputPassword3">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Ngày hết hạn</label>
                    <div class="col-sm-10">
                        <input name="bd_reg_date" type="date" class="form-control" id="inputPassword3">
                    </div>
                </div>

    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Nơi sản xuất</label>
            <input type="text" class="form-control" id="empEmail" name = "empEmail" placeholder="Nhập email....">
    </div>

    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Số lượng</label>
            <input type="text" class="form-control" id="empEmail" name = "empEmail" placeholder="Nhập email....">
    </div>

   
                         
           </select>
        </div>

        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label"></label>
                <button type="submit" class="btn btn-primary">Lưu lại</button>
        </div>
            
        </form>
  </main>
<?php
    include 'admin/footer.php';
?> 