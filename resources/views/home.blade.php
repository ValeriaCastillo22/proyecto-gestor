@extends('layouts.app')

@section('content')
<body background="https://www.1zoom.me/big2/88/210854-Sepik.jpg">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('NOTICIAS') }}</div>
                
               
<div class="card-group">
  <div class="card">
    <img src="https://www.gndiario.com/sites/default/files/noticias/dia-internacional-contra-dengue.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Dengue</h5>
      <p class="card-text">El dengue es un mosquito que pica fuerte.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img src="https://cdn.lavoz.com.ar/sites/default/files/styles/width_1072/public/nota_periodistica/larvas.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Muertes de larvase</h5>
      <p class="card-text">Las larvas del dengue sobreviven en ambientes limpios.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img src="https://i2.wp.com/infoagro.com.ar/wp-content/uploads/2020/03/Fumigacion-contra-el-dengue.png?fit=1109%2C680&ssl=1" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Fumigacion en barrios</h5>
      <p class="card-text">¿Qué tan efectiva es la fumigación contra el mosquito del dengue?</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Estas Logueado!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
