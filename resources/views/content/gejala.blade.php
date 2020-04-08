@extends('welcome')
@section('status3','colorlib-active')
@section('content')
<section bg-light >
    <div class="container ">
                <div class="row mt-5 mb-5">
                    <div class="col">
                        <h1 class="text-center">Kenali gejala</h1>
                    </div>
                </div>

                <div class="row mb-2">
                        <div class="col-sm-6 mb-2">
                            <div class="card">
                            <div class="card-body text-center">
                                <h5 class="card-title">Batuk</h5>
                                <img src="{{asset('assets/images/gejala1.png')}}">
                                <p class="card-text">Batuk adalah respon alami tubuh sebagai sistem pertahanan untuk mengeluarkan zat dan partikel dari dalam saluran pernapasan.</p>
                            </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Demam</h5>
                                     <img src="{{asset('assets/images/gejala3.png')}}">
                                    <p class="card-text">Kondisi meningkatnya suhu tubuh hingga lebih dari 38º C. Demam menandakan adanya penyakit atau kondisi lain di dalam tubuh.</p>
                                </div>
                            </div>
                        </div>
                        
                </div>

                <div class="row mb-5">
                        <div class="col-sm-6 mb-2">
                            <div class="card">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Sesak Nafas</h5>
                                     <img src="{{asset('assets/images/gejala2.png')}}">
                                    <p class="card-text">Sesak napas adalah kondisi ketika Anda kesulitan dalam bernapas atau tidak cukup mendapat asupan udara lantaran kurangnya pasokan udara yang masuk ke paru-paru</p>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Gangguan Pernafasan</h5>
                                     <img src="{{asset('assets/images/gejala4.png')}}">
                                    <p class="card-text">Ketika pernapasan bermasalah, tubuh akan mengalami kesulitan dalam memperoleh oksigen dan membuang zat limbah CO2.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <p><i>sumber : https://covid19.sulselprov.go.id/</i></p>
                        </div>
                </div>
               

        
    
@endsection