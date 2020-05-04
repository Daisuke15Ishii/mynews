@extends('layouts.front')
@section('title', 'プロフィール一覧')

@section('content')
    <div class="container">
        <div class="row bg-info">
            <h1 class="mx-auto">プロフィール情報</h1>
        </div>
        <hr color="#c0c0c0">
        @if (!is_null($headline))
            <div class="row">
                <div class="headline col-md-10 mx-auto">
                    <div class="row">
                        <div class="col-md-4 bg-secondary text-white">
                            <div class="text-center mx-auto display-4">{{ "著者No." . str_limit($headline->id, 70) }}</div>
                        </div>
                        <div class="col-md-8">
                            <h2 class="title mx-auto">{{ str_limit($headline->name, 70) }}</h2>
                            <p class="body mx-auto">{{ "性別： " . str_limit($headline->gender, 70) }}</p>
                            <p class="body mx-auto">{{ "趣味： " . str_limit($headline->hobby, 300) }}</p>
                            <p class="body mx-auto">{{ str_limit($headline->introduction, 650) }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        <hr color="#c0c0c0">
        <div class="row">
            <div class="posts col-md-8 mx-auto mt-3">
                @foreach($posts as $post)
                    <div class="post">
                        <div class="row">
                            <div class="text col-md-8">
                                <div class="title">
                                    {{ str_limit($post->name, 70) }}
                                </div>
                                <div class="body mt-3">
                                    <p>{{ "性別： " . str_limit($post->gender, 70) }}</p>
                                    <p>{{ "趣味： " . str_limit($post->hobby, 300) }}</p>
                                    <p>{{ str_limit($post->introduction, 1500) }}</p>
                                </div>
                            </div>
                            <div class="col-md-4 bg-secondary text-white">
                                <div class="text-center mx-auto display-4">{{ "著者No." . str_limit($post->id, 70) }}</div>
                            </div>
                        </div>
                    </div>
                    <hr color="#c0c0c0">
                @endforeach
            </div>
        </div>
    </div>
    </div>
@endsection