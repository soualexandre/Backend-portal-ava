@extends('layouts.app', ['title' => __('Perfil')])

@section('content')
    @include('users.partials.header', [
        'title' => __('Veja o que ainda falta fazer!')
    ])   

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
                </div>
            </div>
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <h3 class="col-12 mb-0">{{ __('Diciplinas') }}</h3>
                        </div>
                    </div>
                    <div class="card-body">
                            

                            <h6 class="heading-small text-muted mb-4">{{ __('Informações do usuário') }}</h6>
                            
                            @if (session('status'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('status') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                                @foreach ($diciplinas as $diciplina)
                                   
                                 <ul>
                                     <li>  
            <div class="row card-diciplina ">
                <div class="col-xl-12 col-lg-8" >
                    <div class="card card-stats mb-4 mb-xl-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">{{$diciplina->title}}</h5>
                                    <span class="h2 font-weight-bold mb-0"></span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                        <i class="fas fa-chart-bar">{{$errors->name}}</i>
                                    </div>
                                </div>
                            </div>
                            <p class="mt-3 mb-0 text-muted text-sm">
                                <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                                <span class="text-nowrap">Ativa</span>
                            </p>
                        </div>
                        <div class="col-auto">
                            <div class="h5 font-weight-300">
                                <i class="ni location_pin mr-2 ">
                                </i>{{ $diciplina->decription}}
                            </div>
                        </div>
                        <div class="text-center mb-3">
                            <button type="submit" class="btn btn-success mt-4">{{ __('Ver atividades') }}</button>
                        </div>
                    </div>
                </div>
                </li></ul>    </li></ul>    
                          @endforeach
            </div>
                        <hr class="my-4" />
                    </div>
                </div>
            </div>
        </div>
        
        @include('layouts.footers.auth')
    </div>
@endsection