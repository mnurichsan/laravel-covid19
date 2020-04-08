	<a href="" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
		<aside id="colorlib-aside" role="complementary" class="js-fullheight text-center">
			<h1 id="colorlib-logo"><a href="{{route('home')}}"><i class="fas fa-shield-virus fa-3x"></i><br>Cek Covid-19</a></h1>
			<nav id="colorlib-main-menu" role="navigation">
				<ul>
				
					<li class="@yield('status')"><a href="{{route('home')}}">Home</a></li>
					<li class="@yield('status1')"><a href="{{route('provinsi')}}">Daftar Provinsi</a></li>
					<li class="@yield('status2')"><a href="{{route('pencegahan')}}">Cara Pencegahan</a></li>
					<li class="@yield('status3')"><a href="{{route('gejala')}}">Ciri-ciri gejala</a></li>
					<li class="@yield('status4')"><a href="{{route('callcenter')}}">Call Center</a></li>
                    <li class="@yield('status5')"><a href="{{route('about')}}">About</a></li>
				</ul>
			</nav>

			<div class="colorlib-footer">
				<h3>Follow me !</h3>
				<div class="d-flex justify-content-center">
					<ul class="d-flex align-items-center">
						<li class="d-flex align-items-center jusitfy-content-center"><a href="https://www.facebook.com/muh.n.ichsan.9"><i class="icon-facebook"></i></a></li>
						<li class="d-flex align-items-center jusitfy-content-center"><a href="https://www.twitter.com/ichsantuy"><i class="icon-twitter"></i></a></li>
						<li class="d-flex align-items-center jusitfy-content-center"><a href="https://www.instagram.com/muhnurichsan/"><i class="icon-instagram"></i></a></li>
						<li class="d-flex align-items-center jusitfy-content-center"><a href="https://www.linkedin.com/in/nur-ichsan-59500916b/"><i class="icon-linkedin"></i></a></li>
					</ul>
				</div>
			</div>
		</aside> <!-- END COLORLIB-ASIDE -->