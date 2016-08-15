

@extends('layouts.app')

@section('content')

	<div class="container">
		
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">
                <div class="panel-heading">About page</div>

<p class="text-justify">Conveying meaning to assistive technologies
Using color to add meaning to a button only provides a visual indication, which will not be conveyed to users of assistive technologies – such as screen readers. Ensure that information denoted by the color is either obvious from the content itself (the visible text of the button), or is included through alternative means, such as additional text hidden with the .sr-only class.</p>


                <div class="panel-body">
                    <button id="btn-news" class="btn btn-info">Sign up for news</button>
                    <button id="btn-purchase" class="btn btn-danger">Purchase</button>
                    <button id="btn-trial" class="btn btn-success">Trial</button>
                </div>


            </div>
			</div>
		</div>

	</div>


	

@endsection