@extends('layouts.projet')

@section('content')
<div class="contenu">
	<div class="titre"><i class="fa fa-bookmark"></i> Site de la M2L (1ère année)</div><br />
	<p class="description">
		<i class="fa fa-quote-left fa-pull-left"></i>
		Il s'agit de notre 1er projet où l'on devait réaliser un site présentant la M2L et ses équipes.<br/>
		Les caractéristiques du projet sont les suivantes :<br/>
		<ul class="fa-ul">
			<li class="square"> Langage utilisé : HTML/CSS</li>
			<li class="square"> Environnement : WAMPServeur</li>
			<li class="square"> Lien github : <a href="https://github.com/Cyadenz/ParkingM2L">https://github.com/Cyadenz/ParkingM2L</a></li>
		</ul>
	</p>
	<hr><br />
<h5><center><i class="fa fa-file-image-o"></i> Captures d'écran</center></h5>
<div id="slider">
  <a href="#" class="control_next">></a>
  <a href="#" class="control_prev"><</a>
  <ul>
    <li><img src="img/header.jpg" style="width:100%"></li>
    <li style="background: #aaa;">SLIDE 2</li>
    <li>SLIDE 3</li>
    <li style="background: #aaa;">SLIDE 4</li>
  </ul>  
</div>
<!-- <div class="slider_option">
  <input type="checkbox" id="checkbox">
  <label for="checkbox">Autoplay Slider</label>
</div> -->
</div>
@endsection

@section('complements')
        <li class="list-unstyled-item">
          <a href="#">
            <i class="fa fa-info"></i>
          </a>
        </li>
        <li class="list-unstyled-item">
          <a href="#">
            <i class="fa fa-github"></i>
          </a>
        </li>
        <li class="list-unstyled-item">
          <a href="#">
            <i class="fa fa-file-pdf-o"></i>
          </a>
        </li>
@endsection