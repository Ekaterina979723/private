@extends('layouts.index')
@section('title','Article Page')

@section('custom_img')

        <header class="intro-header" style="background-image: url('/{{ $item->image }}')">

@endsection

@section('page_title')

<h1>{{ $item->title }}</h1>

@endsection


@section('content')
<!-- Post Content -->
<article>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <p>{{ $item->description }}</p>
                </div>
        </div>
    </div>
</article>

<hr>

@endsection
