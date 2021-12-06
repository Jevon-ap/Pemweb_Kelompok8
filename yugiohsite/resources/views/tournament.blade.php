@extends('layouts.main')
@section('container')
<div class="isi">
<h2>Daftar Turnamen</h2>
<div class="batas">International</div>
<div class="container">
    <div class="row justify-content-center">
      <div class="col-4">
        <div class="card" style="width: 18rem;">
            <img src="{{ url('ycs.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Yu-Gi-Oh! Championship Series</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Lanjut baca</a>
            </div>
          </div>
      </div>
      <div class="col-4">
        <div class="card" style="width: 18rem;">
            <img src="{{ url('wcsnational.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">WCQ National 2020</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Lanjut baca</a>
            </div>
          </div>
      </div>
    </div>
</div>
<div class="batas">Regional</div>
<div class="container">
    <div class="row justify-content-center">
      <div class="col-4">
        <div class="card" style="width: 18rem;">
            <img src="{{ url('remote_duel_logo.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Remote Duel</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Lanjut baca</a>
            </div>
          </div>
      </div>
      <div class="col-4">
        <div class="card" style="width: 18rem;">
            <img src="{{ url('wcs.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">WCQ Regional 2020</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Lanjut baca</a>
            </div>
          </div>
      </div>
    </div>
</div>
</div>
@endsection
