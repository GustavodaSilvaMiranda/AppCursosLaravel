@extends('padrao')
@section('content')
<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/lineicons.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/materialdesignicons.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/fullcalendar.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

<section>
  <div class="container-fluid">
    <!-- ========== title-wrapper start ========== -->
    <div class="title-wrapper pt-30">
      <div class="row align-items-center">
        <div class="col-md-6">
          <div class="title d-flex align-items-center flex-wrap">
            <h2 class="mr-40">Cadastrar Categoria</h2>
          </div>
        </div>
        <!-- Invoice Wrapper Start -->
        <div class="invoice-wrapper align-items-center m-5">
          <div class="row align-items-center">
            <div class="col-10 ">
              <div class="invoice-card card-style mb-30">
                <div class="card-style mb-30 ">
                  <h6 class="mb-25 fs-4" >Digite o nome da categoria de curso</h6>
                  <div class="input-style-1 fs-4 ">

                  <form method="post" action="{{ isset($categoria) ? route('att-categoria', $categoria->id) : route('cadastro-categoria') }}">

    @csrf
    @if (isset($categoria))
        @method('PUT')
    @endif

    <div class="form-group">
        <label for="nomecategoria">Nome da Categoria</label>
        <input type="text" class="form-control" id="nomecategoria" name="nomecategoria" value="{{ $categoria->nomecategoria ?? '' }}" required>
    </div>

    <button type="submit" class="btn btn-primary">
        {{ isset($categoria) ? 'Atualizar Categoria' : 'Adicionar Categoria' }}
    </button>
</form>

                </div>

              </div>
              <!-- Invoice Wrapper End -->
            </div>
            <!-- end container -->
          </div>
          <!-- end container -->
        </div>
        <!-- end container -->
      </div>
      <!-- end container -->
    </div>
    <!-- end container -->
  </div>
  <!-- end container -->
</section>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/Chart.min.js') }}"></script>
<script src="{{ asset('assets/js/dynamic-pie-chart.js') }}"></script>
<script src="{{ asset('assets/js/moment.min.js') }}"></script>
<script src="{{ asset('assets/js/fullcalendar.js') }}"></script>
<script src="{{ asset('assets/js/jvectormap.min.js') }}"></script>
<script src="{{ asset('assets/js/world-merc.js') }}"></script>
<script src="{{ asset('assets/js/polyfill.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
@endsection

