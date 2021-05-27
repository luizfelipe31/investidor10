
@extends('header')

@section('content')
        @if($errors->all())
            @foreach($errors->all() as $error)
                @message(['color' => 'orange'])
                <p>{{ $error }}</p>
                @endmessage
            @endforeach
        @endif

    <div class="container">
        <h1>CADASTRAR NOTÍCIA</h1>
        <form class="app_form" action="{{ route('news_create') }}" method="post">
          @csrf
            <ul class="flex-outer">
            <li>
                <label for="title">Título</label>
                <input type="text" id="title" name="title" value="{{ old('title') }}" required placeholder="Título da notícia" maxlenght="50">
                </li>
                <li>
                <label for="message">Texto</label>
                <textarea rows="6" name="text" id="message" placeholder="Texto da Notícia">{{ old('message') }}</textarea>
                </li>
                <li>
                <button type="submit">Criar</button>
            </li>
            </ul>
        </form>
    </div>
@endsection
