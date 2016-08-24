<!DOCTYPE html>
<html>
    <head>
        <title>PHP - MY ADMIN</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <style>
        
            .col-md-10 ul li:first-child{
                display:none
            }
            
            li{
                line-height: 45px;
            }
            
        </style>
    </head>
    <body>
        <div class="container">
            <h1>Read a Customer</h1>
            <div class="col-md-12">
               <div class="col-md-2">
                    <ul class="list-unstyled text-right">
                        <li>Name</li>
                        <li>Email Address</li>
                        <li>Phone Number</li>
                    </ul>
                </div>  
                
                <div class="col-md-10">
                    <ul class="text-left" style="list-style-type:none">
                            <?php                           
                            
                            
                            include 'db.php';  
                            
                            $id = $_GET['id'];
                            
                            
                            $sql = "SELECT * FROM register WHERE id = $id";
                            $query = mysqli_query($db_con,$sql);
                            
                            
                            
                            $row = mysqli_fetch_assoc($query);
                            foreach($row as $key => $value){ ?>
                                <li> <?= $value  ?></li>
                         <?php  }
                            
                            
                            
                            ?>
                        
                    </ul>
                </div>
                <div style="background-color:gray; padding:50px;" class="col-md-12">
                   <button class="btn btn-default" name="back"><a href="index.php">BACK</a></button>
                </div>    
            </div>
        </div>
    </body>
</html>