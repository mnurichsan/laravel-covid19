@extends('welcome')
@section('status1','colorlib-active')
@section('content')

<section class="indonesia bg-light p-2">
                    <div class="container bg-white shadow-sm bg-white rounded">
                        <div class="row mb-3">
                            <div class="col">
                                <h3>Penderita Covid-19 Indonesia</h3>
                                <p><i class="fa fa-map-marker"></i> Indonesia</p>
                                <p>Terakhir Update {{now()}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 col-md-4 text-center">
                                <figure class="figure">
                                    <!--168 180-->
                                    <div class="figure-img">
                                        
                                        <a href="" class="d-flex justify-content-center">
                                             <i class="fas fa-sad-tear fa-7x" style="color:black;"></i>
                                        </a>
                                    </div>
                                    <figcaption class="figure-caption text-center">
                                        <h5>Total positif</h5>
                                        <p>{{$indonesia[0]['positif']}}</p>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="col-6 col-md-4  text-center">
                                <figure class="figure">
                                    <!--168 180-->
                                    <div class="figure-img">
                                       
                                        <a href="" class="d-flex justify-content-center">
                                            <i class="fas fa-dizzy fa-7x" style="color:red;"></i>
                                        </a>
                                    </div>
                                    <figcaption class="figure-caption text-center">
                                        <h5>Total Meninggal</h5>
                                        <p>{{$indonesia[0]['meninggal']}}</p>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="col-6 col-md-4  text-center">
                                <figure class="figure">
                                    <!--168 180-->
                                    <div class="figure-img">
                                        <a href="" class="d-flex justify-content-center">
                                            <i class="fas fa-smile-beam fa-7x" style="color:green;"></i>
                                        </a>
                                    </div>
                                    <figcaption class="figure-caption text-center">
                                        <h5>Total Sembuh</h5>
                                        <p>{{$indonesia[0]['sembuh']}}</p>
                                    </figcaption>
                                </figure>
                            </div>
                          
                        </div>

                    </div>
</section>
<section class="indonesia bg-light p-4">
<div class="container shadow-sm bg-white rounded">
    <h3>Sebaran covid-19 di Indonesia</h3>
    <div class="row">
        <div class="col-12">
            <div class="card rounded">
                <div class="card-body py-4 px-4 mb-2">
                    {!! $chart->container() !!}
                </div>
                {!! $chart->script() !!}
            </div><br>
        </div>
    </div>
</div>
</section>


<section class="bg-light p-2">
 <div class="container text-dark">
                    <div class="col mb-3">
                        <div class="card mt-2 shadow mb-5 bg-white rounded">
                            <div class="card-header">
                                <p>Kasus Coronavirus Provinsi Indonesia</p>
                            </div>
                             <div class="card-body">
                             <!--<input class="form-control mb-3" id="myInput" type="text" placeholder="Search..">-->
                                <div class="table-responsive">  
                                    <table class="table table-striped table-hover table-sm table-bordered ">
                                        <thead>
                                        <tr>
                                                <th>No</th>
                                                <th>Nama Provinsi</th>
                                                <th>Positif</th>
                                                <th>Meninggal</th>
                                                <th>Sembuh</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no = 0;?>
                                        @foreach($provinsi as $item)
                                        <?php $no++ ;?>
                                            <tr>
                                                <td>{{$no}}</td>
                                                <td>{{$item['attributes']['Provinsi']}}</td>
                                                <td>{{$item['attributes']['Kasus_Posi']}}</td>
                                                <td>{{$item['attributes']['Kasus_Meni']}}</td>
                                                <td>{{$item['attributes']['Kasus_Semb']}}</td>
                                            </tr>
                                        @endforeach  
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                </div>
@endsection