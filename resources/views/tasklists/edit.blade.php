@extends('layouts.app')

@section('content')

<h1>id: {{ $tasklist->id }} のタスクリスト編集ページ</h1>

    {!! Form::model($tasklist, ['route' => ['tasklists.update', $tasklist->id], 'method' => 'put']) !!}

{!! Form::label('title', 'タイトル:') !!}
        {!! Form::text('title') !!}
        
        
        {!! Form::label('content', 'タスク:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('更新') !!}

    {!! Form::close() !!}


@endsection