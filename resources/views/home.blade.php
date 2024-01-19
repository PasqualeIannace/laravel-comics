@extends('layouts.app')

@section('content')
    <div class="jumbo">
        <img src="/jumbotron.jpg" alt="">
    </div>

    <div class="productsBg">
		<div class="desktop products">
			<div class="info white">
				CURRENT SERIES
			</div>

            @foreach ($comics as $product)
			    <div class="card">
                    <img class="comics" src={{ $product["thumb"] }} alt="">
                    <p class="upperCase">{{ $product["series"] }}</p>
                    <span>{{ $product["price"] }}</span>
                </div>
            @endforeach

			<div class="more white">
				<div class="moreBtn">
					LOAD MORE
				</div>
			</div>
		</div>
	</div>
@endsection