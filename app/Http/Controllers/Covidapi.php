<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Charts\CovidChart;

class Covidapi extends Controller
{
    function index()
    {
        $positif = Http::get('https://api.kawalcorona.com/positif')->json();
        $dead = Http::get('https://api.kawalcorona.com/meninggal')->json();
        $sembuh = Http::get('https://api.kawalcorona.com/sembuh')->json();
        $indonesia = Http::get('https://api.kawalcorona.com/indonesia')->json();
        $dunia = Http::get('https://api.kawalcorona.com/')->json();

        $suspect = collect(Http::get('https://api.kawalcorona.com/')->json()); 
        $suspectdata = $suspect->flatten(1);
        $label = $suspectdata->pluck('Country_Region');
        $data = $suspectdata->pluck('Confirmed');
        $chart = new CovidChart;
        $chart->labels($label);
        $chart->dataset('Kasus Positif di dunia','line',$data)
              ->color("rgb(255, 99, 132)")
              ->backgroundcolor("rgb(255, 99, 132)");

        return view('content.home',compact('dunia','positif','dead','sembuh','indonesia','chart'));
    }

    function prov()
    {
        $provinsi = Http::get('https://api.kawalcorona.com/indonesia/provinsi')->json();
        $suspect = collect(Http::get('https://api.kawalcorona.com/indonesia/provinsi')->json());  
        $indonesia = Http::get('https://api.kawalcorona.com/indonesia')->json();

        $suspectdata = $suspect->flatten(1);
        $label = $suspectdata->pluck('Provinsi');
        $data = $suspectdata->pluck('Kasus_Posi');
        $colors = $label->map(function($item){
                return '#' . substr(md5(mt_rand()),0,6);
        });

        $chart = new CovidChart;
        $chart->labels($label);
        $chart->dataset('Kasus Positif Provinsi','pie',$data)->backgroundColor($colors);

        return view('content.provinsi',compact('provinsi','indonesia','chart'));
    }

    function cegah()
    {
        return view('content.cegah');
    }

    function gejala()
    {
        return view('content.gejala');
    }

    function call()
    {
        return view('content.call');
    }

    function about()
    {
        return view('content.about');
    }

    function chart()
    {
        return view('content.chart');
    }




}
