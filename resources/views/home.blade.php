
@extends('master')
@section('content')
        <div id="div1">
            <main>
                @foreach ($articles as $article)
                <div class="div2">
                    <img src="{{ $article->img }}" width="100%" height="300px">
                    <h3 style="margin:2%">
                        {{ $article->title }}
                    </h3>
                    <p style="margin:3%">
                          {{substr($article->body , 0 , 100) . '...'}}
                    </p>
                    <a href="{{ route('article' , ['id' => $article->id]) }}" type="submit" style="text-align:center; width:30%; margin-bottom:2%; background-color: rgb(38, 48, 83); padding: 2%; color:#f7fafc">بیشتر بخوانید</a>
                </div>
                @endforeach
            </main>
@endsection
