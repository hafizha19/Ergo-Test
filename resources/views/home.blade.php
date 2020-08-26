@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7">

            {{-- Carousel --}}
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="img-fluid rounded" src="{{ asset('images/1.jpg') }}" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="img-fluid rounded" src="{{ asset('images/2.jpg') }}" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="img-fluid rounded" src="{{ asset('images/1.jpg') }}" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="col-md-3 my-auto">
            <div class="row">
                <img class="img-fluid rounded" src="{{ asset('images/1.jpg') }}" alt="">
            </div>
            <div class="row">
                <img class="img-fluid rounded" src="{{ asset('images/2.jpg') }}" alt="">
            </div>
        </div>
    </div>

    <div class="row mt-3 justify-content-center text-center" id="category">
        <button class="btn btn-success ml-3 align-items-center"><i class="fa fa-globe"> All</i> </button>
        @for ($i = 0; $i <8; $i++) 
        @if ($i%3==0) 
        <button class="btn btn-primary ml-3 align-items-center"><i class="fas fa-ice-cream"> Beku</i> </button>
        @elseif ($i%2==0)
        <button class="btn btn-success ml-3 align-items-center"><i class="fas fa-utensils"> Food</i> </button>
        @else 
        <button class="btn btn-orange ml-3 align-items-center"><i class="fas fa-wine-glass-alt"> Drink</i> </button>
        @endif
        
        @endfor
    </div>
    
    <div class="row mt-3 justify-content-center" id="list">
        @for ($i = 0; $i < 15; $i++) 
        
        @if ($i%2==0) 
        <div class="card mx-2 my-2 border" style="width: 12rem;">
            <img class="card-img-top rounded" src="{{ asset('images/1.jpg')}}" alt="Card image cap">
            <button class="btn text-light" id="love"><i class="fa fa-heart"></i></button>
            <div class="card-body">
                <h5 class="card-title">Makanan</h5>
                <h6 class="card-subtitle mb-2 text-muted">1 kg/pack</h6>
                <p><strong style="color: orange">Rp. </strong>50k</p>
                <a href="#" class="btn btn-success btn-block">+</a>
            </div>
        </div>
        @else
        <div class="card mx-2 my-2 border" style="width: 12rem;">
            <img class="card-img-top rounded" src="{{ asset('images/2.jpg')}}" alt="Card image cap">
            <button class="btn" style="color: rgb(223, 119, 22)" id="love"><i class="fa fa-heart"></i></button>
            <div class="card-body">
                <h5 class="card-title">Makanan</h5>
                <h6 class="card-subtitle mb-2 text-muted">1 kg/pack</h6>
                <p><strong style="color: orange">Rp. </strong>50k</p>
                <a href="#" class="btn btn-success btn-block">+</a>
            </div>
        </div>
        @endif
    @endfor
    </div>

    <div class="row mt-3 justify-content-center">
        <div class="col-md-7">
            <button class="btn btn-block btn-light text-success border-success"><i class="fa fa-chevron-down"></i></button>
        </div>
    </div>
</div>

@endsection

@section('footer')
    @include('layouts.footer')
@endsection