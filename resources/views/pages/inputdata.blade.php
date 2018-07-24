@extends('layout.layout')
@section('content')
<style>
    .form-signin input[type=date], .form-signin select{
        margin-bottom: 10px
    }
</style>
<div class="card card-container" style="max-width: 2000px;">
    @if($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $err)
                <li>{{$err}}</li>
            @endforeach
        </div>
    @endif
    <h2>Nhập thông tin giếng khoan</h2>

    <p id="profile-name" class="profile-name-card"></p>
        <form class="form-signin" method="post" action="{{route('register')}}">
            @csrf
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">Lô</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Block">
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">Tên giếng khoan</label>
                <input type="password" class="form-control" id="inputPassword4" placeholder="Name of Well">
              </div>
            </div>
            <div class="form-row col-md-6">
              <label for="inputAddress">Độ sâu đầu</label>
              <input type="text" class="form-control" id="inputAddress" placeholder="Top Interval">
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputCity">Độ sâu cuối</label>
                <input type="text" class="form-control" id="inputCity" placeholder="Base Interval">
              </div>
              <div class="form-group col-md-4">
                <label for="inputState">State</label>
                <select id="inputState" class="form-control">
                  <option selected>Choose...</option>
                  <option>...</option>
                </select>
              </div>
              <div class="form-group col-md-2">
                <label for="inputZip">Zip</label>
                <input type="text" class="form-control" id="inputZip">
              </div>
            </div>
            
            <button type="submit" class="btn btn-primary">Cập nhật thông tin</button>
        </form>
        
</div><!-- /card-container -->
@endsection