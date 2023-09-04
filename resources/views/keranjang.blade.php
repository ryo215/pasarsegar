@extends('layout')
@section('container')
<div class="container py-5">
    <div class="row">
      <div class="text-center py-3 mb-5 title">
      <h1 >Keranjang</h1>
    </div>
        <div class="col-lg-8">
         
        <div class="shadow">
          <table class="table table-bordered">
            <thead class="bg-success text-light text-center">
              <tr>
                <th scope="col"><input type="checkbox" name="" id=""></th>
                <th scope="col">Gambar</th>
                <th scope="col">Produk</th>
                
                <th scope="col">jumlah</th>
                <th scope="col">Harga</th>
              </tr>
            </thead>
            <tbody class="text-center">
              <tr>
                <th scope="row"><input type="checkbox" name="" id=""></th>
                <td><img src="img/k1.png" style="max-width: 100px"></td>
                <td>Otto</td>
                <td>
                  <input type="number" value="4" style="width: 4ch;">
                </td>
                <td>Rp. 100.000</td>
              </tr>
              <tr>
                <th scope="row"><input type="checkbox" name="" id=""></th>
                <td><img src="img/k2.png" style="max-width: 100px"></td>
                <td>Otto</td>
                <td><input type="number" value="4" style="width: 4ch;"></td>
                <td>Rp. 100.000</td>
              </tr>
              <tr>
                <th scope="row"><input type="checkbox" name="" id=""></th>
                <td><img src="img/k3.png" style="max-width: 100px"></td>
                <td>Otto</td>
                <td><input type="number" value="4" style="width: 4ch;"></td>
                <td>Rp. 100.000</td>
              </tr>
              <tr>
                <th scope="row"><input type="checkbox" name="" id=""></th>
                <td><img src="img/k4.png" style="max-width: 100px"></td>
                <td>Otto</td>
                <td><input type="number" value="4" style="width: 4ch;"></td>
                <td>Rp. 100.000</td>
              </tr>
              
            
            </tbody>
          </table>
</div>
</div>
<div class="col-lg-4">
  <div class="card border-2 shadow p-3">
    <h2 class="text-center">Chekout</h2>
    <hr>
    <div class="row">
      <div class="col-sm-6">
        <h5>Total Harga :</h5>
      </div>
      <div class="col-sm-6 text-end">
        <h5 class="text-danger">Rp. 2.000.000</h5>
      </div>
    </div>
    <div class="row mt-3">
      <div class="col-sm-12">
       <button class="btn btn-success btn-card"><h5>Beli (4)</h5></button>
    </div>
    
    

  </div>
</div>
    </div>
</div>
@endsection
