@extends('includes.app')
@section('content')
<div class="wrapper">
  <div class="container">
    <div class="logo-container">
      <img src="{{asset('images/logo.png')}}" class="logo" alt="">
    </div>
    <div class="header-texts">
      <h1>Welcome to Lemi, Nicholas!</h1>
      <p>
        Penbrothers and Lemi have teamed up to help you share recommendations to your colleagues
        and discover more from your community.
      </p>
    </div>
    <div class="border">
      <h1 class="text-center">091785</h1>
      <p class="text-center">
        Download Lemi and use this code to gain access to exclusive content from Penbrothers on Lemi.
      </p>
    </div>
    <div class="row">
      <div class="col-md-6">
        <img src="{{asset('images/appstore.png')}}" class="badges float-right" alt="">
      </div>
      <div class="col-md-6">
        <img src="{{asset('images/google.png')}}" class="badges float-left" alt="">
      </div>
    </div>
    <div class="content">
      <h2 class="text-center">Discover. Plan. Go</h2>
      <p>Lemi organizes recommendations into beautiful lists, and instantly maps them out for you.</p>
      <img src="{{asset('images/image.png')}}" alt="">
    </div>
    <div class="content text-content">
      <h2 class="text-center">Lemi lets you...</h2>
    </div>
    <div class="content text-content img-content">
      <div class="row">
        <div class="col-md-7">
          <h3>Discover insider secrets</h3>
          <p>See recommendations from the whole Penbrothers community in one map.</p>
        </div>
        <div class="col-md-5">
          <img src="{{asset('images/image-1.png')}}" alt="">
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <img src="{{asset('images/image-2.png')}}" alt="" class="img-small">
        </div>
        <div class="col-md-8">
          <h3 class="text-right">Plan trips with colleagues</h3>
          <p class="text-right">
            Invite co-workers to collaborate on lists for brainstorming ideas wherever you are, wherever you're going.
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8">
          <h3>Go anywhere</h3>
          <p>Instantly calculate distances and travel times to make the most out of your trip.</p>
        </div>
        <div class="col-md-4">
          <img src="{{asset('images/image-3.png')}}" alt="">
        </div>
      </div>

    </div>
  </div>
</div>

@stop
