@extends('layouts.app', ['class' => 'bg-default'])
@section('judul','Sistem Informasi Akuntansi')

@section('content')
    <div class="header bg-gradient-light py-7 py-lg-8">
        <div class="container">
            <div class="header-body text-center mt-7 mb-7">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-6">
                        <h1 class="text-dark blue text-uppercase">{{ __('Selamat Datang Di Sistem Informasi Akuntansi') }}</h1>
                    </div>
                </div>
                <img src="https://1.bp.blogspot.com/-tThKR0i2DdQ/XrO4fFiulNI/AAAAAAAAB_s/4_UY2xeR3SsE9_5MGBdvsQtBJgNxf9e_wCLcBGAsYHQ/s1600/Logo%2BUndip%2BUniversitas%2BDiponegoro.png" alt="Image" margin="auto" height="200" width="200">
            </div>
        </div>
        <div class="separator separator-bottom separator-skew zindex-100">
            <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
    </div>

    <div class="container mt--10 pb-5"></div>

@endsection
