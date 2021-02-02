@extends('master')
@section("content")
<div class="custom-product">
<div class="col-sm-4">
  <div class="trending-wrapper">
  <h4>ผลการค้นหาสำหรับ</h4>
   @foreach ($product as $item)
        <div class="row searched-item cart-list-devider">
            <div class="col-sm-5">
                <a href="detail/{{$item->id}}">
                    <img class="trending-image" src="{{$item->gallery}}">
                 </a> 
            </div>
            <div class="col-sm-4">
                    <div class="">
                        <h3>{{$item->name}}</h3>
                        <h5>{{$item->description}}</h5>
                        <h5>{{$item->price}} บาท</h5>
                 </div>
            </div>
            <div class="col-sm-3">
            <button class="btn btn-warning">Remove to Cart</button>
            </div>
         </div>
         @endforeach
        </div>
     </div>
</div>
@endsection