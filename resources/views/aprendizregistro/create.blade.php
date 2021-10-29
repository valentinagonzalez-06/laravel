<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="" />
	<meta name="keywords" content="" />
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> 
  <title>TECNOACADEMIA NACIONAL</title>
  
</head>
<body>
    <div class="wrapper">
        <header>
            <div class="container">
                <div class="container-fluid">
                    <h1 class="text-center text-light"><span class="badge badge-danger"></span>REGISTRO DEL ESTUDIANTE</span></h1>
                </div>
            </div>
        </header>
    </div>
    
    <br> <br> <br>
    <div class="container">
        <div class="text-center"><h2>DATOS DEL APRENDIZ</h2></div>
      <form action="{{url('/aprendizregistro')}}" method="POST" enctype="multipart/form-data">
           {{ csrf_field() }}
           <div class="card-header tex">
            DATOS PERSONALES
            </div>
            <br> 
              
            <div class="col-md-6">
                <div class="form-group">
                    <label for="Numiden">{{'Numero de Identificación:'}}</label>
                    <input type="text" class="form-control" id="Numero de Identificación" name="Numero de Identificación">
                </div>
            </div>
           
            </div>
            <div class="col-md-6">
                <div class="form-group text-center" >
              <input type="submit" value="registrar">
                </div>
            </div>

        </form>
    </div>

<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/popper.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.mCustomScrollbar.js')}}"></script>
<script type="text/javascript" src="{{asset('lib/slick/slick.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/scrollbar.js')}}"></script>
<script type="text/javascript" src="{{asset('js/script.js')}}"></script>
    
</body>
</html>