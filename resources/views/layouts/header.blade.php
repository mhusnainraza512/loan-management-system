@php
	$title = app()->view->getSections()['title'];
@endphp

{{-- Floating WhatsApp --}}
<a href="{{ route('chat', $companyInfo->contact1) }}" style="position: fixed; bottom: 50px; right:50px; z-index: 100; display: inline-block;padding: 10px; border-radius: 50%; background: #f6f6f6;  box-shadow: 0 0 8px rgb(0,0,0,0.2);">
	<i class="la la-whatsapp text-success la-4x " style="font-size: 50px"></i>
</a>


<!-- banner -->
<div class="ban-top">
	<div class="container">
		<div class="row">
			<div class="col-md-2">
				<a href="http://localhost/loan-management-system" style="color: white; display:inline-block; padding:23px 0;">
					<h3 >Smart Shop</h3>
				</a>
			</div>
			<div class="col-xs-8 col-md-8">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav menu__list">
							<li class="menu__item {{ $title == 'Home' ? 'active menu__item--current' : '' }}"><a class="menu__link" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a></li>
							@if(!empty($pages))
								@foreach ($pages as $page)
									<li class=" menu__item {{ $title == $page->title ? 'active menu__item--current' : '' }}"><a class="menu__link" href="{{ route('pages', $page->slug) }}">{{ $page->title }}</a></li>
								@endforeach
							@endif
							<li class=" menu__item {{ $title == 'Contact Us' ? 'active menu__item--current' : '' }}"><a class="menu__link" href="{{ route('contact') }}">contact Us</a></li>
							<li class=" menu__item {{ $title == 'Shop' ? 'active menu__item--current' : '' }}"><a class="menu__link" href="{{ route('shop') }}">Shop</a></li>
						</ul>
						</div>
					</div>
				</nav>
				@if ($title == 'Shop')
					<div class="top_nav_right">
						<div class="cart box_1">
							<a href="{{ route('shop.cart') }}">
								<h3> <div class="total">
									<i class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></i>
									<span class="">Rs.{{ Session()->has('cart') ? Session::get('cart')->totalPrice : '' }}</span> (<span class="">{{ Session()->has('cart') ? Session::get('cart')->totalQty : '' }}</span> items)</div>
								</h3>
							</a>
							<p><a href="{{ route('shop.emptyCart') }}" class="simpleCart_empty">Empty Cart</a></p>
						</div>	
					</div>
				@endif
			</div>
			<div class="col-xs-4 col-md-2">
				<div class="" style="text-align: right;">
					<a href="#" class="use1" data-toggle="modal" data-target="#myModal4" style="display: inline-block; padding:19px;">
						<span>
							<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
								width="30" height="30"
								viewBox="0 0 172 172"
								style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M86,6.90688c-43.65602,0 -79.12,35.46398 -79.12,79.12c0,43.65603 35.46397,79.12 79.12,79.12c43.65603,0 79.12,-35.46397 79.12,-79.12c0,-43.65602 -35.46398,-79.12 -79.12,-79.12zM86,13.78688c39.93779,0 72.24,32.3022 72.24,72.24c0,19.72048 -7.89824,37.55807 -20.68031,50.58547c-6.29445,-4.62102 -13.9672,-6.93955 -20.46531,-9.25172c-3.65971,-1.30221 -6.95021,-2.59266 -9.3525,-4.03125c-2.3007,-1.37776 -3.57837,-2.79361 -4.25297,-4.42094c-0.31596,-3.9452 -0.25197,-7.12133 -0.22844,-10.87094c0.41676,-0.41506 0.95142,-0.70667 1.37735,-1.20937c1.00444,-1.18553 2.02714,-2.62612 3.00328,-4.24625c1.67386,-2.77815 2.89186,-6.17617 3.57437,-9.62125c1.04222,-0.53127 2.15558,-0.64624 3.00328,-1.72672c1.56511,-1.99488 2.62165,-4.80225 3.09062,-8.71422c0.41587,-3.45393 -0.69696,-5.8295 -2.12984,-7.65265c1.54149,-5.03898 3.44997,-13.0525 2.80172,-21.34547c-0.35663,-4.56249 -1.50468,-9.15496 -4.2664,-12.97391c-2.63665,-3.64599 -6.91734,-6.2668 -12.3961,-7.21594c-3.47976,-3.95076 -9.00737,-5.81172 -15.61438,-5.81172h-0.03359h-0.02688c-14.80144,0.27174 -24.35153,6.39785 -28.44047,15.74203c-3.8882,8.88544 -3.05232,19.94718 -0.26203,31.4639c-1.49993,1.82328 -2.6749,4.24418 -2.25078,7.79375c0.47074,3.91065 1.52668,6.71918 3.09062,8.71422c0.84708,1.08057 1.96057,1.19515 3.00328,1.72672c0.68241,3.44239 1.90065,6.8358 3.57437,9.61453c0.97614,1.6206 1.99779,3.05975 3.00328,4.24625c0.42603,0.50272 0.96009,0.80079 1.37735,1.2161c0.02236,3.74764 0.08591,6.92253 -0.22844,10.87094c-0.67328,1.62133 -1.94926,3.03793 -4.24625,4.42094c-2.39848,1.44412 -5.68503,2.74173 -9.33906,4.05141c-6.49125,2.32659 -14.15968,4.66176 -20.47203,9.245c-12.7899,-13.02857 -20.69375,-30.87159 -20.69375,-50.59891c0,-39.93779 32.30221,-72.24 72.24,-72.24zM85.73125,34.40672c6.34379,0.00654 10.33515,1.88481 11.4286,3.80281l0.83984,1.4714l1.67297,0.22844c4.32126,0.60044 6.73568,2.27734 8.46563,4.66953c1.72995,2.39219 2.69004,5.73073 2.98312,9.48016c0.58618,7.49885 -1.5604,16.35397 -2.92265,20.45187l-0.86672,2.60016l2.34484,1.42437c-0.23853,-0.14524 1.10247,0.64855 0.79953,3.16453c-0.36694,3.06091 -1.14913,4.61998 -1.67297,5.28765c-0.52383,0.66768 -0.74808,0.5824 -0.69203,0.57781l-2.83531,0.23516l-0.30235,2.82859c-0.25948,2.43024 -1.62635,5.74511 -3.225,8.39844c-0.79933,1.32666 -1.64976,2.50848 -2.365,3.35266c-0.71524,0.84418 -1.47694,1.36705 -1.18922,1.21609l-1.84094,0.96078v2.08281c0,4.55566 -0.1856,8.28108 0.29562,13.58531l0.04031,0.45687l0.16125,0.43c1.35375,3.6431 4.17952,6.21342 7.35703,8.11625c3.1775,1.90283 6.82296,3.27822 10.58203,4.61578c6.19529,2.20442 12.65343,4.3738 17.57625,7.57875c-12.54323,10.50618 -28.69975,16.8439 -46.3661,16.8439c-17.65951,0 -33.81147,-6.3316 -46.35265,-16.83047c4.95077,-3.18656 11.41854,-5.36207 17.60312,-7.57875c3.75659,-1.34643 7.3925,-2.72767 10.56188,-4.63594c3.16938,-1.90827 5.98504,-4.47816 7.33687,-8.10953l0.16125,-0.43l0.04031,-0.45687c0.47728,-5.30014 0.29562,-9.02625 0.29562,-13.58531v-2.08281l-1.84094,-0.9675c0.2881,0.15071 -0.47374,-0.37181 -1.18922,-1.21609c-0.71548,-0.84428 -1.56567,-2.01889 -2.365,-3.34594c-1.59865,-2.65409 -2.96562,-5.9716 -3.225,-8.39844l-0.30235,-2.82859l-2.83531,-0.23516c0.05315,0.00447 -0.16877,0.08972 -0.69203,-0.57781c-0.52328,-0.66751 -1.30436,-2.22543 -1.67297,-5.28765c-0.30069,-2.5165 1.05536,-3.31997 0.79953,-3.16453l2.18359,-1.3236l-0.63828,-2.47922c-2.95996,-11.39227 -3.40757,-21.75796 -0.36281,-28.71594c3.04175,-6.9511 9.13485,-11.36116 22.22562,-11.61z"></path></g></g>
							</svg>
						</span>
					</a>
				</div>
			</div>
		</div>
		
		<!-- <div class="clearfix"></div> -->
		
	</div>
</div>
<!-- //banner-top -->