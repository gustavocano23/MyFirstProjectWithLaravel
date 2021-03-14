@extends('plantilla')

@section('title')
    Contacto
@endsection


@section('content')
    <h1>Contacto</h1>




    <form method="POST" action={{route('contact')}}>
        @csrf
        <input type="text" name="name" placeholder="Nombre"><br>
        {!! $errors->first('name', '<small>:message</small>') !!}<br>

        <input type="email" name="email" placeholder="Correo" ><br>
        {!! $errors->first('email', '<small>:message</small>') !!}<br>

        <input type="text" name="subject" placeholder="Asunto"><br>
        {!! $errors->first('subject', '<small>:message</small>') !!}<br>

        <textarea name="content" placeholder="Mensaje"></textarea><br>
        {!! $errors->first('content', '<small>:message</small>') !!}<br>
        <button>Enviar</button>
    </form>
@endsection
