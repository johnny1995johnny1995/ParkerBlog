@extends('main')

@section('title','View Post')

@section('content')

    <div class="row">
        <div class="col-md-6"  >
            <h1> {{ $post->title }} </h1>
            <div class="lead" style="word-wrap: break-word;`">{{ $post->body }}</div>
        </div>
  

        <div class="col-md-5 ">
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
                        {!! Html::linkRoute('posts.edit','Edit',array($post->id),array('class' => 'btn btn-warning btn-block'))!!}
                        {{-- <a href="#" class="btn btn-warning btn-block">Edit</a> --}}
                    </div>
                    <div class="col-sm-6">
                        {!! Html::linkRoute('posts.destroy','Delet',array($post->id),array('class' => 'btn btn-danger btn-block'))!!}
                        {{-- <a href="#" class="btn btn-danger btn-block">Delet</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
  

    {{-- <p class="lead">This is blog post</p> --}}


@endsection