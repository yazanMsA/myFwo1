<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>منتجاتي</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
    crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital@1&display=swap" rel="stylesheet">
    <style>
        h3{
            font-family: 'Cairo','sans-derif';
            font-weight: bold;
        }
        main{
            width: 40%;
            margin-top: 30px;
        }
        .table{
            box-shadow: 1px 1px 10px silver;
        }
        thead{
            background-color: #3498DB;
            color: white;
            text-align: center;
        }
        tbody{
            text-align: center;
        }
    </style>
</head>
<body>
   <?php
   include('config.php');
   $ID = $_GET['id'];
   $up = mysqli_query($con,"SELECT id,image,name,price FROM prod WHERE id=$ID");
   while($resul = mysqli_fetch_array($up)){
    echo "
    <br>
    <center>
    <main>
    <h3>المنتجات المحجوزة</h3>
    <br>
    <table class='table'>
    <thead>
    <tr>
    <th scope='col'>ازالة المنتج</th>
    <th scope='col'>سعر المنتج</th>
    <th scope='col'>اسم المنتج</th>
    </tr>
    </thead>
    <tbody>
    <tr>
    <td><a href='del_card.php? id=$resul[id]' class='btn btn-danger'>ازالة المنتج</a></td>
    <td>$resul[price]</td>
    <td>$resul[name]</td>
    </tr>
    </tbody>
    </table>
    </main>
    </center>
    ";
   }
   ?>
   <center>
    <a href="shop.php">الرجوع لصفحة المنتجات</a>
   </center>
</body>
</html>