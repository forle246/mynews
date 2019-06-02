@extends('layouts.front')

@section('content')
    <div class="container">
     <p>名前　　　{{ str_limit($profile->name, 70) }}</p>
     <p>性別　　　{{ str_limit($profile->gender, 70) }}</p>
     <p>趣味　　　{{ str_limit($profile->hobby, 70) }}</p>
     <p>自己紹介　{{ str_limit($profile->introduction, 70) }}</p>
    </div>
@endsection