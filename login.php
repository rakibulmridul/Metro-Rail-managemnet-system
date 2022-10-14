<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="author" content="MRIDUL">
  <meta name="description" content="Login page">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="icon" type="png/gif" href="img/images.png">

  <title> Login </title>
  </head>

  <body>
    <div class="title">
      <h1 id="h1ForUser"> Metro Rail </h1>
      <h4 id="h4ForUSer"> Admin</h4>


    </div>

    <div class="login_form">

      <form method="post" action="backend_file/login_backend.php">
      <h3 id="h3ForUser"> User Login</h3>

        <table>
          <tr>
            <th>
              <label for="UserName"> Username</label>
            </th>
          <th>
            <input type="text" name="UserName" placeholder="Enter Your Id">
            </tr>

              <tr>
                <th>
                  <label for="Password">Password</label>
                </th>
                <th>
                  <input type="text" name="Password" placeholder="Enter Your Password">
                </th>
              </tr>
              <th> <input type="submit"  value="Login" style="margin-left: 100px; margin-top: 20px;" ></th>

              <tr>
                <th> </th>
                <th> <a href="#"> Forgot Password </a> </th>


          </table>
        </form>
    </div>

  </body>




  <footer>
  </footer>





</html>
