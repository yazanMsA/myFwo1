<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>update-تعديل</title>
        <link rel="stylesheet" href="index.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lora:ital@1&display=swap" rel="stylesheet">
    </head>
    <body>
        <?php
        /*كود تحديد البيانات*/
        include('config.php');
        $ID = $_GET['id'];
        $up = mysqli_query($con, "SELECT * FROM prod WHERE id=$ID");
        $data = mysqli_fetch_array($up);

        /*كود جلب البيانات وتحديثها*/

        if(isset($_POST['update'])){
            $NAME = $_POST['name'];
            $PRICE = $_POST['price'];
            $IMAGE = $_FILES['image'];
            $image_location = $_FILES['image']['tmp_name'];
            $image_name = $_FILES['image']['name'];
            $image_up = "images/".$image_name;
            $update = "UPDATE prod SET name='$NAME' , price='$PRICE' , image='$image_up' WHERE id=$ID";
            mysqli_query($con,$update);
            if(move_uploaded_file($image_location,'images/'.$image_name)){
                echo "<script>alert('تم تحديث الصورة بنجاح')</script>";
            }else{
                echo "<script>alert('حدث خطأ')</script>";
            }
            header('location: products.php');
        }
        ?>
        <center>
            <div class="main">
                <form method="POST" enctype="multipart/form-data">
                    <h2>تعديل المنتجات</h2>
                    <input type="text" name="id" placeholder="<?php echo $data['id'] ?>">
                    <br>
                    <input type="text" name="name" placeholder="<?php echo $data['name'] ?>">
                    <br>
                    <input type="text" name="price" placeholder="<?php echo $data['price'] ?>">
                    <br>
                    <input type="file" id="file" name="image" style="display:none;">
                    <label for="file">تحديث صورة المنتج</label>
                    <button name="update">تعديل المنج</button>
                    <br>
                    <a href="products.php">عرض المنتجات</a>
                 </form>
            </div>
        </center>
    </body>
</html>