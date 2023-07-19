<header>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>MOBILE login</title>
</header>

<section class="vh-100">
<a class="float-right m-3 font-weight-bold cancel" href="/">X</a>
   <div class="container-fluid h-custom">
         <div class="row d-flex justify-content-center align-items-center h-100">
         <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
            @if (count($errors) > 0)
               <div class="alert alert-danger">
                  Thông tin đăng ký không đầy đủ, bạn cần chỉnh sửa như sau:
                  <ul>
                     @foreach ($errors->all() as $error)
                           <li>{{ $error }}</li>
                     @endforeach
                  </ul>
               </div>
            @endif
            @if (isset($message))
               <div class="alert alert-success">
               {{ $message }}
               </div>
            @endif
            {!! Form::open(array('url' => '/register', 'class' => 'form-horizontal')) !!}
            <h1 class="fw-normal mb-0 me-5 font-weight-bold p-3 logobrand">TKBMOVIES</h1>



               <div class="form-outline mb-0">
                  {!! Form::label('name', 'Họ tên', array('class' => 'col-sm-3 control-label')) !!}
                  <div class="col-sm-100">
                     {!! Form::text('name', '', array('class' => 'form-control form-control-lg')) !!}
                  </div>
               </div>

               <div class="form-outline mb-0">
                  {!! Form::label('email', 'Email', array('class' => 'col-sm-3 control-label')) !!}
                  <div class="col-sm-100">
                     {!! Form::email('email', '', array('class' => 'form-control form-control-lg')) !!}
                  </div>
               </div>

               <div class="form-outline mb-0">
                  {!! Form::label('password', 'Password', array('class' => 'col-sm-3 control-label')) !!}
                  <div class="col-sm-100">
                     {!! Form::password('password', array('class' => 'form-control form-control-lg')) !!}
                  </div>
               </div>
               <div class="form-outline mb-0">
                  {!! Form::label('password_confirmation', 'Password', array('class' => 'col-sm-3 control-label')) !!}
                  <div class="col-sm-100">
                     {!! Form::password('password_confirmation', array('class' => 'form-control form-control-lg')) !!}
                  </div>
               </div>

               <div class="text-center text-lg-start mt-2 pt-2">
                  <button class="btn btn-primary btn-lg">
                     {!! Form::submit('Đăng ký', array('class' => 'btn btn-primary btn-lg')) !!}
                  </button>
                  <p class="small fw-bold mt-2 pt-1 mb-0">Bạn đã có tài khoản <a href="/login"
                        class="link-danger">Đăng nhập</a></p>
               </div>

            </div>
         </div>
   </div>
      </section>