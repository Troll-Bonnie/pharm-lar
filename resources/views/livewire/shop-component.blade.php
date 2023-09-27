@section('title')
Каталог
@endsection

<main id="main" class="sub_page my_body">

	<section class="health_section layout_padding">
		<div class="health_carousel-container">
			<h2 class="text-uppercase">
				Ліки та профілатикчні засоби
			</h2>
			<div class="carousel-wrap layout_padding2">
				<div class="owl-carousel">
					@foreach ($products_1 as $p)
						<div class="item">
						<div class="box">
						<div class="btn_container">
							<a href="">
							Купити
							</a>
						</div>
						<div class="img-box my-img">
							<img src="{{asset('assets/images/products')}}/{{$p->image}}" alt="">
						</div>
						<div class="detail-box">
							<div class="text">
							<h6>
								{{$p->slug}}
							</h6>
							<h6 class="price">
								<span>
								₴
								</span>
								{{$p->regular_price}}
							</h6>
							</div>
						</div>
						</div>
						</div>
					@endforeach
				</div>
			</div>
		</div>
		<div class="health_carousel-container">
			<h2 class="text-uppercase">
				Вітаміни та мінерали
			</h2>
			<div class="carousel-wrap layout_padding2">
				<div class="owl-carousel owl-2">
					@foreach ($products_2 as $p)
							<div class="item">
							<div class="box">
							<div class="btn_container">
								<a href="">
								Купити
								</a>
							</div>
							<div class="img-box">
								<img src="{{asset('assets/images/products')}}/{{$p->image}}" alt="">
							</div>
							<div class="detail-box">
								<div class="text">
								<h6>
									{{$p->slug}}
								</h6>
								<h6 class="price">
									<span>
									₴
									</span>
									{{$p->regular_price}}
								</h6>
								</div>
							</div>
							</div>
							</div>
						@endforeach
				</div>
			</div>
		</div>
		<div class="health_carousel-container">
			<h2 class="text-uppercase">
				Вироби медичного призначення
			</h2>
			<div class="carousel-wrap layout_padding2">
				<div class="owl-carousel owl-2">
					@foreach ($products_3 as $p)
							<div class="item">
							<div class="box">
							<div class="btn_container">
								<a href="">
								Купити
								</a>
							</div>
							<div class="img-box">
								<img src="{{asset('assets/images/products')}}/{{$p->image}}" alt="">
							</div>
							<div class="detail-box">
								<div class="text">
								<h6>
									{{$p->slug}}
								</h6>
								<h6 class="price">
									<span>
									₴
									</span>
									{{$p->regular_price}}
								</h6>
								</div>
							</div>
							</div>
							</div>
						@endforeach
				</div>
			</div>
		</div>
		<div class="health_carousel-container">
			<h2 class="text-uppercase">
				Медична техніка
			</h2>
			<div class="carousel-wrap layout_padding2">
				<div class="owl-carousel owl-2">
					@foreach ($products_4 as $p)
							<div class="item">
							<div class="box">
							<div class="btn_container">
								<a href="">
								Купити
								</a>
							</div>
							<div class="img-box">
								<img src="{{asset('assets/images/products')}}/{{$p->image}}" alt="">
							</div>
							<div class="detail-box">
								<div class="text">
								<h6 class="my-catalog-name">
									{{$p->slug}}
								</h6>
								<h6 class="price">
									<span>
									₴
									</span>
									{{$p->regular_price}}
								</h6>
								</div>
							</div>
							</div>
							</div>
						@endforeach
				</div>
			</div>
		</div>
	</section>

</main>