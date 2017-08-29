@extends('main')
@section('title','-Create Post')
@section('stylesheets')
    {!! Html::style('css/parsley.css') !!}
@endsection
@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h1>Create New Post</h1>
            <hr>
            {{-- {!! Form::open(array('route' => 'posts.store')) !!}
                {{ Form::label('title','Title') }}
                {{ Form::text('title',null,array('class' => 'form-control')) }}

                {{ Form::label('body',"Post Body:") }}
                {{ Form::textarea('body',null,array('class' => 'form-control')) }}
                <br>
                {{ Form::submit('Create Post',array('class' => 'btn btn-success btn-lg ')) }}
            {!! Form::close() !!} --}}


                    
            {!! Form::open(array('route' => 'posts.store', 'data-parsley-validate' => '')) !!}
                {{ Form::label('title','Title') }}
                {{ Form::text('title',null,array('class' => 'form-control', 'required' => '', 'maxlenght' => '255' )) }}

                {{ Form::label('body',"Post Body:") }}
                {{ Form::textarea('body',null,array('class' => 'form-control', 'required' => '')) }}
                <br>
                {{ Form::submit('Create Post',array('class' => 'btn btn-success btn-lg ')) }}
            {!! Form::close() !!}

        {{-- 
                教學 https://laravelcollective.com/docs/5.4/html#installation
                在app.php加入
                'providers' => [
                    // ...
                    Collective\Html\HtmlServiceProvider::class,
                    // ...
                ],
                Finally, add two class aliases to the aliases array of config/app.php:

                'aliases' => [
                    // ...
                    'Form' => Collective\Html\FormFacade::class,
                    'Html' => Collective\Html\HtmlFacade::class,
                    // ...
                ], 
            
            --}}
            
        </div>
    </div>
@endsection

@section('scripts')
    {!! Html::script('js/parsley.min.js') !!}
@endsection