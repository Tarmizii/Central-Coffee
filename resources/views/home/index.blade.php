@extends('home.layout.main')
@section('container')

    <div class="content">
      <div id="header" class="d-flex align-items-center bg-light" style="height: 400px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex justify-content-center" style="flex-direction: column;">
                  <span>I'm here at</span>
                  <h3>Central Café </h3>
                  <p>Coffee & Eatery</p>
                  <a href="#" class="btn btn-dark btn-lg">order now</a>
                </div>
                <div class="col-md-6 text-center">
                    <img src="/img/heroes.png" alt="" style="width: 100%; height: 300px; object-fit: cover;background: #eaeaea">
                </div>
            </div>
        </div>
      </div>
    </div>

    <div class="about">
      <h3 class="sub-heading"> about us </h3>
      <h1 class="heading"> why choose us? </h1>

        <div id="header" class="d-flex align-items-center bg-light" style="height: 400px;">
          <div class="container">
              <div class="row">
                <div class="col-md-6 text-center">
                  <img src="/img/about.png" alt="" style="width: 100%; height: 300px; object-fit: cover;background: #eaeaea">
                </div>
                <div class="col-md-6 d-flex justify-content-center" style="flex-direction: column;">
                    <p>
                      Central Coffe adalah coffee shop yang bertemakan minimalis dan elegan.Tempat yang bersih dan nyaman adalah keunggulan kami.dengan tampilan yang menimalis, sangat cocok bagi anak muda untuk nongkrong di caffee kami.
                    </p>
                </div>
              </div>
          </div>
        </div>
    </div>

    <div id="products">
      <h3 class="sub-heading"> our menu </h3>
      <h1 class="heading">speciality menu </h1>
        <div class="album py-5 bg-light">
            <div class="container">
        
              <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <div class="col">
                  <div class="card shadow-sm">
                    <img src="img/menu1.png" alt="">
                    <div class="card-body">
                      <h4>Nasi Goreng Pattaya</h4>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <button type="button" class="btn  btn-dark">Add To Cart</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card shadow-sm">
                    <img src="img/menu2.png" alt="">
                    <div class="card-body">
                      <h4>Coffee Latte</h4>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <button type="button" class="btn  btn-dark">Add To Cart</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card shadow-sm">
                    <img src="img/menu3.png" alt="">
                    <div class="card-body">
                      <h4>Ice Chocolate</h4>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <button type="button" class="btn  btn-dark">Add To Cart</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
@endsection