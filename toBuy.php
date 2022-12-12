<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>تأكيد الشراء</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
    crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital@1&display=swap" rel="stylesheet">
    <style>
        .main{
            width: 40%;
            height: 20%;
            background-color: white;
            box-shadow: 1px 1px 10px silver;
            margin-top: 45px;
            padding: 10px;
        }
        h2{
            font-family: 'Cairo', sans-serif;
        }
        li{
            list-style: none;
        }
        .btn-t1, .btn-t2{
            background-color: #326789;
            color: white;
            width: 70%;
            height: 12%;
            border: 1px;
            border-radius: 50px;
            font-size: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>
<?php
include('config.php');
$ID = $_GET['id'];
$up = mysqli_query($con,"SELECT id,name,price FROM prod WHERE id=$ID");
while($data = mysqli_fetch_array($up)){
    echo "
    <center>
    <div class='main'>
    <h2>هل فعلا تريد الشراء ؟</h2>
    <ul>
    <li><div class='btn btn-t1'>$data[name]</div></li>
    <br>
    <li><div class='btn btn-t2'>$data[price]</div></li>
    </ul>
    <a class='btn btn-primary' href='buyIt.php? id=$data[id]'>تأكيد الشراء</a>
    <br>
    <br>
    </div>
    </center>
    ";
}
?>
</body>
</html>