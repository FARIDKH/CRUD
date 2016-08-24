<!DOCTYPE html>
<html>
    <head>
        <title>PHP - ADMIN PANEL</title>
    </head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <body>
       <div class="container">
            <h1>PHP CRUD GRID</h1>
            <form action="create.php" method="post">
                <a href="create.php">
                    <input type="button" class="btn btn-success"  value="CREATE"><br>  
                </a>
            </form>    
               
                <?php
                
                
                
                $host = "localhost";
                $user_name = "root";
                $password = "";
                $db_name=  "register";

                $db_con = mysqli_connect($host, $user_name , $password , $db_name);
           
                if($db_con){
                $sql = "SELECT * FROM register";
                $query = mysqli_query($db_con,$sql); ?>

                <tbody>
                    <table class="table table-bordered">
                        <tr>
                            <th>ID</th>
                            <th>NAME</th>
                            <th>EMAIL ADDRESS</th>
                            <th>MOBILE NUMBER</th>
                            <th colspan="3">ACTION</th>
                        </tr>
                        <?php 

                        while($row = mysqli_fetch_assoc($query)){
                            ?> <tr> <?php 
                            foreach($row as $key => $value){ ?>
                               
                                <td><?= $value ?></td>
                        <?php } ?> <td>
                                        <a href="read.php?id=<?= $row['id'] ?>" class="btn btn-default">READ</a>
                                    </td>
                                    <td>
                                        <a href="update.php?id=<?= $row['id'] ?>" class="btn btn-success">UPDATE</a>
                                    </td>
                                    <td>
                                        <a href="delete.php?id=<?= $row['id'] ?>" class="btn btn-danger">DELETE</a>
                                    </td>
                                </tr> <?php 
                        }    
                    
                    
                        ?>
                    </table>
                </tbody>    

                <?php  } else {
                        echo "database e qosulmadiniz!";
                    }

                    ?>

                
            </tbody>
        </div>
    </body>
</html>