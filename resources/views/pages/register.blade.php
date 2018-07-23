@extends('layout.layout')
@section('content')
<style>
    .form-signin input[type=date], .form-signin select{
        margin-bottom: 10px
    }
</style>
<div class="card card-container" style="max-width: 500px;">
    @if($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $err)
                <li>{{$err}}</li>
            @endforeach
        </div>
    @endif
    <h2>Phòng Cổ sinh Địa tầng
        <br>
        Vui Lòng Đăng ký tài khoản
    </h2>
    <p id="profile-name" class="profile-name-card"></p>
    <form class="form-signin" method="post" action="{{route('register')}}">
        @csrf
        <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>

        <input type="email" name="email" class="form-control" placeholder="Email address" required>

        <input type="text" name="fullname" class="form-control" placeholder="Họ tên" required >
        <input type="date" name="birthdate" class="form-control" required >
        <select name="gender" class="form-control">
            <option>-----Chọn giới tính-----</option>
            <option value="nữ">Nữ</option>
            <option value="nam">Nam</option>
            <option value="khác">Khác</option>
        </select>
        <input type="text" name="address" class="form-control" placeholder="Địa chỉ" required >
        <input type="text" name="phone" class="form-control" placeholder="Điện thoại" required >
        <input type="password" name="password" class="form-control" placeholder="Mật khẩu" required>
        <input type="password" name="confirm_password" class="form-control" placeholder="Nhập lại mật khẩu" required>
        
        <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit" name="login">Cập nhật</button>
    </form><!-- /form -->
</div><!-- /card-container -->
@endsection