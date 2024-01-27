@extends('layouts.login')
@section('content')
<div class="hold-transition login-page">
    <div class="login-box">
    <div class="login-logo">
    <a href="../../index2.html">se connecter</a>
    </div>
    
    <div class="card ">
    <div class="card-body login-card-body">
    <p class="login-box-msg">Se connecter en tant que apprenant</p>
    <form action="" method="post">
    <div class="input-group mb-3">
    <input type="email" class="form-control" placeholder="Email">
    <div class="input-group-append">
    <div class="input-group-text">
    <span class="fas fa-envelope"></span>
    </div>
    </div>
    </div>
    <div class="input-group mb-3">
    <input type="password" class="form-control" placeholder="Password">
    <div class="input-group-append">
    <div class="input-group-text">
    <span class="fas fa-lock"></span>
    </div>
    </div>
    </div>
    <div class="row">
    <div class="col-8">
    <div class="icheck-primary">
    <input type="checkbox" id="remember">
    <label for="remember">
    Remember Me
    </label>
    </div>
    </div>
    
    <div class="col-4">
    <a href="{{ route('apprenant') }}" type="submit" class="btn btn-primary btn-block">Sign In</a>
    </div>
    
    </div>
    </form>
 
    
    <p class="mb-1">
    <a href="forgot-password.html">I forgot my password</a>
    </p>
    <p class="mb-0">
    <a href="register.html" class="text-center">Register a new membership</a>
    </p>
    </div>
    
    </div>
    </div>
    </div>
    @endsection
    