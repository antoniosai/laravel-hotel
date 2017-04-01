@extends('templates.frontend.layout')

@section('title')

@endsection

@section('content')
<?php $hotel = App\Hotel::all()->first(); ?>

<div class="bg"></div>
<div class="jumbotron">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="page-header">
                    <img src="{!! asset('../images/logo.png') !!}" class="img-rounded" style="height: 150px">
                </div>
            </div>
            <div class="col-lg-7">
                <div class="page-header">
                    <h2> Selamat Datang di {{ $hotel->name }}</h2>
                    <p> <h2> <small>{{ $hotel->description }} </small> </h2> </p>
                    <hr>
                    <form class="form-inline">
                        <div class="form-group">
                            <input type="number" class="form-control" id="dewasa" placeholder="Dewasa">
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" id="email" placeholder="Anak-anak">
                        </div>
                        <button type="submit" class="btn btn-default">Cari Kamar</button>
                        <div class="form-group">
                            <label>&nbsp;atau&nbsp;</label>
                            <a href="{{ route('get.room') }}" class="btn btn-success">Lihat Semua</a>                        
                        </div>
                    </form>
                    <div style="padding-top: 20px"></div>
                </div>
            </div>
            
        </div>
    </div>
</div>
<!-- End of JumboTron -->
@endsection