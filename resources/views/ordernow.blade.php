@extends('master')
@section('content')
<div class="contrainer custom-product">
    <div class="col-sm-10">
    <table class="table">
        <tbody>
          <tr>
            <td>ยอดรวมทั้งหมด</td>
            <td>{{$total}} บาท</td>
          </tr>
          <tr>
            <td>ภาษี (vat7%)</td>
            <td>0 บาท</td>
          </tr>
          <tr>
            <td>รวมค่าจัดส่งทั้งหมด</td>
            <td>{{$total+10}} บาท</td>
          </tr>
        </tbody>
      </table>
<div>
    <form action="/orderplace" method="POST">
        @csrf
        <div class="form-group">
            <textarea type="email" name="address" placeholder="enter your address" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="pwd">Payment Methode</label><br>
            <input type="radio" value="cash" name="payment"><span> Online payment</span><br><br>
            <input type="radio" value="cash" name="payment"><span> EMI payment</span><br><br>
            <input type="radio" value="cash" name="payment"><span> Payment on delivery</span><br><br>
        </div>
        <button type="submit" class="btn btn-default">Order Now</button>
    </form>
</div>
</div>
</div>
@endsection

