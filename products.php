<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
        crossorigin="anonymous">
        <meta charset="utf-8">
        <title>products | المنتجات</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lora:ital@1&display=swap" rel="stylesheet">
        <style>
            h3{
                font-family: 'Cairo', sans-serif;
                font-weight: bold;
            }
            .card{
                float: right;
                margin-top: 20px;
                margin-left: 10px;
                margin-right: 10px;
            }
            .card img{
                width: 100%;
                height: 200px;
            }
            main{
                width: 55%;
            }
        </style>
    </head>
    <body>
        <center>
            <br>
            <h3>لوحة تحكم الآدمن</h3>
        </center>
        <?php
        include('config.php');
        $results = mysqli_query($con,"SELECT * FROM prod");
        while($row = mysqli_fetch_array($results)){
            echo "
            <center>
                <main>
                    <div class='card' style='width: 15rem;'>
                        <img src='$row[image]' class='card-img-top'>
                        <div class='card-body'>
                            <h5 class='card-title'>$row[name]</h5>
                            <p class='card-text'>$row[price]</p>
                            <a href='delete.php? id=$row[id]' class='btn btn-danger'>حذف منتج</a>
                            <a href='update.php? id=$row[id]' class='btn btn-primary'>تعديل منتج</a>
                        </div>
                    </div>
                </main>
            </center>
            ";
        }
        ?>
    </body>
</html>