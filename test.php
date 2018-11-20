<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div>
        <?php
        print_r($_REQUEST);
       include("dbconn.php");
     
//        if(isset($_REQUEST['search']))
//        {
//            $search=$_REQUEST['search'];
//            $mysqldb="select * from emp where name like '$search%'  or password like'$search%' or email like'$search%'";
//             $result = mysqli_query($conn,$mysqldb);
//        while($row = mysqli_fetch_assoc($result)) 
//        {
//            
//                            echo  "Name     : ". $row['name']."<br/>";
//                            echo  "Email    : ". $row['email']."<br/>"; 
//                            echo  "Password : ". $row['password']."<br/>";
//                            echo "----------------------------------------<br/>";
//        }
//        }
//        
        if(isset($_REQUEST['submit']))
        {
            $search=$_REQUEST['Names'];
            $mysqldb="select * from emp where name='$search'";
             $result = mysqli_query($conn,$mysqldb);
        while($row = mysqli_fetch_assoc($result)) 
        {
            
                            echo  "Name     : ". $row['name']."<br/>";
                            echo  "Email    : ". $row['email']."<br/>"; 
                            echo  "Password : ". $row['password']."<br/>";
                            echo "----------------------------------------<br/>";
        }
        }
        ?>
            </div>
    </body>
</html>
