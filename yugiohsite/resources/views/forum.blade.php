@extends('layouts.main')
@section('container')

<div class="isi">
<h2> {{ $heading }}</h2>
<div class="batas"></div>


<div class="container">
    <div class="row">
      <div class="col-sm-8">
            <h3>Forum</h3>
      </div>

      <div class="col-sm-4">
            <h3>FAQ</h3>
      </div>
    </div>
    <div class="row">
        <div class="col-sm-8">
            <nav class="navbar navbar-light bg-light">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#">
                    <img src="{{ url('folder.png') }}" alt="" width="30" height="24" class="d-inline-block align-text-top">
                    General Discussion
                  </a>
                </div>
              </nav>
        </div>

        <div class="col-sm-4">
              <a href="#"><h4>Apa itu Yu-Gi-Oh!?</h4></a>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-8">
            <nav class="navbar navbar-light bg-light">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#">
                    <img src="{{ url('folder.png') }}" alt="" width="30" height="24" class="d-inline-block align-text-top">
                    Deck Discussion
                  </a>
                </div>
              </nav>
        </div>

        <div class="col-sm-4">
            <a href="#"><h4>Tips dan trik memenangkan duel</h4></a>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-8">
            <nav class="navbar navbar-light bg-light">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#">
                    <img src="{{ url('folder.png') }}" alt="" width="30" height="24" class="d-inline-block align-text-top">
                    Deck Building Help
                  </a>
                </div>
              </nav>
        </div>

        <div class="col-sm-4">
            <a href="#"><h4>Penjelasan monster card</h4></a>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-8">
            <nav class="navbar navbar-light bg-light">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#">
                    <img src="{{ url('folder.png') }}" alt="" width="30" height="24" class="d-inline-block align-text-top">
                    Article Discussion
                  </a>
                </div>
              </nav>
        </div>

        <div class="col-sm-4">
            <a href="#"><h4>Penjelasan spellcard</h4></a>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-8">
            <nav class="navbar navbar-light bg-light">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#">
                    <img src="{{ url('folder.png') }}" alt="" width="30" height="24" class="d-inline-block align-text-top">
                    Troubleshooting
                  </a>
                </div>
              </nav>
        </div>

        <div class="col-sm-4">
            <a href="#"><h4>Penjelasan trapcard</h4></a>
        </div>
      </div>
</div>
</div>
@endsection
