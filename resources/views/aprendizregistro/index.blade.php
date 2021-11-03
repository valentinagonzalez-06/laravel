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
                    <h1 class="text-center text-light"><span class="badge badge-danger"></span>GESTIÓN DE APRENDICES</span></h1>
                </div>
            </div>
        </header>
        <div class="table-responsive">
            <table class="table table-striped table-bordered" tyle="width:100%">
    
                <thead class="thead-light">
                    <tr>
                        <th>#</th>
                        <th>Acciones</th>
                        <th>Foto</th>
                        <th>Tipo_doc</th>
                        <th>Num_identificacion</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Fecha_nac</th>
                        <th>Fecha_exp</th>
                        <th>Fecha_ven</th>
                        <th>Email</th>
                        <th>Tel_fijo</th>
                        <th>Tel_celular</th>
                        <th>Direccion</th>
                        <th>Nombre_acud</th>
                        <th>Telefono_acud</th>
                        <th>Institucion_Educativa</th>
                        <th>Grado</th>
                        <th>Periocidad</th>
                        <th>Linea_Formacion</th>
                        <th>Sub_Area</th>
                        <th>Facilitador</th>
                        <th>Estado</th>
                        
                    </tr>
                </thead>
        
                <tbody>
                  @foreach ($aprendizregistro as $registroaprendiz)
                       <tr>
                           <td>{{$loop->iteration}}</td>
                           <td> Editar | Borrar</td>
                           <td>{{ $registroaprendiz->foto}}</td>
                           <td>{{ $registroaprendiz->tipodoc}}</td>
                           <td>{{ $registroaprendiz->numiden}}</td>
                           <td>{{ $registroaprendiz->nombre}}</td>
                           <td>{{ $registroaprendiz->apellidos}}</td>
                           <td>{{ $registroaprendiz->fecha}}</td>
                           <td>{{ $registroaprendiz->fechaexp}}</td>
                           <td>{{ $registroaprendiz->fechaven}}</td>
                           <td>{{ $registroaprendiz->email}}</td>
                           <td>{{ $registroaprendiz->cel}}</td>
                           <td>{{ $registroaprendiz->telfijo}}</td>
                           <td>{{ $registroaprendiz->dirección}}</td>
                           <td>{{ $registroaprendiz->nombreapell}}</td>
                           <td>{{ $registroaprendiz->celular}}</td>
                           <td>{{ $registroaprendiz->institucionedu}}</td>
                           <td>{{ $registroaprendiz->grado}}</td>
                           <td>{{ $registroaprendiz->periocidad}}</td>
                           <td>{{ $registroaprendiz->lineafacilitador}}</td>
                           <td>{{ $registroaprendiz->subarea}}</td>
                           <td>{{ $registroaprendiz->facilitador}}</td>
                           <td>{{ $registroaprendiz->tipoinfo}}</td>
                        </tr>
                    @endforeach
                </tbody>
        
            </table>
        </div>
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
    </div>
  