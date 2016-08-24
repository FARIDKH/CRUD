<!DOCTYPE html>
<html>
   <head>
       <title>PHP - ADMIN PANEL</title>
   </head>
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
       <style>
    
           input{
               width:200px  !important;
           }
           
        </style>
<body>

    <?php
    
    
    if(isset($_POST["create"])){  
        
        include "db.php";
        
        
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        
        
        
        
        
        $sql = "INSERT INTO register(name,email,mobile) VALUES('$name','$email','$phone')";
        
        $query=mysqli_query($db_con,$sql);
        
        
        if($query){
            header ('Location:index.php');
        }
        
    }else{
        
    }
    
    
    
    
    ?>    

    <div class="container">
        <h1>Create a Customer</h1>
        

           <div class="col-md-12">
               <div class="col-md-2">
                    <ul class="list-unstyled text-right">
                        <li>Name</li><br><br>
                        <li>Email Address</li><br><br>
                        <li>Phone Number</li><br><br>
                    </ul>
                </div>  
                
                <form action="" method="post">  
                    <div class="col-md-10">              
                            <ul class="list-unstyled text-left">
                                <li>

                                    <input type="text" class="form-control" name="name" placeholder="name">

                                </li><br>

                                <li>

                                    <input type="text" class="form-control" name="email" placeholder="email">

                                </li><br>

                                <li>
                                    <input type="text" class="form-control" name="phone"   placeholder="phone"></li><br><br>

                            </ul>

                    </div>
                    <div style="background-color:gray; padding:50px;" class="col-md-12">
                        <input type="submit" class="col-md-offset-2 btn btn-success" name="create" value="CREATE">
                        <button class="btn btn-default" name="back"><a href="index.php">BACK</a></button>
                    </div>
                </form>
            </div>    
    </div>

    
</body>
</html>