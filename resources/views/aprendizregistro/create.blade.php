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
            DATOS PERSONALES
        </div>
        <br> 
        <div class="form-row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="tipodoc">{{'Tipo de Documento:'}}</label>
                  <select class="form-control" id="tipodoc" name="tipodoc">
                       <option value="">Seleccione ...</option>
                       <option value="">Tarjeta de Identidad</option>
                       <option value="">Cedula de Ciudadania</option>
                       <option value="">Cedula de Extranjeria</option>
                       <option value="">Pep</option>
                    </select>
                </div>
            </div>
              
            <div class="col-md-6">
                <div class="form-group">
                    <label for="numiden">{{'Numero de Identificación:'}}</label>
                    <input type="text" class="form-control" id="numiden" name="numiden">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="depaexp">{{'Departamento de Expedición:'}}</label>
                  <select class="form-control" id="depaexp" name="depaexp">
                       <option value="">Seleccione ...</option>
                       <option value="">Antioquia</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="munexp">{{'Municipio de Expedición:'}}</label>
                  <select class="form-control" id="munexp" name="munexp">
                       <option value="">Seleccione  Municipio...</option>
                       <option value="">Medellín</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="fechaexp">{{'Fecha de Expedición:'}}</label>
                    <input type="date" id="fechaexp" name="fechaexp" value="" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="fechaven">{{'Fecha de Vencimiento:'}}</label>
                    <input type="date" id="fechaven" name="fechaven" value="" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="foto">{{'Foto del Documento'}}</label>
                    <input type="file" name="foto" id="foto" value="" />
                </div>
            </div>
        </div>
        <div class="card-header tex">
            DATOS DEL APRENDIZ
        </div>
        <br>
        <div class="form-row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="nombre">{{'Nombre'}}</label>
                    <input type="text" class="form-control" id="nombre" name="nombre">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                  <label for="apellidos">{{'Apellidos'}}</label>
                  <input type="text" class="form-control" id="apellidos" name="apellidos">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="nacimiento">{{'Departamento de Nacimiento:'}}</label>
                  <select class="form-control" id="nacimiento" name="nacimiento">
                       <option value="">Seleccione ...</option>
                       <option value="">Boyaca</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="municipionac">{{'Municipio de Nacimiento:'}}</label>
                  <select class="form-control" id="municipionac" name="municipionac">
                       <option value="">Seleccione ...</option>
                       <option value="">Tunja</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="fecha">{{'Fecha de Nacimiento:'}}</label>
                    <input type="date" id="fecha" name="fecha" value="" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="genero">{{'Genero:'}}</label>
                  <select class="form-control" id="genero" name="genero">
                       <option >Masculino</option>
                       <option >Femenino</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="estratosocioeconomico">{{'Estratos Socioeconomico:'}}</label>
                  <select class="form-control" id="estratosocioeconomico" name="estratosocioeconomico">
                       <option value="">1</option>
                       <option value="">2</option>
                       <option value="">3</option>
                       <option value="">4</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="GrupoEtnico">{{'Grupos Etnicos:'}}</label>
                  <select class="form-control" id="GrupoEtnico" name="GrupoEtnico">
                       <option value="">Ninguna</option>
                       <option value="">Afrocolombiano</option>
                       <option value="">Indigenas</option>
                       <option value="">Negritudes</option>
                       <option value="">Palenqueros</option>
                       <option value="">Razial</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="discapacidad">{{'Discapacidad:'}}</label>
                  <select class="form-control" id="discapacidad" name="discapacidad">
                     <option value="">Ninguna</option>
                     <option value="">Discapacitado Cognitivo</option>
                     <option value="">Discapacitado Cognitivo o Mental</option>
                     <option value="">Discapacitado Limitacion Auditiva o Sorda</option>
                     <option value="">Discapacitado Limitacion Fisica o Motora</option>
                     <option value="">Discapacitado Limitacion Visual o Ciega</option>
                     <option value="">Discapacitado Mental</option>
                     <option value="">Discapacitados</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="pbvulnerable">{{'Población Vulnerable:'}}</label>
                  <select class="form-control" id="pbvulnerable" name="pbvulnerable">
                    <option value="">Ninguna</option>
                    <option value="">Desplazados por la Violencia</option>
                    <option value="">Desplazados por Fenomenos Naturales</option>
                    <option value="">Poblacion con Discapacidad</option>
                    <option value="">Adolescente Desvinculado de Grupos Armados</option>
                    <option value="">Adolescente en conflicto con la Ley Penal</option>
                    <option value="">Adolescente Trabajador</option>
                    <option value="">Grupos Etnicos</option>
                    <option value="">INPEC</option>
                    <option value="">Adolescentes y Jovenes Vulnerables</option>
                    <option value="">Mujer Cabeza de Hogar</option>
                    <option value="">Participantes del Programa de Reintegracion - Reintegrados</option>
                    <option value="">Poblacion Victima de Minas Antipersonal</option>
                    <option value="">Persona Mayor</option>
                    <option value="">Comunidad LGBTI</option>
                    <option value="">Comunidad ROOM</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="Eps">{{'Eps de Atención:'}}</label>
                  <select class="form-control" id="Eps" name="Eps">
                     <option value="">Seleccione ...</option>
                     <option value="">Nueva Eps</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="tiposanguineo">{{'R.H y G.S:'}}</label>
                  <select class="form-control" id="tiposanguineo" name="tiposanguineo">
                    <option>A+</option>
                    <option>A-</option>
                    <option>B+</option>
                    <option>B-</option>
                    <option>O+</option>
                    <option>O-</option>
                    <option>AB+</option>
                    <option>AB-</option>
                    </select>
                </div>
            </div>
            </div>
            <div class="card-header tex">
            DATOS DE CONTACTO
           </div>
          <br>
          <div class="form-row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="email">{{'Correo Electronico:'}}</label>
                    <input type="text" class="form-control" id="email" name="email">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="cel">{{'Telefono Celular:'}}</label>
                    <input type="text" class="form-control" id="cel" name="cel">  
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="dirección">{{'Dirección:'}}</label>
                    <input type="text" class="form-control" id="dirección" name="dirección">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="telfijo">{{'Telefono Fijo:'}}</label>
                    <input type="text" class="form-control" id="telfijo" name="telfijo">    
                </div>
            </div>
            </div>
            <div class="card-header tex">
             DATOS DEL ACUDIENTE
           </div>
             <br>
             <div class="form-row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nombreapell">{{'Nombre y Apellidos:'}}</label>
                        <input type="text" class="form-control" id="nombreapell" name="nombreapell">
                    </div>
                </div>
             <div class="col-md-6">
                <div class="form-group">
                    <label for="celular">{{'Telefono Celular:'}}</label>
                    <input type="text" class="form-control" id="celular" name="celular">
                    
                </div>
            </div>
            </div>
            <div class="card-header tex">
                DATOS DE LA INSTITUCIÓN
            </div>
            <br>
            <div class="form-row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="institucionedu">{{'Institución Educativa:'}}</label>
                      <select class="form-control" id="institucionedu" name="institucionedu">
                        <option>Seleccione</option>
                        <option>consejo de bello</option>
                        </select>
                    </div>
                </div>    
            <div class="col-md-6">
                <div class="form-group">
                    <label for="grado">{{'Grado:'}}</label>
                  <select class="form-control" id="grado" name="grado">
                     <option value="">Seleccione ...</option>
                     <option value="">6</option>
                    </select>
                </div>
            </div>
            </div>
            <div class="card-header tex">
                DATOS DE TECNOACADEMIA
            </div>
            <br>
            <div class="form-row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="lineafacilitador">{{'Linea de Facilitador:'}}</label>
                      <select class="form-control" id="lineafacilitador" name="lineafacilitador">
                        <option>Seleccione</option>
                        <option>Ingenieria</option>
                        <option>Tics</option>
                        <option>Nanotecnologia</option>
                        <option>Biotecnologia</option>
                        <option>Ciencias Basicas</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="facilitador">{{'Facilitador:'}}</label>
                      <select class="form-control" id="facilitador" name="facilitador">
                        <option>Seleccione</option>
                        <option>Kelly Jhoana Sanchez Acosta</option>
                        <option>Orlando de Jesus Escorcia Nieto</option>
                        <option>Franz Sebastian Bedoya LLano</option>
                        <option>Jose Carmelo Alzate Arbelaez</option>
                        <option>Piedad Lucia Vieco</option>
                        <option>Jorge Armando Castro Escudero</option>
                        <option>Victor Manuel Gomez Ramirez</option>
                        <option>Elizabeth Alvarez Arango</option>
                        <option>Dallany Milena Urrego Garcia</option>
                        </select>
                    </div>
                </div>
                </div>
               <div class="form-row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="subarea">{{'Sub Area-Linea'}}</label>
                        <input type="text" class="form-control" id="subarea" name="subarea">
                    </div>
                </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="periocidad">{{'Periocidad:'}}</label>
                  <select class="form-control" id="periocidad" name="periocidad">
                      <option>Anual</option>
                      <option>Semestral</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="tipoinfo">{{'Tipo de Formación:'}}</label>
                  <select class="form-control" id="tipoinfo" name="tipoinfo">
                     <option>Formacion</option>
                     <option>Proyecto Investigacion</option>
                     <option>Semillero</option>
                    </select>
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