@extends('students.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <h2 class="card-header">Students Page</h2>
  <div class="card-body">
      <div>
        <h5>Name : {{ $students->name }}</h5>
        <p class="text">Address : {{ $students->address }}</p>
        <p class="text">Mobile : {{ $students->mobile }}</p>
      </div>
      </hr >
  </div>
</div>

@stop