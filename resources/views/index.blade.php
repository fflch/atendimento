@extends('master')

@section('title', 'SolicitaSite')

@section('content_header')
    <h1>Sites</h1>
@stop

@section('content')
    @parent
        @auth
            <script>window.location = "/chamados/create";</script>
        @else
            Você ainda não fez seu login com a senha única USP <a href="/login"> Faça seu Login! </a>
        @endauth
@stop
