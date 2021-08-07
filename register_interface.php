<?php
        //connect to database
        include("config.php");
        //read data of website
        $name =$_POST["username"];
        $sdt =$_POST["sdt"];
        $id_cmnd = $_POST["id_cmnd"];
        $so_xe = $_POST["soxe"];
        //send data to database
        $sql = "insert into parking (Name,ID_CMND,So_xe,phone) value ('$name','$id_cmnd','$so_xe','$sdt')";
        mysqli_query($conn,$sql);
        mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dang ky gui xe</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css">
    <style>
        body{ font:14px san-serif;background-color:burlywood;}
        .wrapper{float:left; width: 400px; padding:20px; margin: 50px;}
        .table_width{margin:auto; width:70%;}
        
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
</head>

<body>
    <div class="wrapper border border-primary rounded rounded-3">
        
        <h3>Dien vao bieu mau</h3>
        <br>
        <form action="" id="form">
            <div class="mb-3">
                <label for="name" class="form-label">Ho ten</label>
                <input type="text" class="form-control" name="username" id="username" aria-describedby="ghichu">
                <div id="ghichu" class="form-text">Thong tin cua ban se duoc bao mat.</div>
            </div>
            <div class="mb-3">
                <label for="sdt" class="form-label">So dien thoai</label>
                <input type="text" class="form-control" name="sdt" id="sdt" aria-describedby="ghichu">
                <div id="ghichu" class="form-text">Thong tin cua ban se duoc bao mat.</div>
            </div>
            <div class="mb-3">
                <label for="id_cmnd" class="form-label">ID/CMND</label>
                <input type="text" class="form-control" name="id_cmnd" id="id_cmnd" aria-describedby="ghichu">
                <div id="ghichu" class="form-text">Thong tin cua ban se duoc bao mat.</div>
            </div>
            <div class="mb-3">
                <label for="soxe" class="form-label">So xe</label>
                <input type="text" class="form-control" name="soxe" id="soxe" aria-describedby="ghichu">
                <div id="ghichu" class="form-text">Thong tin cua ban se duoc bao mat.</div>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <div class="wrapper border border-primary rounded rounded-3">
        <h3> Thong tin moi cap nhat </h3>
       
    
        <table class="table table-hover table-striped table_width">
            <tr>
                <th scope="col">Ho Ten</th> 
                <td id="td1">  </td>   
            </tr>
            <tr>
                <th scope="col">So dien thoai</th> 
                <td id="td2">  </td>   
            </tr>
            <tr>
                <th scope="col">ID/CMND</th> 
                <td id="td3"> </td>   
            </tr>
            <tr>
                <th scope="col">So Xe</th> 
                <td id="td4">  </td>   
            </tr>

        </table>
    </div>
    
    <div class="right_area">
        <a href="home.html" class="return_btn">Return Home</a>
</body>
</html>
