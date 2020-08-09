<!DOCTYPE html>
<html>
    <head>
        <title> Login & Registration </title>
        <link rel="stylesheet" type="text/css" href="Style.css">
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    
    <body>
        <div class="container">
            <div class="login-box">
            <div class="row">
                <div class="col-md-6 login-left">
                    <h2> Login Here</h2>
                    <form action="Validation.php" method="post">
                        <div class="form-group">
                            <label> Username </label>
                            <input type="text" name="user" class="form-control" placeholder="Enter Username" required>  
                        </div>
                        
                        <div class="form-group">
                            <label> Password </label>
                            <input type="password" name="password" class="form-control" placeholder="Enter Password" required>  
                        </div>
                        <button type="submit" class="btn btn-primary"> Login </button>
                    </form>
                </div>
                
                <div class="col-md-6 register-right">
                    <h2> Register Here</h2>
                    <form action="Registration.php" method="post">
                        <div class="form-group">
                            <label> Username </label>
                            <input type="text" name="user" class="form-control" placeholder="Enter Username" required>  
                        </div>
                        
                        <div class="form-group">
                            <label> Password </label> 
                            <input type="password" name="password" class="form-control" placeholder="Enter Password" required>  
                        </div>
                        <button type="submit" class="btn btn-primary"> Register </button>
                    </form>
                </div>
            </div>    
            </div>
        </div>
    </body>
</html>
    