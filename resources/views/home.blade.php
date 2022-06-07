@extends('layouts.rentcar')
@section('title','Home')
@section('content')
<!-- Banners -->
<section id="banner" class="banner-section">
  <div class="container">
    <div class="div_zindex">
      <div class="row">
        <div class="col-md-5 col-md-push-7">
          <div class="banner_content">
            <h1>Rental simpel dengan Ngerental.</h1>
            <p>Pemesanan mudah, harga murah. </p>
            <a href="#" class="btn">Read More <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a> </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /Banners --> 
<!-- Resent Cat-->
<section class="section-padding gray-bg">
  <div class="container">
    <div class="section-header text-center">
      <h2>Pilih Mobil terbaik <span>untuk menemani liburanmu</span></h2>
      <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
    </div>
    <div class="row"> 
      
      <!-- Nav tabs -->
      <div class="recent-tab">
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="#resentnewcar" role="tab" data-toggle="tab">New Car</a></li>
        </ul>
      </div>
      <!-- Recently Listed New Cars -->
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="resentnewcar">


         
<!-- <div class="col-list-3">
<div class="recent-car-list">
<div class="car-info-box"> <a href=" "><img src="admin/img/vehicleimages/knowledge_base_bg.jpg" class="img-responsive" alt="image"></a>
<ul>
<li><i class="fa fa-car" aria-hidden="true"></i>Petrol</li>
<li><i class="fa fa-calendar" aria-hidden="true"></i>3453 Model</li>
<li><i class="fa fa-user" aria-hidden="true"></i>7 seats</li>
</ul>
</div>
<div class="car-title-m">
<h6><a href=" ">BMW , ytb rvtr</a></h6>
<span class="price">$345345 /Day</span> 
</div>
<div class="inventory_info_m">
<p>vtretrvet</p>
</div>
</div>
</div>




<div class="col-list-3">
<div class="recent-car-list">
<div class="car-info-box"> <a href=""><img src="admin/img/vehicleimages/knowledge_base_bg.jpg" class="img-responsive" alt="image"></a>
<ul>
<li><i class="fa fa-car" aria-hidden="true"></i>Petrol</li>
<li><i class="fa fa-calendar" aria-hidden="true"></i>3453 Model</li>
<li><i class="fa fa-user" aria-hidden="true"></i>7 seats</li>
</ul>
</div>
<div class="car-title-m">
<h6><a href="">BMW , ytb rvtr</a></h6>
<span class="price">$345345 /Day</span> 
</div>
<div class="inventory_info_m">
<p>vtretrvet</p>
</div>
</div>
</div>



<div class="col-list-3">
<div class="recent-car-list">
<div class="car-info-box"> <a href=""><img src="admin/img/vehicleimages/knowledge_base_bg.jpg" class="img-responsive" alt="image"></a>
<ul>
<li><i class="fa fa-car" aria-hidden="true"></i>Petrol</li>
<li><i class="fa fa-calendar" aria-hidden="true"></i>3453 Model</li>
<li><i class="fa fa-user" aria-hidden="true"></i>7 seats</li>
</ul>
</div>
<div class="car-title-m">
<h6><a href="">BMW , ytb rvtr</a></h6>
<span class="price">$345345 /Day</span> 
</div>
<div class="inventory_info_m">
<p>vtretrvet</p>
</div>
</div>
</div>




<div class="col-list-3">
<div class="recent-car-list">
<div class="car-info-box"> <a href=" "><img src="admin/img/vehicleimages/knowledge_base_bg.jpg" class="img-responsive" alt="image"></a>
<ul>
<li><i class="fa fa-car" aria-hidden="true"></i>Petrol</li>
<li><i class="fa fa-calendar" aria-hidden="true"></i>3453 Model</li>
<li><i class="fa fa-user" aria-hidden="true"></i>7 seats</li>
</ul>
</div>
<div class="car-title-m">
<h6><a href=" ">BMW , ytb rvtr</a></h6>
<span class="price">$345345 /Day</span> 
</div>
<div class="inventory_info_m">
<p>vtretrvet</p>
</div>
</div>
</div> -->
@forelse ($CarDetail as $key=>$data)
        <div class="product-listing-m ">
          <div class="product-listing-img"><img  src="uploads/{{$data->carpic}} " class="img-responsive" alt="Image" /> </a> 
          </div>
          <div class="product-listing-content">
            <h5><a href="  cardetail/{{$data->id}} ">{{$data->carname}} </a></h5>
            <p class="list-price">Price Per Day:Rp {{$data->carprice}} </p>
            <ul>
              <li><i class="fa fa-user" aria-hidden="true"></i> {{$data->carseats}} seats</li>
              <li><i class="fa fa-calendar" aria-hidden="true"></i> {{$data->carmodel}} model</li>
              <li><i class="fa fa-car" aria-hidden="true">{{$data->posttype}} </i></li>
            </ul>
            <p class="list-city">City: {{$data->location}} </p>

            <a href="cardetail/{{$data->id}} " class="btn">View Details <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a>
          </div>
        </div>

        @empty
            no data found
        @endforelse

         </div>


  

       
      </div>
    </div>
  </div>
</section>
<!-- /Resent Cat --> 
<!-- Fun Facts-->
<section class="fun-facts-section">
  <div class="container div_zindex">
    <div class="row">
      <div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="fun-facts-m">
          <div class="cell">
            <h2><i class="fa fa-calendar" aria-hidden="true"></i>2</h2>
            <p>Tahun sejak berdiri</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="fun-facts-m">
          <div class="cell">
            <h2><i class="fa fa-car" aria-hidden="true"></i>20+</h2>
            <p>penyewa mobil</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="fun-facts-m">
          <div class="cell">
            <h2><i class="fa fa-car" aria-hidden="true"></i>20+</h2>
            <p>pelanggan per hari</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="fun-facts-m">
          <div class="cell">
            <h2><i class="fa fa-user-circle-o" aria-hidden="true"></i>200+</h2>
            <p>pelanggan puas</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Fun Facts--> 


@endsection





