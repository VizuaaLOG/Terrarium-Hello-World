@extends('layouts.admin')
@include('partials/admin.settings.nav', ['activeTab' => 'hello-world'])

@section('title')
    Hello World Settings
@endsection

@section('content-header')
    <h1>Hello World Settings<small>{{ $settingValue }}</small></h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('admin.index') }}">Admin</a></li>
        <li class="active">Settings</li>
    </ol>
@endsection

@section('content')
    @yield('settings::nav')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Hello World Settings</h3>
                </div>

                <form method="POST">
                    <div class="box-body">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="control-label">Hello World Label</label>
                                <div>
                                    <input required type="text" class="form-control" name="hello-world-label" value="{{ old('hello-world-label', $settingValue) }}" />
                                    <p class="text-muted small">This is the text shown at the top of this page.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        {{ csrf_field() }}
                        <div class="pull-right">
                            <button class="btn btn-sm btn-primary">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
