@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Posts Module</h2>
            </div>

            <div class="pull-right">
                <a href="posts/create" class="btn btn-success mb-2">Create Post</a>
            </div>
        </div>
    </div>
            <br>

            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
            @endif

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Published At</th>
                        <th>Created at</th>
                        <th width="100px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if($posts->isNotEmpty())
                    @foreach($posts as $key=>$post)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ date('Y-m-d', strtotime($post->published_at)) }}</td>
                        <td>{{ date('Y-m-d', strtotime($post->created_at)) }}</td>
                        <td style="display:inline-flex;">
                            <a href="posts/{{$post->id}}" class="btn btn-primary ml-1">Show</a>
                            <a href="posts/{{$post->id}}/edit" class="btn btn-primary ml-1">Edit</a>
                            <form action="posts/{{$post->id}}" method="post" class="d-inline ml-1">
                                {{ csrf_field() }}
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    @else
                    <tr><td colspan="5">No posts found</td></tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection