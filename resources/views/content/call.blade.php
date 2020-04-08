@extends('welcome')
@section('status4','colorlib-active')
@section('content')
<section bg-light >
    <div class="container">
        <div class="row">
            <div class="col mt-3">
                <h1 class="text-center">Call Center</h1>
            </div>
        </div>
        <!--baris pertama -->
        <div class="row text-dark">
        <div class="col-sm-3 mt-2 mb-2">
                <div class="card shadow mb-5 bg-white rounded">
                    <div class="card-body text-center">
                        <h5 class="card-title">Kemenkes</h5>
                         <img src="{{asset('assets/images/menkes.png')}}" width="60px" height="54px"><br>
                        <h4 class="text-dark mt-3"><i class="fas fa-phone"></i> 0215210411</h4>
                    </div>
                </div>
            </div>
        
            <div class="col-sm-3 mt-2 mb-2">
                <div class="card shadow mb-5 bg-white rounded">
                    <div class="card-body text-center">
                       <h6 class="card-title">Pemprov DKI Jakarta</h6>
                       <img src="{{asset('assets/images/dki.png')}}"><br>
                       <h4 class="text-dark mt-3"><i class="fas fa-phone"></i> 112</h4>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 mt-2 mb-2">
                <div class="card shadow mb-5 bg-white rounded">
                    <div class="card-body text-center">
                        <h5 class="card-title">Pemrov Jabar</h5>
                        <img src="{{asset('assets/images/jabar.png')}}" width="60px" height="54px"><br>
                        <h4 class="text-dark mt-3"><i class="fas fa-phone"></i> 119</h4>
                        
                    </div>
                </div>
            </div>
            
            <div class="col-sm-3 mt-2 mb-2">
                <div class="card shadow mb-5 bg-white rounded">
                    <div class="card-body text-center">
                        <h5 class="card-title">Pemrov Jateng</h5>
                        <img src="{{asset('assets/images/jateng.png')}}" width="60px" height="54px"><br>
                        <h4 class="text-dark mt-3"><i class="fas fa-phone"></i> 0243580713</h4>
                    </div>
                </div>
            </div>
        </div>
        <!--akhir baris pertama -->

        <!--baris kedua -->
          <div class="row mb-2">
            <div class="col-sm-3  mb-2">
                <div class="card shadow mb-5 bg-white rounded">
                    <div class="card-body text-center">
                        <h5 class="card-title">Pemrov Jatim</h5>
                        <img src="{{asset('assets/images/jatim.png')}}" width="60px" height="54px"><br><br>
                        <h4 class="text-dark mt-3"><i class="fas fa-phone"></i> 0318430313</h4>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 mb-2">
                <div class="card shadow mb-5 bg-white rounded">
                    <div class="card-body text-center">
                        <h5 class="card-title">Pemprov D.I Yogyakarta</h5>
                        <img src="{{asset('assets/images/yogyakarta.jpg')}}" width="60px" height="54px"><br>
                        <h4 class="text-dark mt-3"><i class="fas fa-phone"></i> 0274555585</h4>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 mb-2">
                <div class="card shadow mb-5 bg-white rounded">
                    <div class="card-body text-center">
                        <h5 class="card-title">Pemrov Sulsel</h5>
                        <img src="{{asset('assets/images/sulsel.png')}}" width="60px" height="60px"><br><br>
                        <h4 class="text-dark mt-3"><i class="fas fa-phone"></i> 082 154 021 119</h4>
                    </div>
                </div>
            </div>
            <div class="col-sm-3  mb-2">
                <div class="card shadow mb-5 bg-white rounded">
                    <div class="card-body text-center">
                        <h5 class="card-title">Pemrov Bali</h5>
                        <img src="{{asset('assets/images/sulsel.png')}}" width="60px" height="60px"><br><br>
                        <h4 class="text-dark mt-3"><i class="fas fa-phone"></i> 0361251177</h4>
                    </div>
                </div>
            </div>
          </div>
        <!--akhir baris kedua -->
@endsection