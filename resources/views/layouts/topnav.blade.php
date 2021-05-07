			<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
				<div class="container-fluid">

					@if ( Auth::check() )
					<button type="button" id="sidebarCollapse" class="btn btn-info">
						<i class="fas fa-align-left"></i>
						<span></span>
					</button>
					@endif
					
					<button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<i class="fas fa-align-justify"></i>
					</button>

					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="nav navbar-nav ml-auto">
							<li class="nav-item active">
								<a class="nav-link" href="{{ url( '/home' ) }}">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="{{ url( '/tickets' ) }}">Tickets</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="{{ url( '/new-ticket' ) }}">Create Ticket</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Page</a>
							</li>
							@if ( Route::has( 'login' ) )
								@auth
									<li class="nav-item">
										<a class="nav-link" href="{{ url( '/home' ) }}">Home</a>
									</li>
								@else
									<li class="nav-item">
										<a class="nav-link" href="{{ route( 'login' ) }}">Login</a>
									</li>
									@if ( Route::has( 'register' ) )
										<li class="nav-item">
											<a class="nav-link" href="{{ route('register') }}">Register</a>
										</li>
									@endif
								@endauth
							@endif
						</ul>
					</div>
				</div>
			</nav>