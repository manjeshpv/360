@extends('layout')

@section('content')

<section class="login">
  <div class="container">
    <div class="row">
      <div class="login-blox">
        <h3>Log in to SSIT Account</h3>
        <div class="text-center">
          <div class="login-social">
            <a href="{{route('auth.social.facebook')}}" class="facebook"><i class="fa fa-facebook"></i><span>Facebook</span></a>
            <a href="{{route('auth.social.google')}}" class="google"><span>Google Plus</span><i class="fa fa-google-plus"></i></a>
          </div>
        </div>
        @if (session('message'))
            <div class="alert alert-success text-center">
                {{ session('message') }}
            </div>
        @endif
        @if (session('error_message'))
            <div class="alert alert-danger text-center">
                {{ session('error_message') }}
            </div>
        @endif
        <div class="text-center">
            <br>
            <a href="mailto:wifi@ssit.edu.in">Not a member? Register</a>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
</section>

@endsection

@section('js_script')
<script src="{{asset('js/validate.min.js')}}"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $( "#form_login" ).validate({
      rules:
          {
              email: {required: true, email:true},
              password: {required: true},
          },
          messages: 
          {
              email: { required: "Enter email address", email: "Your email must be in the format of name@domain.com"},
              password: { required: "Enter your password"},
          },
    });
  });
</script>
@endsection
