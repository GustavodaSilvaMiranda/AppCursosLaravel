@include('padrao')
@section('conteudo')
<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/lineicons.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/materialdesignicons.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/fullcalendar.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
 <!-- ========== title-wrapper end ========== -->

 
     

     <div class="col">
         <div class="card-style settings-card-2 mb-30">
             <div class="title mb-30">
                 <h6>Cursos</h6>
             </div>
             <form method="post" action="{{ isset($curso) ? route('atualizar-curso', $curso->id) : route('cadastro-curso') }}">
    @csrf
    @if (isset($curso))
        @method('PUT')
    @endif
    <div class="row">
        <div class="input-style-1">
            <label>Id Categoria</label>
            <input type="text" name="idcategoria" placeholder="Id categoria..." value="{{ $curso->idcategoria ?? '' }}" />
        </div>

        <div class="col-12">
            <div class="input-style-1">
                <label>Nome</label>
                <input type="text" name="nomecurso" placeholder="Nome do curso..." value="{{ $curso->nomecurso ?? '' }}" />
            </div>
        </div>
        <div class="col-12">
            <div class="input-style-1">
                <label>Carga Horária</label>
                <input type="text" name="cargahoraria" placeholder="Carga Horária..." value="{{ $curso->cargahoraria ?? '' }}" />
            </div>
        </div>
        <div class="col-12">
            <div class="input-style-1">
                <label>Valor</label>
                <input type="text" name="valor" placeholder="Valor a ser pago..." value="{{ $curso->valor ?? '' }}" />
            </div>
        </div>
        
        <div class="col-12">
            <button class="main-btn primary-btn btn-hover">
                {{ isset($curso) ? 'Atualizar Curso' : 'Adicionar Curso' }}
            </button>
        </div>
    </div>
</form>

         </div>
         <!-- end card -->
     </div>
     <!-- end col -->
 </div>
 <!-- end row -->
 </div>
 <!-- end container -->
 </section>
 <!-- ========== section end ========== -->
 <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/Chart.min.js') }}"></script>
<script src="{{ asset('assets/js/dynamic-pie-chart.js') }}"></script>
<script src="{{ asset('assets/js/moment.min.js') }}"></script>
<script src="{{ asset('assets/js/fullcalendar.js') }}"></script>
<script src="{{ asset('assets/js/jvectormap.min.js') }}"></script>
<script src="{{ asset('assets/js/world-merc.js') }}"></script>
<script src="{{ asset('assets/js/polyfill.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>