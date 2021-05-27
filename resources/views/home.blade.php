
@extends('header')

@section('content')
<!-- ======= Course Section ======= -->
            <section class="main_new">
                <header class="main_new_header">
                </header>
                <?php
                 if ($news):
                    foreach ($news as $new):
                        ?>
                        <article>
                            <p class="title">{{ $new->title }}</p>
                            <h2 class="text">{{ mb_strimwidth($new->text,0,100,"...") }}</h2>
                            <a href="{{ route('news_edit', ['id' => $new->id]) }}" class="button-new" >Acessar</a>
                        </article>
                        <?php
                    endforeach;
                endif;
                ?>
            </section>
        @endsection

