@extends('layouts.app2')

@section('content')

    <div class="panel panel-default">
      <div class="panel-heading">Panel Heading</div>
      <div class="panel-body" style="color:black;">Panel Content</div>
      <a class="btn btn-primary" href="{{action('AdminController@index')}}">Admins</a>
    </div>

@endsection
