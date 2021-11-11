@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{$thread->title}}</div>
                    <div class="card-body">
                        {{$thread->body}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
