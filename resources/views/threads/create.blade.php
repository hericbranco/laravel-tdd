@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Create a New Threads</div>
                    <div class="card-body">
                        <form method="POST" action="/threads">
                            @csrf

                            <div class="form-group">
                                <label for="channel_id">Channel</label>
                                <select class="form-control" id="channel_id" name="channel_id" required>
                                    <option value="">Choose one</option>
                                    @foreach(App\Models\Channel::all() as $channel)
                                        <option value="{{$channel->id}}" {{old('channel_id') == $channel->id ? 'selected' : ''}}>{{$channel->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" id="title" name="title" class="form-control" value="{{old('title')}}" required>
                            </div>

                            <div class="form-group">
                                <label for="body">Body</label>
                                <textarea name="body" id="body" cols="30" rows="10" class="form-control" required>{{old('body')}}</textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>

                        @if(count($errors))
                            <ul class="alert alert-danger">
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
