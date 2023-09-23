@section('title')
Новини
@endsection

<main id="main" class="main-site left-sidebar">
@foreach ($news as $n)
	<section class="about_section layout_padding">
		<div class="container">
		<div class="custom_heading-container ">
			<h2>
			{{$n->title}}
			</h2>
		</div>

		<div class="img-box">
			<img src="images/about-medicine.png" alt="">
		</div>
		<div class="detail-box">
			<p>
			{{$n->body}}
			</p>
		</div>
		</div>
	</section>
	@endforeach
</main>