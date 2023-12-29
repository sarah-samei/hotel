@extends("master")

@section("content")

{{--
	@foreach($all_guests as $guest)
		<i>{{ $guest->fname }} -</i>
		<i>{{ $guest->lname }}</i>
		<br>
	@endforeach--}}



	{{--<i>{{ $guest[0]->fname}}</i>--}}
<div>
	<img src="dist/img/hotel1.jpg" style="width:350px; height: 350px; border-radius: 50%; border: 5px dashed black">
	<img src="dist/img/hotel2.jpg" style="width:350px; height: 350px; border-radius: 50%; border: 5px dashed black;">
	<img src="dist/img/hotel3.jpg" style="width:350px; height: 350px; border-radius: 50%; border: 5px dashed black">
	<img src="dist/img/hotel4.jpg" style="width:350px; height: 350px; border-radius: 50%; border: 5px dashed black">
</div>

@endsection