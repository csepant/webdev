@extends('layouts.app')

@section('content')
<!-- Banner -->
<section id="banner">
	<div class="inner">
		<div class="logo"><span class="icon fa-diamond"></span></div>
		<h2>DISEÑO & FUNCIONALIDAD</h2>
		<p>SOLUCIONES WEB ADAPTADAS A TUS NECESIDADES.</p>
	</div>
</section>

<!-- Wrapper -->
<section id="wrapper">

	<!-- One -->
		<section id="one" class="wrapper spotlight style1">
			<div class="inner">
				<a href="#" class="image"><img src="{{asset('images/SVG/web-dev.svg')}}" alt="" /></a>
				<div class="content">
					<h2 class="major">DESARROLLO WEB</h2>
					<p>Diseñamos páginas web para tu negocio o idea, adaptables a dispositivos móviles, con contenido en inglés y español. Ofrecemos servicios de hosting, administración de contenido y dominio con altos estándares de seguridad y calidad.</p>
					<a href="#" class="special">VER MÁS</a>
				</div>
			</div>
		</section>

	<!-- Two -->
		<section id="two" class="wrapper alt spotlight style2">
			<div class="inner">
				<a href="#" class="image"><img src="{{asset('images/SVG/ecommerce.svg')}}" alt="" /></a>
				<div class="content">
					<h2 class="major">E-COMMERCE</h2>
					<p>Te ayudamos a ofrecer tus productos o servicios por internet. Alcanza nuevas audiencias y potencia tus ventas con nuestros servicios de carrito de compra y venta online.</p>
					<a href="#" class="special">VER MÁS</a>
				</div>
			</div>
		</section>

	<!-- Three -->
		<section id="three" class="wrapper spotlight style3">
			<div class="inner">
				<a href="#" class="image"><img src="{{asset('images/SVG/digital-branding.svg')}}" alt="" /></a>
				<div class="content">
					<h2 class="major">BRANDING DIGITAL</h2>
					<p>Ayudamos a desarrollar tu presencia de marca en el entorno digital con consistencia y coherencia, aprovechando las posibilidades de interacción entre las distintas plataformas y generando mejores experiencias de marca para tus clientes.</p>
					<a href="#" class="special">VER MÁS</a>
				</div>
			</div>
		</section>

	<!-- Four -->
		<section id="four" class="wrapper alt style1">
			<div class="inner">
				<h2 class="major">Valor Agregado</h2>
				<p>Después de diseñar un sitio web para un cliente, a menudo nos piden que proporcionemos otros servicios (algo relacionados), como administrar campañas de marketing por correo electrónico, crear diversos informes y actualizar tiendas en línea. Esto es perfecto para nosotros porque es compatible con nuestro modelo de negocio. Pero incluso si normalmente solo brindamos servicios de diseño, hay formas en que podemos ofrecer a nuestros clientes aún más valor por trabajar con nostros, y desarrollar una relación a largo plazo que beneficie a todos.</p>
				<section class="features">
					<article>
						<a href="#" class="image"><img src="{{asset('images/pic04.jpg')}}" alt="" /></a>
						<h3 class="major">1. Informes de Analytics</h3>
						<p>Diseñamos el sitio con un código de análisis web en su lugar y el uso del sitio está siendo rastreado. Pero le lleva mucho tiempo al cliente revisar los análisis y, lo más importante, interpretar lo que significa. Puede ser beneficioso para nuestros clientes que alguien como nosotros que entiende los datos, cree informes, los interprete y haga sugerencias para mejoras en el sitio basadas en los datos.</p>
						<!--<a href="#" class="special">Learn more</a>-->
					</article>
					<article>
						<a href="#" class="image"><img src="{{asset('images/pic05.jpg')}}" alt="" /></a>
						<h3 class="major">2. Monitoreo de Competencia</h3>
						<p>Independientemente de la industria en la que se encuentre su negocio, hay competidores en línea. Podría valer la pena hacer que alguien vigile los sitios web de los competidores para estar al día con lo que están haciendo, especialmente si puede afectar su negocio.</p>
						<!--<a href="#" class="special">Learn more</a>-->
					</article>
					<article>
						<a href="#" class="image"><img src="{{asset('images/pic06.jpg')}}" alt="" /></a>
						<h3 class="major">3. Correo Electrónico</h3>
						<p>Si envía mensajes de marketing por correo electrónico, puede estar interesado en crear plantillas de correo electrónico que tengan la misma apariencia que el sitio web.</p>
						<!--<a href="#" class="special">Learn more</a>-->
					</article>
					<article>
						<a href="#" class="image"><img src="{{asset('images/pic07.jpg')}}" alt="" /></a>
						<h3 class="major">4. Prueba de Usabilidad</h3>
						<p>Después de que el sitio esté en vivo, o antes de que comience el trabajo en el caso de un rediseño, puede tener sentido obtener información de sus clientes y del público objetivo. Puede gestionar las pruebas de usabilidad creando y compilando encuestas en linea.</p>
						<!--<a href="#" class="special">Learn more</a>-->
					</article>
				</section>
				<!--
				<ul class="actions">
					<li><a href="#" class="button">Browse All</a></li>
				</ul>
				-->
			</div>
		</section>

</section>

<!-- Footer -->
<section id="footer">
	<div id="contact" class="inner">
		<h2 class="major">CONTACTANOS</h2>
		<p>Cuentanos tu necesidad. Convertimos problemas en oportunidades. Cotización sin compromisos.</p>
		@include('incl.messages')
		{!! Form::open(['action' => 'ContactFormController@store', 'method' => 'POST']) !!}
			<div class="field">
				{{Form::label('first_name', 'Nombre')}}
				{{Form::text('first_name', '', ['id'=>'name', 'placeholder'=>''])}}
			</div>
			<div class="field">
				{{Form::label('last_name', 'Apellido')}}
				{{Form::text('last_name', '', ['id'=>'last_name', 'placeholder'=>''])}}
			</div>
			<div class="field">
				{{Form::label('email', 'Email')}}
				{{Form::text('email', '', ['id'=>'email', 'placeholder'=>''])}}
			</div>
			<div class="field">
				{{Form::label('message', 'Mensaje')}}
				{{Form::textarea('message', '', ['id'=>'message', 'placeholder'=>''])}}
			</div>
			<ul class="actions">
				{{Form::submit('Enviar',['id'=>'submit'])}}
			</ul>
		{!! Form::close() !!}
		<ul class="contact">
			<li class="fa-home">
				Untitled Inc<br />
				1234 Somewhere Road Suite #2894<br />
				Nashville, TN 00000-0000
			</li>
			<li class="fa-phone">(000) 000-0000</li>
			<li class="fa-envelope"><a href="#">information@untitled.tld</a></li>
			<li class="fa-twitter"><a href="#">twitter.com/untitled-tld</a></li>
			<li class="fa-facebook"><a href="#">facebook.com/untitled-tld</a></li>
			<li class="fa-instagram"><a href="#">instagram.com/untitled-tld</a></li>
		</ul>
		<ul class="copyright">
			<li>&copy; Untitled Inc. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
		</ul>
	</div>
</section>
@endsection