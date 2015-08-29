<?php  session_start();     ?>

<!DOCTYPE html>
<html lang="en"><head>
    

    <title>Signin </title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }}">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{ URL::asset('css/signin.css') }}">
   

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script type="text/javascript" src="{{ URL::asset('js/ie-emulation-modes-warning.js') }}"></script>
   

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>

  <body>   

    <div class="container">

      <form action="connect.php" method="post" class="form-signin" >
        <h2 class="form-signin-heading">Please input</h2>
        <label for="inputName" class="sr-only">Name</label>
        <input id="inputName" class="form-control" name="name" placeholder="Name" required="" autofocus="" type="text">
        <br>
        <label for="inputContent" class="sr-only">Password</label>
        <input id="inputContent" class="form-control" name="pw" placeholder="Password" required="" autofocus="" type="password">
        <br>

        <a href="./register.html">Register</a>

        <!--
         <div class="checkbox">
          <label>
            <input value="remember-me" type="checkbox"> Remember me
          </label>
        </div>
        -->
        <button class="btn btn-lg btn-primary btn-block" type="submit" >Submit</button>
      </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script type="text/javascript" src="{{ URL::asset('js/ie10-viewport-bug-workaround.js') }}"></script>

  

</body></html>