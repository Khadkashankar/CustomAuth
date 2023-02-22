<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Auth System</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudfare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.css"></script>
  <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">

  
</head>
<body>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
        <h5 class="my-0 mr-md-auto font-weight-normal">Company Name</h5>
        <nav class="my-2 my-md-0 mr-md-3 top-nav">
            <a class="p-2 text-dark" href="#">Home</a>
            <a class="p-2 text-dark" href="#">Login</a>
            <a class="p-2 text-dark" href="#">Profile</a>
        </nav>
        <a  class="btn btn-outline-primary" href="">Sign up</a>
    </div>
    <div class="container-fluid" style="min-height:74vh;">
@yield('body')
</div>
<footer style="height: 100px; background: black;"></footer>
<script type="text/javascript" src="{{asset('js/auth.js')}}"></script>
</body>
</html>