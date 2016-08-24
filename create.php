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
                
                <div class="col-md-10">
                   <form>
                        <ul class="list-unstyled text-left">
                            <li>

                                <input type="text" class="form-control" placeholder="name">

                            </li><br>

                            <li><input type="text" class="form-control" placeholder="email">

                            </li><br>
                            <li><input type="text" class="form-control" placeholder="phone"></li><br><br>

                        </ul>
                    </form>
                </div>
                <div style="background-color:gray; padding:50px;" class="col-md-12">
                    <button class="col-md-offset-2 btn btn-success" name="back">CREATE</button>
                    <button class="btn btn-default" name="back">BACK</button>
                </div>    
            </div>    
    </div>


</body>
</html>