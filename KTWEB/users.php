<?php include('admin/config.php');
        include 'admin/header.php' 
?>

    <div class="container">
        <div class="wrapper">
            <?php
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $sql = "select * from drugs where id='$id'";
                $rs = mysqli_query($conn, $sql);
                if (mysqli_num_rows($rs) > 0) {
                    $row = mysqli_fetch_assoc($rs);
                    $name = $_POST['name'];
        $type = $_POST['type'];
        $barcode = $_POST['barcode'];
        $dose = $_POST['dose'];
        $code = $_POST['code'];
        $cost_price = $_POST['cost_price'];
        $selling_price = $_POST['selling_price'];
        $expiry = $_POST['expiry'];
        $company_name= $_POST['company_name'];
        $production_date= $_POST['production_date'];
        $expiration_date = $_POST['expiration_date'];
        $place = $_POST['place'];
        $quantity = $_POST['quantity'];
                }
            }
            ?>
            <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Tên Thuốc</label>
            <input type="text" class="form-control" readonly id="empName" name = "empName" >
    </div>

    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Loại thuốc</label>
            <input type="text" class="form-control" readonly id="empPosition" name ="empPosition" >
    </div>

    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Mã vạch</label>
            <input type="text" class="form-control" readonly id="empPhone" name ="empPhone"  >
    </div>

    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Liều lượng</label>
            <input type="text" class="form-control" readonly id="empEmail" name = "empEmail" >
    </div>

    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Mã</label>
            <input type="text" class="form-control" readonly id="empEmail" name = "empEmail" >
    </div>

    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Giá Nhập</label>
            <input type="text" class="form-control" readonly id="empEmail" name = "empEmail" >
    </div>

    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Giá bán</label>
            <input type="text" class="form-control" readonly id="empEmail" name = "empEmail" >
    </div>

    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Trạng thái hạn sử dụng</label>
            <input type="text" class="form-control" readonly id="empEmail" name = "empEmail" >
    </div>

    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Công ty</label>
            <input type="text" class="form-control" readonly id="empEmail" name = "empEmail" >
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
            <input type="text" class="form-control" readonly id="empEmail" name = "empEmail" >
    </div>

    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Số lượng</label>
            <input type="text" class="form-control" readonly id="empEmail" name = "empEmail" >
    </div>
        </div>

    </div>

<?php include 'admin/footer.php' ?>