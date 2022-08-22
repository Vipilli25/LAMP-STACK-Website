<html>

    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <title>Add college</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

        

    </head>

    <body>

        <div class="container mt-4 pt-5 bt-2">

            <h1>Add new college details</h1>

            <form action="add.php" method="POST">
              

                <div class="form-group">

                    <label>College Name</label>

                    <input type="text" class="form-control" placeholder="college name" name="college_name"/>

                </div>

                <div class="form-group">

                    <label>place</label>

                    <input type="text" class="form-control" placeholder="place"  name="place"/>

                </div>

                <div class="form-group">

                    <label>year</label>

                    <input type="text" class="form-control" placeholder="year"  name="year"/>

                </div>

                <div class="form-group">

                    <input type="submit" value="Add" class="btn btn-primary" name="btn">

                </div>
                
                

            </form>

        </div>

<?php

           if(isset($_POST["btn"]))

           {
               include("connect.php");

               $college_name=$_POST['college_name'];

               $place=$_POST['place'];

               $year=$_POST['year'];


               $q="insert into c_list(college_name,place,year)values('$college_name','$place','$year')";

               mysqli_query($con,$q);
               header("location:index.php");
           }

         ?>



    </body>

</html>
