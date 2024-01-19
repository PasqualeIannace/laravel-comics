<div class="logo">
			<a href="#home">
				<img src="\dc-logo.png" alt="">
			</a>
</div>

		<nav>
			<ul>
                @foreach($navMenu as $link)
				<li>
					<a href="#">
						<div class="borderBottom">
							{{ $link }}
						</div>
					</a>
				</li>
                @endforeach
			</ul>
		</nav>