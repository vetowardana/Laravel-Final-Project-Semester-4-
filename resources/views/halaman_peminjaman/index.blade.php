@extends('layouts.halaman_peminjaman')

@section('title')
    <title>Jualhp.com - Toko HP Terpercaya</title>
@endsection

@section('content')
    <!--================Home Banner Area =================-->
	<section class="home_banner_area">
		<div class="overlay"></div>
		<div class="banner_inner d-flex align-items-center">
			<div class="container">
				<div class="banner_content row">
					<div class="offset-lg-2 col-lg-8">
						<h3>Jualhp.com
							<br />Toko HP Online Terpercaya</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
							aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
						<a class="white_bg_btn" href="{{ route('front.product') }}">Lihat Koleksi</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Home Banner Area =================-->

	<!--================Hot Deals Area =================-->
	<section class="hot_deals_area section_gap">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6">
					<div class="hot_deal_box">
						<img class="img-fluid" src="{{ asset('halaman_pinjam/img/product/hot_deals/Samsung-Galaxy-S10-Banner.jpg') }}" alt="">
						
						<a class="hot_deal_link" href="#"></a>
					</div>
				</div>

				<div class="col-lg-6">
					<div class="hot_deal_box">
						<img class="img-fluid" src="{{ asset('halaman_pinjam/img/product/hot_deals/iPhone-11-Pro.png') }}" alt="">
						
						<a class="hot_deal_link" href="#"></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Hot Deals Area =================-->

	<!--================Feature Product Area =================-->
	<section class="feature_product_area section_gap">
		<div class="main_box">
			<div class="container-fluid">
				<div class="row">
					<div class="main_title">
						<h2>Produk Terbaru</h2>
						<p>Smartphone terbaru kami.</p>
					</div>
				</div>
				<div class="row">
          
          
          @forelse($products as $row)
					<div class="col col1">
						<div class="f_p_item">
							<div class="f_p_img">
                
                				<a href="{{ url('/product/' . $row->slug) }}">
                					<img class="img-fluid" src="{{ asset('storage/products/' . $row->image) }}" alt="{{ $row->name }}">
                				</a>
								<div class="p_icon">
									<a href="{{ url('/product/' . $row->slug) }}">
										<i class="lnr lnr-cart"></i>
									</a>
								</div>
							</div>
              
              
              <a href="{{ url('/product/' . $row->slug) }}">
                
                 <h4>{{ $row->name }}</h4>
							</a>
              
              <h5>Rp {{ number_format($row->price) }}</h5>
						</div>
					</div>
          @empty
                    
          @endforelse
				</div>

        
				<div class="row">
					{{ $products->links() }}
				</div>
			</div>
		</div>
	</section>
	<!--================End Feature Product Area =================-->
@endsection