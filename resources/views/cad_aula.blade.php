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
                 <h6>Aulas</h6>
             </div>
             <form method="post" action="{{ isset($aula) ? route('atualizar-aula', $aula->id) : route('cadastro-aula') }}">
    @csrf
    @if (isset($aula))
        @method('PUT')
    @endif
    <div class="row">
        <div class="col-12">
            <div class="input-style-1">
                <label>Id curso</label>
                <input type="text" name="idcurso" placeholder="Id curso..." value="{{ $aula->idcurso ?? '' }}" />
            </div>
        </div>
        <div class="col-12">
            <div class="input-style-1">
                <label>Nome da aula</label>
                <input type="text" name="tituloaula" placeholder="Nome da aula..." value="{{ $aula->tituloaula ?? '' }}" />
            </div>
        </div>
        <div class="col-12">
            <div class="input-style-1">
                <label>urlaula</label>
                <input type="text" name="urlaula" placeholder="urlaula..." value="{{ $aula->urlaula ?? '' }}" />
            </div>
        </div>
        
        <div class="col-12">
            <button class="main-btn primary-btn btn-hover">
                {{ isset($aula) ? 'Atualizar Aula' : 'Adicionar Aula' }}
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
