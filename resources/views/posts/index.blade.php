@extends('main')

@section('title','All Post')

@section('content')
    <div class="row">
        <div class="col-md-10">
            <h1>All Posts</h1>

        </div>

        {{-- <br> --}}

        <div class="col-md-2">
            <a href="{{ route('posts.create')}}" class="btn btn-primary btn-h1 ">Create New Blog</a>
        </div>
        <hr>

        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Body</th>
                        <th>Create At</th>
                    </thead>

                     <tbody>
                        @foreach($posts as$post)
                            <tr>
                                <th>{{ $post ->id }}</th>
                                <td>{{ $post->title }}</td>
                                <td>{{ substr($post->body, 0, 30) }} {{ strlen($post->body) > 50 ? "..." : "" }} </td>
                                {{-- substr 限制顯示字數  --}}
                                {{-- php truncate string --}}
                                <td>{{ date('M j, Y', strtotime($post->created_at ))}}</td>
                                <td>
                                    <a href="{{ route('posts.show', $post->id) }}" class="btn btn-default">觀看</a>
                                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-default">修改</a>
                                </td>
                               
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>


@endsection