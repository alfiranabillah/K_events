{{-- untuk ngasitau letak file tujuan --}}
@extends('layouts.auth')

{{-- untuk memanggil isi dari yeild  --}}
@section('content')
    
  <div class="container">
    <div class="back-link">
        <a href="#" class="back-link"> &lt; Back to Dashboard</a>
        <div class="logo">
            <img src="/frontend/images/image 102.png" width="40px" height="40px">
            <p> K-EVENTS </p>
        </div>
    </div>
    <div class="title"><b>Sign In</b>
    </div>
    <div class="direct">Enter your email and password to login
    </div>
    <div class="content">
      <form action="POST">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" required>
          </div>
          
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" required>
          </div>

        </div>

        <div class="btn-userlogin">      
          <div class="button">
            <input type="submit" value="Sign Up">
          </div>
          <div class="button">
            <a href="#">Create New Account </a>
          </div>

        </div>
      </form>
    </div>
  </div>

@endsection

