@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        <h3>Selamat datang anda adalah {{ Auth::user()->role->role }}</h3>
                        <b>Menu yang dapat diakses :</b>
                        @if (Auth::user()->role_id == 2)
                            <a class="btn btn-primary" href="#" role="button">Halaman Mahasiswa</a>
                            <a class="btn btn-primary" href="#" role="button">Forecasting Pekerjaan</a>
                        @elseif (Auth::user()->role_id == 1)
                            <a class="btn btn-primary" href="#" role="button">Halaman Alumni</a>
                            <a class="btn btn-primary" href="#" role="button">Pendataan Alumni</a>
                        @else
                            <a class="btn btn-primary" href="#" role="button">Forecasting Pekerjaan</a>
                            <a class="btn btn-primary" href="#" role="button">Pendataan Alumni</a>
                            <a class="btn btn-primary" href="#" role="button">Lihat Alumni</a>
                            <a class="btn btn-primary" href="#" role="button">Lihat Mahasiswa</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
