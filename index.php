<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  </head>
  <style type="text/css">
    #ab1:hover{cursor:pointer;}
  </style>
  <body style="background:url('images/2.png'); background-size: cover;">
    <div class="container-fluid" style="width:400px;margin-top:50px;margin-bottom: 150px;">
           

     
          <div class="card">
            <div class="card-body">
            <img src="images/1.jpg" class="card-img-top">
             <center><h2>Admin Login</h2></center>
              <form class="form-group" method="post" action="func.php">
                <label>Username: </label><br>
                  <input type="text" name="username" class="form-control" placeholder="enter username" ><br>
                  <label>Password: </label><br>
                  <input type="password" class="form-control" name="password" placeholder="enter password" ><br>
                
               <center ><input type="submit" id="ab1" name="login_submit" value="submit" class="btn btn-primary"></center>
              </form>
            </div>
            </div>
          </div>
        </div>
         
      </div>
    </div>




   
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>