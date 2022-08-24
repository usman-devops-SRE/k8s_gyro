<!DOCTYPE html>
<html>
<head>
    <link href="admin.css" rel="stylesheet" type="text/css">
    <title> </title>
    <?php include 'links.php' ?>
</head>
    <body>
    <header>
        <div class="containter center-div ">
            <div class="heading text-center text-uppercase text-white">Gyro Cafe Admin Login</div>
            <div class="container row d-flex flex-row justify-content-center mb-5">
                <div class="admin-form">
                    <form action="admincheck.php" method="POST">
                        <div class="form-group">
                            <label>Email ID</label>
                            <input type="text" name="user" value="" class="form-control" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="text" name="pass" value="" class="form-control" autocomplete="off">
                        
                        </div>
                        <input type="submit" class="btn btn-success" name="submit">
                    </form>
                
                </div>
            
            </div>
        
        </div>
    
    </header>

    
    </body>


</html>