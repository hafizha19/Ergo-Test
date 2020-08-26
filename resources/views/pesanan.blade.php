@extends('layouts.app')

@section('content')
<div class="container">
    <section id="address">
        <div class="row justify-content-center text-center  ">
            <div class="col-7">
                <p>Kirim ke alamat</p>
                <form action="" accept-charset="UTF-8" method="get">
                    <div class="input-group">
                        <textarea  rows="5" type="text" name="address" id="address"
                            placeholder="Gg AlMuslumin RT 11" class="form-control"></textarea>
                        <span class="input-group-btn">
                            <button type="submit" name="commit" value="Search"
                                class="btn btn-orange text-light ml-3" data-disable-with="Search"><i
                                    class="fas fa-map-marker-alt"></i></button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section id="pesanan">
        <div class="row justify-content-center">
            @for ($i = 0; $i < 5; $i++) <div class="col-md-4 card p-1 m-2 border">
                <div class="row p-1">
                    <div class="col-md-4 p-1 mx-2 my-auto">
                        <img class="img-fluid rounded" src="{{ asset('images/1.jpg')}}" alt="">
                    </div>
                    <div class="col-md-7 ml-1 my-auto">
                        <h6 class="row text-dark mb-auto">Makanan</h6>
                        <p class="row text-muted">1 kg/pack</p>
                        <div class="row mt-auto ">
                            <p class="mx-1 my-auto"><strong style="color: orange">Rp. </strong>50k</p>
                            <button class="btn btn-success ml-auto">+</button>
                            <p class="mx-1 my-auto"> 12 </p>
                            <button class="btn btn-success mx-1">-</button>
                        </div>
                    </div>
                </div>
        </div>
        @endfor
</div>
</section>

<section id="ringkasan">
    <div class="row justify-content-center">
        <h6>Ringkasan</h6>
    </div>
    <div class="row justify-content-center">
        <div class="col-sm-6">
            <div class="card border">
                <div class="card-body mx-2">
                    <div class="row p-3 card-title text-center justify-content-between">
                        <i class="fas fa-ticket-alt my-auto"></i>
                        <h5 class="my-auto"> Diskon 20% <i class="fas fa-check"></i></h5>
                    </div>
                    <div class="p-3">
                        @for ($i = 0; $i < 5; $i++)
                        <div class="row card-text justify-content-between ">
                            <p>Makanan {{ $i }} </p>
                            <span>Rp. <strong>50k</strong></span>
                        </div>
                        @endfor
                        <hr style="width: 90%">
                        <div class="row justify-content-between ">
                            <strong>Total Harga: </strong>
                            <span>Rp. <strong>999k</strong></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="payment">
    <div class="row justify-content-center">
        <h6>Metode Pembayaran</h6>
    </div>
    <div class="card rounded border">
        <div class="row p-4">
        @for ($i = 0; $i < 5; $i++)
            <div class="col-md-2">
                <button class="btn btn-light border"><img class="img-thumbnail my-auto border-0 rounded" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxIQEhEQERASEQ8XERYYFRISFRUSFRoYFhYWGBcSFxUYHSgjGB4pGxYTITIhJSkrLi4uGCAzODMsNygtLisBCgoKDg0OGRAQGisfICYyLi03LS4rLS83LysvLy0uNy0rLS0rLy0rLTcrKy0rLi8tKystLS01LS0rLS0tLS0tLf/AABEIAKgBLAMBIgACEQEDEQH/xAAcAAEAAgIDAQAAAAAAAAAAAAAABgcFCAEDBAL/xABHEAABAwICBwMJBAYIBwAAAAABAAIDBBEFIQYHEjFBYXETUYEUIiMyUnKCkaGSorHBM0JDYrPwFSQ0U2NzsuE1dIOTwtHS/8QAGgEBAAMBAQEAAAAAAAAAAAAAAAECBQQDBv/EACoRAQACAgEDAwMDBQAAAAAAAAABAgMRBCExURITQSJxkQVhgSNSocHh/9oADAMBAAIRAxEAPwC8UREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERARLrC4jpXQ05LZauFrxvYHbb/ssufopiJntAzSKIO1lYbf8AtD+vYT//AAvbRacYdNYNrIwTuEm1D/EAVpxXjvWfwaSJF8xvDgCCCDuINx819KgIi4c4DebdUHKLr7ZvtN+YTtm+035hB2Iuvtm+035hfTZAdxB6G6D6RFwSg5Rdfbt9pvzCds32m/MIOxF19s32m/MLsCAiIgIuuaZrAXPc1rRvc4hoHUlR+s08w2LJ1ZG4/wCGHzfWMFWrW1u0bEkRRBmsrDCbeUPHMwzW/wBCzOG6S0dSbQ1UT3extBr/ALDrH6KZx3jvEjLIiKgIiICIiAiIgIiICIiAsBpZpZBhzAZCXyuHmQt9Z3M+y3mfqcl2aXaQMw+ndO4Bz77MbL22nncOmRJ5ArX7Ea+SokfNM8vlebud+AA4AbgF18bje7O57JiGY0h0yq60kPlMcJ3QxEtZbudxf45cgo8Au6kpXzPbFEx0kjjZrGi5J/njuCsnAdU5IDqyctP91BY25OkcDc7tw8StG18WGNdlukKwRXozVlhoFjDIT3maW/0cB9FicX1TwOBNNPJE/g2T0jOl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BERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERB//2Q==" alt=""></button>
            </div>
        @endfor
        </div>
        <h6 class="text-center">Virtual Account</h6>
        <div class="row p-4">
        @for ($i = 0; $i < 5; $i++)
            <div class="col-md-2">
                <button class="btn btn-light border"><img class="img-fluid my-auto border-0 rounded" src="data:image/png;base64,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" alt=""></button>
            </div>
            @endfor
        </div>
    </div>
    <div class="row justify-content-center mt-5">
        <div class="col-md-5">

            <button class="btn btn-success btn-block text-light" style="box-shadow: 3px 3px 3px 3px rgb(168, 214, 168)"><strong>Checkout</strong> </button>
        </div>
    </div>
</section>

</div>
@endsection

@section('footer')
@include('layouts.footer')
@endsection