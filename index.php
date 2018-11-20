<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
--><?php
include("dbconn.php");

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="test.php" method="post">
         <select name="Names" id="Names">
             <option name="">-select a name-</option>
        <?php 
         $mysqldb="select * from emp ";  
         $result = mysqli_query($conn,$mysqldb);
        while($row = mysqli_fetch_assoc($result)) 
        {
        ?>
            
         <option name="opselect"><?php echo $row['name']; ?></option>
       
         <?php          
        }
        ?>
          </select>  
          <!-- <input type="search" name="search">-->
            <input type="submit" name="submit" onclick="return chk();">
        </form>
        
        
        <script>
            function chk(){
             var un=document.getElementById("Names").value;    
        // var un=document.getElementsById("Names").value;
        
         if(un=="-select a name-")
         {
           alert("pls se");
             return false;
         }
         else
         {
             return true;
         }
     }
        </script>
    </body>
</html>
