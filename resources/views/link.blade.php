

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
  <script type = "text/javascript" 
         src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
      </script>

          <!--  <script type = "text/javascript" language = "javascript">
         $(document).ready(function() {
            $("#driver").click(function(event){
               $.ajax( {
                  url::,
                  success:function(data) {
                     $('#stage').html(data);
                  }
               });
            });
         });
      </script>-->


        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>

<div id = "stage" style = "background-color:blue;">
         STAGE
      </div>
<input type = "button" id = "driver" value = "Load Data" />
  


       <div class="flex-center position-ref full-height">
             @if (Route::has('login'))
             <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                     <!--   @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif-->
                    @endauth
                </div>
            @endif



        
          <div class="container">
            <h1>REGISTRATION</h1>
   <form method="PATCH" action="/{{$cours->id}}" class="was-validated">
            {{csrf_field()}}
    <div class="form-group">
      <label for="name">Username:</label>
      <input type="text" class="form-control" id="name" value="{{$cours->name}}" placeholder="Enter username" name="name" required>
  </div><br>

     <div class="form-group">
      <label for="address">Address:</label>
      <input type="text" class="form-control" value="{{$cours->address}}" id="address" placeholder="Enter address" name="address" required>
   
    </div><br>
 
  <div class="form-group">
      <label for="rollno">Rollno:</label>
      <input type="number" name="rollno" min="1" max="50" value="{{$cours->rollno}}" class="form-control" id="rollno" placeholder="rollno" required>

    </div><br>
 
  <div class="form-group">
      <label for="age">Age:</label>
      <input type="number" class="form-control" id="age" value="{{$cours->age}}" placeholder="Enter age" min="5" max="25" name="age" required>
    </div>
 <br>
  <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" value="{{$cours->email}}" placeholder="Enter email" name="email" required>
    </div><br>
 
  <div class="form-group">
      <label for="comments">Comments:</label>
      <input type="textarea" class="form-control" id="comments" value="{{$cours->comments}}" placeholder="Enter comments" name="comments" required>
    </div><br>


 <div class="form-check-inline">
      Gender:<label class="form-check-label" for="radio1">
        <input type="radio" class="form-check-input" id="radio1" name="optradio" value="{{$cours->optradio}}" checked>Male
      </label>
    </div><br>
    <div class="form-check-inline">
      <label class="form-check-label" for="radio2">
        <input type="radio" class="form-check-input" id="radio2" name="optradio" value="{{$cours->optradio}}">Female
      </label>
    </div><br>

 
  <div class="form-group">
      <label for="phone">Phone:</label>
      <input type="tel"  class="form-control" id="phone" placeholder="Enter phone" name="phone" value="{{$cours->phone}}"required>
    </div>
 <br>
   
    <button type="submit" class="btn btn-primary">Submit</button>

    @if($errors->any())
    <div class="notification is-danger">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $errors }}</li>
        @endforeach
    </ul>
    </div>
        
    </div>
@endif

  </form>
</div>

</body>
</html>
