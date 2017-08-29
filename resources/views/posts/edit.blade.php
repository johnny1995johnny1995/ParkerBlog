@extends('main')


@section('title','Edit')

@section('content')
    <div class="row">
        {!! Form::model($post, ['route' => ['posts.update', $post->id]]) !!}
        <div class="col-md-6">
            {!! Form::label('title',"Title") !!}
            {!! Form::text('title', null,["class" => 'form-control']) !!}

            {!! Form::textarea('body', null,['class' => 'form-control']) !!}
        </div>
         {!! Form::close() !!}
   

        <div class="col-md-4 ">
            <div class="well">
                <dl class="dl-horizontal">
                    <dt>Create At:</dt>
                    <dd>{{ date('M j, Y H:ia', strtotime($post->created_at))}}</dd>
                </dl>
                <dl class="dl-horizontal">
                    <dt>Last Update:</dt>
                    <dd>{{ date('M j, Y H:ia', strtotime($post->updated_at)) }}</dd>
                </dl>

                <hr>    

                <div class="row">
                    <div class="col-sm-6">
                        {!! Html::linkRoute('posts.edit','Cancle',array($post->id),array('class' => 'btn btn-danger btn-block'))!!}
                        {{-- <a href="#" class="btn btn-warning btn-block">Edit</a> --}}
                    </div>
                    <div class="col-sm-6">
                        {!! Html::linkRoute('posts.destroy','Change',array($post->id),array('class' => 'btn btn-success btn-block'))!!}
                        {{-- <a href="#" class="btn btn-danger btn-block">Delet</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

