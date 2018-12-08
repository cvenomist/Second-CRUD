<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body class="container p-3 mb-2 bg-light text-dark">

<h2>Welcome Students <?php echo ""; ?> </h2>




    
   <?php

   if(!empty($userdata)) {
    //echo base_url();
    foreach ($userdata as $key=>$name){


    $path = base_url()."user/$name->studentId";
    echo "<h4><a href=$path>".$name->studentName."</a></h4>";
   
   }
} 

   if(!empty($user)) {
       
     echo "<br><h4>Name : " .$user->studentName."</h4><br>";
     echo "<h4>Email : " .$user->studentEmail."</h4><br>";
     echo "<h4>Age : " .$user->studentAge."</h4><br>";
     $update = base_url()."update_user/".$user->studentId;
     $delete = base_url()."delete_user/".$user->studentId;
     $insert = base_url().'insert_user'; 
     echo "<br><a href='".$update."'><button class='btn btn-success'>Update User</button></a><br>";
     echo " <br><a href='".$delete."'><button class='btn btn-success'>Delete User</button></a><br>";
     echo "<br><a href='".$insert."'><button class='btn btn-success'>Insert Student</button></a><br>";
     

    } 
    
    if(!empty($check)) {
   
        echo "<br><br><form action='' method='post'>
        <br><input type='text' name='uname' value='".$user->studentName."'><br>
        <br><input type='text' name='uemail' value='".$user->studentEmail."'><br>
        <br><input type='text' name='uage' value='".$user->studentAge."'><br>
        <br><input class='btn btn-success' type='submit' name='submit' value='Update'><br>
        </form>";
    }

    if(!empty($check1)) {
   
        echo "<br><br><form action='' method='post'>
        <br><input type='text' name='iname' placeholder='Name'><br>
        <br><input type='text' name='iemail' placeholder='Email'><br>
        <br><input type='text' name='iage' placeholder='Age'><br>
        <br><input class='btn btn-success' type='submit' name='insert' value='insert'><br>
        </form>";

    }
 
   ?>


</body>
</html>
