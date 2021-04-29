@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">書き込み</div>

                <div class="card-body">
                    <form action="{{ action('PostController@create') }}" method="post">
                        <textarea name="honbun" cols="30" rows="10"></textarea>
                        @csrf
                        <input type="submit" value="送信">
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-header">投稿一覧</div>
                @foreach ($posts as $post)
                    <div class="card-body">
                        <p>{{$post->user->name}}さんの投稿です</p>
                        <p>内容：{{$post->body}}</p>
                        <p>投稿日時：{{$post->created_at}}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
