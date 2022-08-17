@extends('layouts.index')
@section('title','BlogPrivat')

@section('custom_img')
    <header class="intro-header" style="background-image: url('img/home-bg.jpg')">
@endsection

        @section('page_title')

            <h1>MK Blog 1</h1>

        @endsection

@section('content')
<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

            @foreach($articlesMod as $articleMod)
            <div class="post-preview">
                <a href="post.html">
                    <h2 class="post-title">
                        {{ $articleMod->title }}
                    </h2>
                    <h3 class="post-subtitle">
                        {{ $articleMod->subtitle }}
                    </h3>
                </a>
                <p class="post-meta">Posted by <a href="#">{{ $articleMod->author }}</a> {{ $articleMod->created_at }}</p>
            </div>
            <hr>
            @endforeach

            <!-- Pager -->
            <ul class="pager">
                <li class="next">
                    <a href="#">Older Posts &rarr;</a>
                </li>
            </ul>
        </div>
    </div>
</div>

<hr>

@endsection



