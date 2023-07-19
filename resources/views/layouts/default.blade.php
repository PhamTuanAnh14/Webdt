<!DOCTYPE html>
<html lang="en">
<header>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>MOBILE</title>
</header>
<style>
  * {
        margin: 0;
        padding: 0;
    }
  .nav-link a {
    text-transform: uppercase;
    color: #fff;
  }
  .nav-link a:hover{
    color: #408BEA;
    
  }
  .navbar-brand{
    color: red;
  }
  .icon-user a{
    color: #fff;
  }
  .navbar {
    background-color: red!important;
  }
  
</style>
<body>
<nav class="navbar navbar-expand-lg">
    
    <div class="container-fluid">

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- logo -->
        <a class="navbar-brand mt-2 mt-lg-0" href="/">MOBILE</a>

        <!-- links -->
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 color">
              <li class="nav-link"><a href="#">Trang chủ</a></li>
              <li class="nav-link"><a href="#">Iphone</a></li>
              <li class="nav-link"><a href="#">SamSung</a></li>
              <li class="nav-link"><a href="#">Realme</a></li>
              <li class="nav-link"><a href="#">Login</a></li>
        </ul>
        
      </div>
      

      <!-- icon -->
      <div class="d-flex align-items-center">
      
      
        <div class="icon">
              <div class="icon-user">
                  <a class="nav-link"href="/login">
                    <i class="fa fa-user"></i>
                    <span>Đăng nhập</span>
                  </a>
              </div>
      </div>
      
    </div>
    
  </nav>


<!-- @yield('contents') -->
@yield('contents')
@extends('layouts.footer')

</body>
</html>