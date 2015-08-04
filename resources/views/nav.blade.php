<nav class="navbar navbar-default">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle Navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="/" style="padding-top: 19px;">
				<i class="fa fa-btn fa-sun-o"></i>Spark
			</a>
		</div>

		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				@if (Auth::guest())
					<!-- Guest -->
				@else
					<li><a href="/home">Home</a></li>
				@endif
			</ul>

			<ul class="nav navbar-nav navbar-right">
				@if (Auth::guest())
					<li><a href="/login">Login</a></li>
					<li><a href="/register">Register</a></li>
				@else
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
							{{ Auth::user()->name }}
							<span class="caret"></span>
						</a>

						<ul class="dropdown-menu" role="menu">
							<li class="dropdown-header">Test</li>
							<li><a href="/settings"><i class="fa fa-btn fa-cog"></i>Settings</a></li>
							<li class="divider"></li>
							<li class="dropdown-header">Teams</li>
							<li><a href="/teams"><i class="fa fa-btn fa-fw fa-users"></i>Create New Team</a></li>
							<li><a href="/teams"><i class="fa fa-btn fa-check fa-fw" style="color: green;"></i>Team One</a></li>
							<li><a href="/teams"><i class="fa fa-btn fa-fw"></i>Another Team</a></li>
							<li class="divider"></li>
							<li><a href="/logout"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
						</ul>
					</li>
				@endif
			</ul>
		</div>
	</div>
</nav>
