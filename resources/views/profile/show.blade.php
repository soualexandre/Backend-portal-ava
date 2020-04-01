@extends('layouts.app', ['title' => __('Perfil')])

@section('content')
    @include('users.partials.header', [
        'title' => __('Olá') . ' '. auth()->user()->name,
        'description' => __('O ambiente virtual de aprendizagem foi feito para facilitar a vida do estudante'),
        'class' => 'col-lg-7'
    ])   

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
                <div class="card card-profile shadow">
                    <div class="row justify-content-center">
                        <div class="col-lg-3 order-lg-2">
                            <div class="card-profile-image">
                                <a href="#">
                                    <img src="{{ asset('argon') }}/img/theme/gato.png" class="rounded-circle">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                        <div class="d-flex justify-content-between">
                            <a href="#" class="btn btn-sm btn-info mr-4">{{ __('Aluno') }}</a>
                            <a href="#" class="btn btn-sm btn-default float-right">{{ __('ADM') }}</a>
                        </div>
                    </div>
                    <div class="card-body pt-0 pt-md-4">
                        <div class="row">
                            <div class="col">
                                <div class="card-profile-stats d-flex justify-content-center mt-md-5">
                                   
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <h3>
                                {{ auth()->user()->name }}<span class="font-weight-light"></span>
                            </h3>
                            <div class="h5 font-weight-300">
                                <i class="ni location_pin mr-2">
                                Curso:
                                </i>{{ old('curso', auth()->user()->curso) }}
                            </div>
                            
                            <div class="h5 font-weight-300">
                                <i class="ni location_pin mr-2">
                                {{ old('periodo', auth()->user()->periodo) }} º Período
                                </i>
                            </div>
                            <div class="h5 font-weight-300">
                                <i class="ni location_pin mr-2">
                                CPF:
                                </i>{{ old('cpf', auth()->user()->cpf) }}
                            </div>
                            <div class="h5 font-weight-300">
                                <i class="ni location_pin mr-2">
                                Email:
                                </i>{{ old('email', auth()->user()->email) }}
                            </div>
                            
                            <div class="h5 mt-4">
                                <i class="ni business_briefcase-24 mr-2"></i>                            </div>
                            <div>
                                <i class="ni education_hat mr-2"></i>{{ __('Faculdade de Educação, Ciências e Letras de Paraíso') }}
                            </div>
                            <hr class="my-4" />
                            <p></p>
                            <a href="#"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <h3 class="col-12 mb-0">{{ __('Meu perfil') }}</h3>
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

                            
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Nome') }}</label>
                                  <label type="text" name="name" id="input-name" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('name', auth()->user()->name) }}" required autofocus>
                                    <label for="nome">{{ old('name', auth()->user()->name) }}</label>
                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                             
                                {{ $errors->first('cpf') }}
                                <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-email">{{ __('Email') }}</label>
                                    <label type="email" name="email" id="input-email" class="form-control form-control-alternative{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}" value="{{ old('email', auth()->user()->email) }}" required>
<label for="email">{{ old('email', auth()->user()->email) }} </label>
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="text-center">
                                <a href="{{ route('profile.edit') }}">
                                    <button type="submit" href="" class="btn btn-success mt-4">{{ __('Alterar') }}</button>
                                    </a>
                                </div>
                            </div>
                        <hr class="my-4" />
                       
                    </div>
                </div>
            </div>
        </div>
        
        @include('layouts.footers.auth')
    </div>
@endsection