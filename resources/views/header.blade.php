<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
    </head>
    <body>
        <!-- ======= Main Header Section ======= -->
        <header class="main_header">
            <div class="main_header_content">
                <a href="{{ route('home') }}" class="logo">
                    Logo
                </a>
                <a href="{{ route('news_add') }}" class="text text_menu">
                 Cadastrar Noticias 
                </a>
                <a href="{{ route('home') }}" class="text_menu">
                Exibir Notícias
                </a>
                <div class="main_header_search">
                        <div class="main_header_form"> 
                            <form name="search" action="{{ route('home_search') }}" method="post" >
                            @csrf
                                <input type="search" id="text-search" name="s" @if(isset($s)) value={{$s}} @endif placeholder="Procurar notícia...">
                                <button type="submit" id="search"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                </div>
            </div>
        </header>
        <main>
        @yield('content')
        </main>
                <!-- ======= Main Footer Rights Section ======= -->
                <footer class="main_footer_rights">
            <p class="main_footer_rights_p">Desenvolvido por programador</p>
        </footer>
    </body>
</html>