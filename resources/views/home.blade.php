@extends('layouts.app')
{{-- JUMBO --}}
@section('content')
    <div class="jumbo">
        <img src="/jumbotron.jpg" alt="">
    </div>
{{-- SECTION 1 --}}
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

	{{-- SECTION 2 --}}
	<div class="sectionBg">
        <div class="desktop section">
			@foreach ($other as $item)
            <div class="product">
				<a href={{$item["url"]}}>
                    <div>
                        <img class="other" src={{$item["src"]}} alt="">
                    </div>
                    <div class="px1">
                        {{ $item["text"] }}
                    </div>
            	</a> 
			</div>
			@endforeach    
        </div>
    </div>
@endsection