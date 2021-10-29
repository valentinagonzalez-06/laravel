<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="" />
	<meta name="keywords" content="" />
	<link rel="stylesheet" type="text/css" href="{{asset('css/animate.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/line-awesome.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/line-awesome-font-awesome.min.css')}}">
	<link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/jquery.mCustomScrollbar.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('lib/slick/slick.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('lib/slick/slick-theme.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/responsive.css')}}">
  <title>TECNOACADEMIA NACIONAL</title>
  
</head>
<body>

	<div class="wrapper">	
		<header>
			<div class="container">
				<div class=container-fluid">
					<div class="logo">
						<a href="index.html" title="logo"><img src="images/logo.png" alt="" height="50"></a>
					</div><!--logo end-->
					<nav>
						<ul>
							<li>
								<a href="index.html" title="">
									<span><img src="images/icon1.png" alt=""></span>
									INICIO
								</a>
							</li>
							<li>
								<a href="inst.educativas.html" title="">
									<span><img src="images/icon2.png" alt=""></span>
									INST. EDUCATIVAS
								</a>
								<ul>
									<li><a href="inst.educativas.html" title=""></a></li>
									<li><a href="aprendiz.html" title="">REGISTRO APRENDIZ</a></li>
                                    <li><a href="inf.contacto.html" title="">INFORMACIÓN CONTACTO</a></li>
                                    <li><a href="asignar.cupos.html" title="">ASIGNAR CUPOS</a></li>
								</ul>
							</li>
							<li>
								<a href="lineas.html" title="">
									<span><img src="images/icon3.png" alt=""></span>
									LINEAS
								</a>
                              <ul>
									<li><a href="horarios.html" title="">HORARIOS</a></li>
								</ul>
							</li>
							<li>
								<a href="formatos.html" title="">
									<span><img src="images/icon4.png" alt=""></span>
									FORMATOS
								</a>
							</li>
							<li>
								<a href="estadisticas.html" title="">
									<span><img src="images/icon5.png" alt=""></span>
									ESTADISTICAS
								</a>
                           </li>
					 </ul>
					      </nav><!--nav end-->
					         <div class="menu-btn">
						          <a href="#" title=""><i class="fa fa-bars"></i></a>
					         </div><!--menu-btn end-->
					          <div class="user-account">
						      <div class="user-info">
							 <img src="images/resources/user.png" alt="">
							  <a href="#" title="">Administrador</a>
							<i class="la la-sort-down"></i>
						     </div>
						     <div class="user-account-settingss" id="users">
					 </ul>
					  <h3 class="tc">
						<a class="dropdown-item" href="{{ route('logout') }}"
						onclick="event.preventDefault();
									  document.getElementById('logout-form').submit();">
						 {{ __('Cerrar Sesión') }}
					 </a>

					 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
						 @csrf
					 </form>
					  </h3>
						</div><!--user-account-settingss end-->
					</div>

					<div class="search-bar">
						<form>
							<input type="text" name="search" placeholder="Search...">
							<button type="submit"><i class="la la-search"></i></button>
						</form>
					</div><!--search-bar end-->
				</div><!--header-data end-->
			</div>
		</header><!--header end-->	

    <main class="py-4">
      @yield('content')
    </main>


<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/popper.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.mCustomScrollbar.js')}}"></script>
<script type="text/javascript" src="{{asset('lib/slick/slick.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/scrollbar.js')}}"></script>
<script type="text/javascript" src="{{asset('js/script.js')}}"></script>
</body>
</html>