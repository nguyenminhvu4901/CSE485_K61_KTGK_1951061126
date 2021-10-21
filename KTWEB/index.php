<?php 
    include'admin/header.php';
   
?>
 <h2 style ='color: red; text-align: center;'>Đây là trang thêm sửa xóa</h2>
    <a href = "addE.php?id='.$row['id']." class="btn btn-primary"><i class="fas fa-user-plus"></i> Thêm Thông tin</a>
  
   
    <main>
        <table class="table table-success table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Tên Thuốc</th>
                    <th scope="col">Loại Thuốc</th>
                    <th scope="col">Mã vạch</th>
                    <th scope="col">Liều lượng</th>
                    <th scope="col">Mã</th>
                    <th scope="col">Giá nhập</th>
                    <th scope="col">Giá bán</th>
                    <th scope="col">Trạng thái hạn sử dụng</th>
                    <th scope="col">Công ty</th>
                    <th scope="col">Ngày sản xuất</th>
                    <th scope="col">Ngày hết hạn</th>
                    <th scope="col">Nơi sản xuất</th>
                    <th scope="col">Số lượng</th>
                    <th scope="col">Sửa thông tin</th>
                    <th scope="col">Xóa thông tin</th>
                    <th scope="col">chi tiết</th>
                    
                </tr>
            </thead>
            <tbody>
            
            <?php
                   
                    include 'admin/config.php';                 
                    $sql = 'SELECT * from drugs';                  
                    $result = mysqli_query($conn,$sql);                   
                    if(mysqli_num_rows($result)>0)
                    {
                        while($row = mysqli_fetch_assoc($result))
                        {
                            echo'<tr>';
                                echo'<th scope="row">'.$row['id'].'</th>';
                                echo'<td>'.$row['name'].'</td>';
                                echo'<td>'.$row['type'].'</td>';
                                echo'<td>'.$row['barcode'].'</td>';
                                echo'<td>'.$row['dose'].'</td>';
                                echo'<td>'.$row['code'].'</td>';
                                echo'<td>'.$row['cost_price'].'</td>';
                                echo'<td>'.$row['selling_price'].'</td>';
                                echo'<td>'.$row['expiry'].'</td>';
                                echo'<td>'.$row['company_name'].'</td>';
                                echo'<td>'.$row['production_date'].'</td>';
                                echo'<td>'.$row['expiration_date'].'</td>';
                                echo'<td>'.$row['place'].'</td>';
                                echo'<td>'.$row['quantity'].'</td>';
                                echo'<th><a href="edit.php?id='.$row['id'].'"><button type="button" class="btn btn-danger">update</button></a></th>';
                                echo'<th><a href="delete.php?id='.$row['id'].'"><button type="button" class="btn btn-primary">delete</button></a></th>';
                                echo'<th><a href="users.php?id='.$row['id'].'>"">Chi tiết</a></th>';
                            echo'</tr>';
                        }
                    }
                    ?>
            </tbody>    
        </table>
    </main>
   


<?php 
    include 'admin/footer.php';
?> 