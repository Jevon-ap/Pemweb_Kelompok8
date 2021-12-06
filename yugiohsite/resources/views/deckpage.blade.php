@extends('layouts.main')

@section('container')

<div class="left"><img src="right.png" alt=""></div>
<div class="right"><img src="left.png" alt=""></div>
<h3 id='pagename'>Yu-Gi-Oh! Tournament Decks</h3>
<img src="contohdeck.jpg" alt="" style="padding-left: 230px">
<div class="w3-container" id="intro">
 
    <h2>Tri-Brigade Lyrilusc</h2>
    <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">Deck Type:</th>
            <td>Tournament Meta Decks</td>
          </tr>
          <tr>
            <th scope="row">Deck Master:</th>
            <td>Lyrilusc - Ensemblue Robin</td>
          </tr>
          <tr>
            <th scope="row">TCG/OCG</th>
            <td>TCG</td>
          </tr>
          <tr>
            <th scope="row">Submission Date</th>
            <td>December 3rd 2021</td>
          </tr>
          <tr>
            <th scope="row">Author</th>
            <td>TCG</td>
          </tr>
        </tbody>
      </table>
    <ul>
        <li>
            Kategori: Tournament Meta Deck
        </li>
        <li>
            Tournament Meta Decks adalah Meta Decks level terkini
            yang dapat bersaing dengan deck terbaik dari yang terbaik. Ada beberapa daftar yang tidak dapat diunggah
            oleh user biasa.
        </li>
        <li>
            Pemilik: Michael State
        </li>
        <li>
            Turnmaen: The Side Deck NA WCQ Regional - Nov 28th 2021
        </li>
        <li>
            Peringkat: Top 4
        </li>
    </ul>
<br>
<br>
<br>
</div>
<div class="w3-container" id="browse">
    <h3 id="related">Deck lainnya</h3>
    <ul>
        <li>
            <a href="/deck-page"><p>Tri-GOON</p></a>
            <img src="contohdeck2.jpg" alt="" width="200px">
        </li>
        <li>
            <a href="/deck-page"><p>Dream Mirror Chaos</p></a>
            <img src="contohdeck3.png" alt="" width="200px">
        </li>
        <li>
            <a href="/deck-page"><p>TrueKing FireKing</p></a>
            <img src="contohdeck4.jpg" alt="" width="200px">
        </li>
    </ul>   
</div>


        

@endsection