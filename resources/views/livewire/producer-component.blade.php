@section('title')
Каталог за виробниками
@endsection

<main id="main" class="main-site left-sidebar">

		<div class="container">

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="/" class="link">home</a></li>
					<li class="item-link"><span>Каталог за виробниками</span></li>
					<li class="item-link"><span>{{$producer_name}}</span></li>
				</ul>
			</div>
			<div class="row">

				<div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">
					{{--
					<div class="banner-shop">
						<a href="#" class="banner-link">
							<figure><img src="{{ asset('assets/images/shop-banner.jpg') }}" alt=""></figure>
						</a>
					</div>
					--}}
					<div class="wrap-shop-control">

						<h1 class="shop-title">Digital & Electronics</h1>

						<div class="wrap-right">

							<div class="sort-item orderby ">
								<select name="orderby" class="use-chosen" wire:model="sorting">
									<option value="menu_order" selected="selected">За умовчуванням</option>
									<option value="date">За часом публікації</option>
									<option value="price">За зростанням ціни</option>
									<option value="price-desc">За спаданням ціни</option>
								</select>
							</div>

							<div class="sort-item product-per-page">
								<select name="post-per-page" class="use-chosen" wire:model="pagesize">
									<option value="8" selected="selected">по 8 товарів</option>
									<option value="10">по 10 товарів</option>
									<option value="12">по 12 товарів</option>
									<option value="14">по 14 товарів</option>
									<option value="16">по 16 товарів</option>
								</select>
							</div>

							<div class="change-display-mode">
								<a href="#" class="grid-mode display-mode active"><i class="fa fa-th"></i>Grid</a>
								<a href="list.html" class="list-mode display-mode"><i class="fa fa-th-list"></i>List</a>
							</div>

						</div>

					</div><!--end wrap shop control-->

					<div class="row">

						<ul class="product-list grid-products equal-container">
							@foreach ($products as $p)
								<li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
									<div class="product product-style-3 equal-elem ">
										<div class="product-thumnail">
											<a href="{{route('product.details',['slug'=>$p->slug])}}" title="{{$p->name}}">
												<figure>
													<img src="{{asset('assets/images/products')}}/{{$p->image}}" 
														alt="{{$p->name}}">
												</figure>
											</a>
										</div>
										<div class="product-info">
											<a href="{{route('product.details',['slug'=>$p->slug])}}" class="product-name"><span>{{$p->name}}</span></a>
											<div class="wrap-price"><span class="product-price">{{$p->regular_price}} грн</span></div>
											<a href="#" class="btn add-to-cart" 
												wire:click.prevent="store({{$p->id}}, '{{$p->name}}', {{$p->regular_price}})">
												До кошика
											</a>
										</div>
									</div>
								</li>
							@endforeach

						</ul>

					</div>

					<div class="wrap-pagination-info">
						{{$products->links()}}
						{{--<ul class="page-numbers">
							<li><span class="page-number-item current" >1</span></li>
							<li><a class="page-number-item" href="#" >2</a></li>
							<li><a class="page-number-item" href="#" >3</a></li>
							<li><a class="page-number-item next-link" href="#" >Next</a></li>
						</ul>
						<p class="result-count">Showing 1-8 of 12 result</p>--}}
					</div>
				</div><!--end main products area-->

				<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">
					<div class="widget mercado-widget categories-widget">
						<h2 class="widget-title">Всі категорії</h2>
						<div class="widget-content">
							<ul class="list-category">
								@foreach ($categories as $c)
									<li class="category-item has-child-cate">
										<a href="{{route('product.category',['category_slug'=>$c->slug])}}" class="cate-link">{{$c->name}}</a>
									</li>
								@endforeach
							</ul>
						</div>
					</div><!-- Categories widget-->

					<div class="widget mercado-widget brand-widget">
						<h2 class="widget-title">Всі виробники</h2>
						<div class="widget-content">
							<ul class="list-style vertical-list list-limited" data-show="6">
								@foreach ($producers as $p)
									<li class="brand-item has-child-cate">
										<a href="{{route('product.producer',['producer_slug'=>$p->slug])}}" class="cate-link">{{$p->name}}</a>
									</li>
								@endforeach
							</ul>
						</div>
					</div><!-- brand widget-->

					<div class="widget mercado-widget filter-widget price-filter">
						<h2 class="widget-title">Price</h2>
						<div class="widget-content">
							<div id="slider-range"></div>
							<p>
								<label for="amount">Price:</label>
								<input type="text" id="amount" readonly>
								<button class="filter-submit">Filter</button>
							</p>
						</div>
					</div><!-- Price-->

					<div class="widget mercado-widget filter-widget">
						<h2 class="widget-title">Color</h2>
						<div class="widget-content">
							<ul class="list-style vertical-list has-count-index">
								<li class="list-item"><a class="filter-link " href="#">Red <span>(217)</span></a></li>
								<li class="list-item"><a class="filter-link " href="#">Yellow <span>(179)</span></a></li>
								<li class="list-item"><a class="filter-link " href="#">Black <span>(79)</span></a></li>
								<li class="list-item"><a class="filter-link " href="#">Blue <span>(283)</span></a></li>
								<li class="list-item"><a class="filter-link " href="#">Grey <span>(116)</span></a></li>
								<li class="list-item"><a class="filter-link " href="#">Pink <span>(29)</span></a></li>
							</ul>
						</div>
					</div><!-- Color -->

					<div class="widget mercado-widget filter-widget">
						<h2 class="widget-title">Size</h2>
						<div class="widget-content">
							<ul class="list-style inline-round ">
								<li class="list-item"><a class="filter-link active" href="#">s</a></li>
								<li class="list-item"><a class="filter-link " href="#">M</a></li>
								<li class="list-item"><a class="filter-link " href="#">l</a></li>
								<li class="list-item"><a class="filter-link " href="#">xl</a></li>
							</ul>
							<div class="widget-banner">
								<figure><img src="{{ asset('assets/images/size-banner-widget.jpg') }}" width="270" height="331" alt=""></figure>
							</div>
						</div>
					</div><!-- Size -->

					<div class="widget mercado-widget widget-product">
						<h2 class="widget-title">Popular Products</h2>
						<div class="widget-content">
							<ul class="products">
								<li class="product-item">
									<div class="product product-widget-style">
										<div class="thumbnnail">
											<a href="detail.html" title="Radiant-360 R6 Wireless Omnidirectional Speaker [White]">
												<figure><img src="{{ asset('assets/images/products/digital_01.jpg') }}" alt=""></figure>
											</a>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker...</span></a>
											<div class="wrap-price"><span class="product-price">$168.00</span></div>
										</div>
									</div>
								</li>

								<li class="product-item">
									<div class="product product-widget-style">
										<div class="thumbnnail">
											<a href="detail.html" title="Radiant-360 R6 Wireless Omnidirectional Speaker [White]">
												<figure><img src="{{ asset('assets/images/products/digital_17.jpg') }}" alt=""></figure>
											</a>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker...</span></a>
											<div class="wrap-price"><span class="product-price">$168.00</span></div>
										</div>
									</div>
								</li>

								<li class="product-item">
									<div class="product product-widget-style">
										<div class="thumbnnail">
											<a href="detail.html" title="Radiant-360 R6 Wireless Omnidirectional Speaker [White]">
												<figure><img src="{{ asset('assets/images/products/digital_18.jpg') }}" alt=""></figure>
											</a>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker...</span></a>
											<div class="wrap-price"><span class="product-price">$168.00</span></div>
										</div>
									</div>
								</li>

								<li class="product-item">
									<div class="product product-widget-style">
										<div class="thumbnnail">
											<a href="detail.html" title="Radiant-360 R6 Wireless Omnidirectional Speaker [White]">
												<figure><img src="{{ asset('assets/images/products/digital_20.jpg') }}" alt=""></figure>
											</a>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker...</span></a>
											<div class="wrap-price"><span class="product-price">$168.00</span></div>
										</div>
									</div>
								</li>

							</ul>
						</div>
					</div><!-- brand widget-->

				</div><!--end sitebar-->

			</div><!--end row-->

		</div><!--end container-->

	</main>