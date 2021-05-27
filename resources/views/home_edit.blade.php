
@extends('header')

@section('content')
<div class="container">
        <h1>{{ $new->title }}</h1>

        {{ $new->text }}

</div>
@endsection