@extends('master')
@section("content")
<div class="custom-product">
    <div class="col-sm-10">
        <table class="table">
            <tbody>
              <tr>
                <td>Amount</td>
                <td>$ {{$total}}</td>
              </tr>
              <tr>
                <td>Tax</td>
                <td>$ 0</td>
              </tr>
              <tr>
                <td>Delivery</td>
                <td>$ 10</td>
              </tr>
              <tr>
                <td>Total Amount</td>
                <td>$ {{$total +10}}</td>
              </tr>
            </tbody>
          </table>
          <div>
            <form action="/orderplace" method="POST" >
                @csrf
                <div class="form-group">
                  <textarea name="address" placeholder="enter you address" class="form-control" ></textarea>
                </div>
                <div class="form-group">
                  <label for="pwd">เลือกการชำระ</label> <br> <br>
                  <input type="radio" value="โอนผ่านธนาคาร" name="payment"> <span>โอนผ่านธนาคาร</span> <br> <br>
                  <input type="radio" value="Paypal" name="payment"> <span>Paypal</span> <br> <br>
                  <input type="radio" value="เก็บเงินปลายทาง" name="payment"> <span>เก็บเงินปลายทาง</span> <br> <br>
                </div>
                <button type="submit" class="btn btn-default">สั่งซื้อ</button>
              </form>
          </div>
     </div>
</div>
@endsection