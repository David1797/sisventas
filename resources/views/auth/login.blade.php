@extends('auth.contenido')

@section('login')

<div class="row">
      <div class=".col-md-6">
        <div class="card-group mb-0">
          <div class="card p-4" style="background:#a3cd46;">
          <form class="form-horizontal was-validated" method="POST" action="{{ route('login')}}">
          {{ csrf_field() }}
              <div class="card-body text-center">
              <img src="img/cn.png"  width="100%" alt="Comisariato Naturista" id="imagen">

              <h1>Inicio de sesión </h1>
              <p class="text-muted">Control de acceso al sistema</p>
              <div class="form-group mb-4{{$errors->has('usuario' ? 'is-invalid' : '')}}">
                <span class="input-group-addon"><i class="icon-user"></i></span>
                <input type="text" value="{{old('usuario')}}" name="usuario" id="usuario" class="form-control" placeholder="Usuario">
                {!!$errors->first('usuario','<span class="invalid-feedback">:message</span>')!!}
              </div>
              <div class="form-group mb-4{{$errors->has('password' ? 'is-invalid' : '')}}">
                <span class="input-group-addon"><i class="icon-lock"></i></span>
                <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                {!!$errors->first('password','<span class="invalid-feedback">:message</span>')!!}
              </div>
              <div class="row">
                <div class="col-5">
                  <button type="submit" class="btn btn-primary form-control ">Acceder</button>
                  
                </div>
              </div>
            </div>
          </form>
          </div>
        </div>
      </div>
  </div>
@endsection
