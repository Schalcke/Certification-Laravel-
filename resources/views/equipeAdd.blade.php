@extends('template')

@section('content')
<div class="container">
        <h1>Ajouter une nouvelle équipe !</h1>

            <div class="row">
                {!! Form::open(['route' => 'equipes.store', 'class' => '']) !!}
                    <div class="form-group col-md-6 {!! $errors->has('titre') ? 'has-error' : '' !!}">
                        <label>Nom de l'équipe :</label>
                        {!! Form::text('nomEquipe', null, ['class' => 'form-control', 'placeholder' => 'Nom de l'équipe]) !!}
                        {!! $errors->first('nomEquipe', '<small class="help-block">:message</small>') !!}
                    </div>
                    
                    {!! Form::submit('Ajouter', ['class' => 'btn btn-primary pull-right']) !!}
                {!! Form::close() !!}

    </div>
@endsection