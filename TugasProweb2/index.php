
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>SINDHI</title>
        <link rel="icon" href="asset/images/images.jpg">
        <link rel="stylesheet"href="asset/css/bootstrap.css">
        <link rel="stylesheet"href="asset/css/floating-labels.css">
        <script src="asset/js/jquery.min.js"></script>
        <script src="asset/js/popper.min.js"></script>
        <script src="asset/js/bootstrap.min.js"></script>
        <style>
            body{ background-image: url("33.jpg");
                background-repeat: no-repeat;
                background-position: center;
                background-size: 100%;}
        </style>
        <script>
            function hallo(){
                var email=document.getElementById("inEmail").value;
                alert("WELCOME: "+email);
            }
        </script>
        <script>
            window.setTimeout(function(){
                $(".alert").fadeTo(500,0).slideUp(500, function(){
                    $(this).remove();
                });
                
            }, 9000);
        </script>
    </head>
    <body>
    
        <form id="frm01" name="frm01" method="POST" action="login.php" class="form-signin">
            <div class="text-center mb-4">
                <img class="mb-4" width="90" height="90" src="asset/images/images.jpg" >
                <h1>Wellcome...!!!</h1>
                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                Isikan Username Aslimu bukan Cinta Palsumu...!!! 
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="form-label-group">
                <input name="inEmail" class="form-control" type="email" id="inEmail" placeholder="Email Address" autofocus="yes" autocomplete="no" required="yes">
                <label for="inEmail">Email Address</label>
            </div>
            <div class="form-label-group">
                <input name="inPassword" class="form-control" type="password" id="inPassword" placeholder="Password" required="yes">
                <label for="inPassword">Password</label>
            </div>
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox">Remember me
                </label>
            </div>
            <button onclick="hallo();" type="submit" class=" btn btn-lg btn-outline-primary btn-block">Sign In</button>
            <center><b>&COPY;</b></center>
        
            
            
        </form>
        
        
    </body>
</html>
