@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <table class="table">
        <h1>Recent Jobs</h1>
            <thead>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </thead>
            <tbody>
            @foreach($jobs as $job)
                <tr>
                    <td><img src="{{asset('avatar/man.png')}}" width="80"></td>
                    <td>Position: {{$job->position}}
                        <br>
                        <i class="fa fa-clock"aria-hidden="true"></i>&nbsp;
                        {{$job->type}}
                    </td>
                    <td><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;Address: {{$job->address}}</td>
                    <td><i class="fa fa-globe"aria-hidden="true"></i>&nbsp;Date: {{$job->created_at->diffForHumans()}}</td>
                    <td>
                    <a href="{{route('job.show', [$job->id, $job->slug])}}">
                    <button class="btn btn-success btn-sm">Apply</button>
                    </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>
@endsection
<style>
    .fa{
        color: #4183D7;
    }
</style>
