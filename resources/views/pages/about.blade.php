@extends('layouts.default', ['title'=>'About'])

@section('content')

<div class="container">

	<h2>Whhat is Laracarte ?</h2>
	<p>Laracarte is a clone app of <a href="https://laramp.com" target=".bllank">laramap.com</a> .</p>
	<div class="row">
		<div class="col-md-6">
			<p class="alert alert-warning">
				<strong><i class="fa fa-exclamation-triangle" area-hidden="true"></i>this app as build by <a href="https://twitter.com/etsmo">@etsmo</a> for learning purpose.</strong>
			</p>
			
		</div>
	</div>
	<p>Feel free to improve <a href="#">the code source</a>. </p>

	<hr>
	 <h2>What is Laramap ?</h2>
	 <p>Laramap is a website by which Laracarte was inspired :).</p>
	 <p>More info <a href="https://laramap.com/about"> here</a>.</p>

	 <hr>
	 <h2>Which tools and services are used in laracarte ?</h2>
	 <p>Basically it is build on laravel &amp; Bootstrap. but thre is a bunch of services used for email and other sections.</p>
	 <ul>
	 	<li>Laravel</li>
	 	<li>Bootstrap</li>
	 	<li>Amazon S3</li>
	 	<li>Google Map</li>
	 	<li>Gravatar</li>
	 	<li>Antony Martin's Geolocation Package</li>
	 	<li>Michel Fortin's Markdown Parser Pakage</li>
	 	<li>Heroku</li>
	 </ul>
</div>
@stop