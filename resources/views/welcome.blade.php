<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Webdt</title>
    <!-- Option 1: Include in HTML -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    
  </head>
  <!-- thanh mở menu -->
    <body class="antialiased">
<!-- thanh menu -->
<nav class="navbar navbar-expand-lg ">
  <div class="container-fluid">
    <a class="navbar-brand" href="/content">Trang chủ</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="iphone">Iphone</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/samsung">SamSung</a>
        </li>
      
        <li class="nav-item">
          <a class="nav-link " href="/realme">Realme</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link " href="/login">Login</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-warning" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>


    </body>
</html>
@yield('contents')
@extends('layouts.footer')
<style>
  * {
    max-width: 1200px;
    margin: 0 auto;
  }
  .navbar {
    background-color: #ffd400;
  }
  .btn-outline-warning {
    border-color: #000;
    background-color: #fff;
    color:#000;
  }
</style>