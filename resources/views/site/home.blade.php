@extends('site.master.layout')

@section('content')

<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="http://localhost/EstudioP/public/img/1.jpg" alt="Carrousel 1">

      <div class="container">
        <div class="carousel-caption text-start">
          <h1>Espaçoso!</h1>
          <p>Traga sua banda inteira, ou sua orquestra, talvez ?</p>
          <p><a class="btn btn-lg btn-primary" href="contact">Contrate hoje</a></p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="http://localhost/EstudioP/public/img/2.jpg" alt="Carrousel 2">


      <div class="container">
        <div class="carousel-caption">
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="http://localhost/EstudioP/public/img/3.jpg" alt="Carrousel 2">

      <div class="container">
        <div class="carousel-caption text-end">
          <p>Para qualquer estilo</p>
          <p><a class="btn btn-lg btn-primary" href="photos">Veja as fotos</a></p>
        </div>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container marketing">

  <!-- Three columns of text below the carousel -->
  <div class="row">
    <div class="col-lg-4">
      <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="http://localhost/EstudioP/public/img/john.jpg" alt="JohnMayer">


      <h2>John Mayer</h2>
      <p>"Um lugar onde consegui expressar totalmente minhas ideias de composição!".</p>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4">
      <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="http://localhost/EstudioP/public/img/slash.jpg" alt="Slash">


      <h2>Slash</h2>
      <p>"Muito doido esse lugar, estou lá toda semana!"</p>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4">
      <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="http://localhost/EstudioP/public/img/chimb.jpg" alt="Chimbinha">

      <h2>Chimbinha</h2>
      <p>"Um lugar ótimo até me encontrei com lendas da guitarra por lá!"</p>
    </div><!-- /.col-lg-4 -->
  </div><!-- /.row -->


  <!-- START THE FEATURETTES -->

  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-7">
      <h2 class="featurette-heading">Os melhores equipamentos. <span class="text-muted">Vai explodir sua mente</span></h2>
      <p class="lead">Microfones, equalizadores, tudo do mais moderno.</p>
    </div>
    <div class="col-md-5">
      <img class="bd-placeholder-img bd-placeholder-img-lg bd-borderradious featurette-image img-fluid mx-auto" width="500" height="500" src="http://localhost/EstudioP/public/img/4.jpg" alt="soundtable">
    </div>
  </div>

  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-7 order-md-2">
      <h2 class="featurette-heading">Chroma Key. <span class="text-muted">Para fotos ou vídeos</span></h2>
      <p class="lead">Para deixar seus filmes muito mais profissionais, dinâmicos e bem produzidos.</p>
    </div>
    <div class="col-md-5">
      <img class="bd-placeholder-img bd-placeholder-img-lg bd-borderradious featurette-image img-fluid mx-auto" width="500" height="500" src="http://localhost/EstudioP/public/img/5.jpg" alt="chormakey">
      <rect width="100%" height="100%" fill="#eee" />
    </div>
  </div>

  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-7 order-md-2">
      <h2 class="featurette-heading">Artistas famosos <span class="text-muted">já estiveram aqui</span></h2>
      <p class="lead">Michael gravou seu álbum de sucesso "Thriller" no estúdio peres</p>
    </div>
    <div class="col-md-5">
      <img class="bd-placeholder-img bd-placeholder-img-lg bd-borderradious featurette-image img-fluid mx-auto" width="500" height="500" src="http://localhost/EstudioP/public/img/6.jpeg" alt="michael">
    </div>
  </div>

  <hr class="featurette-divider">

  <!-- /END THE FEATURETTES -->

</div><!-- /.container -->
@endsection