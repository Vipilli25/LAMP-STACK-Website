<?php
    include("connect.php");
    if(isset($_POST['btn']))
    {
        $college_name=$_POST['college_name'];
        $place=$_POST['place'];
        $year=$_POST['year'];
        $item_id = $_GET['item_id'];
        $q= "update c_list set college_name='$college_name', place='$place' ,year='$year' where item_id=$item_id";
        $query=mysqli_query($con,$q);
        header('location:index.php');
    } 
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Update List</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
      
    </head>
    <body>
        <div class="container mt-5">
            <h1>Update College List</h1> 
            <form method="post">
                <div class="form-group">
                    <label>College name</label>
                    <input type="text" class="form-control" name="college_name" placeholder="college_name" value="<?php echo $res['college_name'];?>"/>
                </div>
                <div class="form-group">
                    <label>place</label>
                    <input type="text" class="form-control" name="place" placeholder="place" value="<?php echo $res['place'];?>"/>
                </div>
                <div class="form-group">
                    <label>year</label>
                    <input type="text" class="form-control" name="year" placeholder="year" value="<?php echo $res['year'];?>"/>
                </div>
                <div class="form-group">
                    <input type="submit" value="Update" name="btn" class="btn btn-danger">
                </div>
            </form>
        </div>
    </body> 
</html>
