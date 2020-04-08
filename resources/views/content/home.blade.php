@extends('welcome')
@section('status','colorlib-active')
@section('content')
                <section class="world bg-light p-3">
                    <div class="container bg-white shadow-sm bg-white rounded">
                        <div class="row mb-3">
                            <div class="col">
                                <h3>Cek Covid-19</h3>
                                <p><i class="fas fa-globe"></i> Update Penderita Covid Seluruh Dunia</p>
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
                                        <h5>{{$positif['name']}}</h5>
                                        <p>{{$positif['value']}}</p>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="col-6 col-md-4 text-center">
                                <figure class="figure">
                                    <!--168 180-->
                                    <div class="figure-img">
                                        <a href="" class="d-flex justify-content-center">
                                            <i class="fas fa-dizzy fa-7x" style="color:red;"></i>
                                        </a>
                                    </div>
                                    <figcaption class="figure-caption text-center">
                                        <h5>{{$dead['name']}}</h5>
                                        <p>{{$dead['value']}}</p>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="col-6 col-md-4 text-center">
                                <figure class="figure">
                                    <!--168 180-->
                                    <div class="figure-img">
                                        <a href="" class="d-flex justify-content-center">
                                            <i class="fas fa-smile-beam fa-7x" style="color:green;"></i>
                                        </a>
                                    </div>
                                    <figcaption class="figure-caption text-center">
                                        <h5>{{$sembuh['name']}}</h5>
                                        <p>{{$sembuh['value']}}</p>
                                    </figcaption>
                                </figure>
                            </div>
                          
                        </div>

                    </div>
                </section>


                <section class="indonesia bg-light p-5">
                    <div class="container bg-white shadow bg-white rounded">
                        <div class="row mb-3">
                            <div class="col">
                                <h3>Penderita Covid-19 Indonesia</h3>
                                <p><i class="fa fa-map-marker"></i> Indonesia</p>
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
    <h3>Sebaran covid-19 di Dunia</h3>
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

                <section class="bg-light">
                <div class="container text-dark">
                    <div class="col mb-2">
                        <div class="card shadow mb-5 bg-white rounded">
                            <div class="card-header">
                                <p>Kasus Coronavirus Global</p>
                            </div>
                             <div class="card-body">
                                <div class="table-responsive">  
                                    <table class="table table-striped table-hover table-sm table-bordered ">
                                        <thead>
                                        <tr>
                                                <th>No</th>
                                                <th>Nama Negara</th>
                                                <th>Positif</th>
                                                <th>Meninggal</th>
                                                <th>Sembuh</th>
                                                <th>Aktif</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no = 0;?>
                                        @foreach($dunia as $item)
                                        <?php $no++ ;?>
                                            <tr>
                                                <td>{{$no}}</td>
                                                <td>{{$item['attributes']['Country_Region']}}</td>
                                                <td>{{$item['attributes']['Confirmed']}}</td>
                                                <td>{{$item['attributes']['Deaths']}}</td>
                                                <td>{{$item['attributes']['Recovered']}}</td>
                                                <td>{{$item['attributes']['Active']}}</td>
                                            </tr>
                                        @endforeach  
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                </div>
@endsection