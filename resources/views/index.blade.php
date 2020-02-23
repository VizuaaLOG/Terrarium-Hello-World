@extends('layouts.admin')

@section('title')
    Hello World
@endsection

@section('content-header')
    <h1>Hello World<small>An example Terrarium addon</small></h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('index') }}">@lang('strings.home')</a></li>
        <li class="active">Hello World</li>
    </ol>
@endsection

@section('content')
<div class="box">
    <div class="box-body">
        <p>
            Hello World is proof of concept plugin for the Terrarium plugin manager. It's integrating into the
            majority of systems Terrarium's core provides and is a way of testing that everything is
            installed and ready for other plugins.
        </p>
    </div>
</div>
@endsection
