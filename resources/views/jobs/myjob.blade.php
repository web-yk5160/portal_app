@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">

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
                              <td>
                                @if(empty(Auth::user()->company->logo))
                                  <img src="{{asset('avatar/man.png')}}" width="100" style="width:100%;">
                                @else
                                <img src="{{asset('uploads/logo')}}/{{Auth::user()->company->logo}}" style="width:50%;">
                                @endif
                              </td>
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
                              <a href="{{route('job.edit', [$job->id])}}"><button type="button" name="button" class="btn btn-dark">Edit</button></a> 
                              </td>
                          </tr>
                          @endforeach
                      </tbody>
                  </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
