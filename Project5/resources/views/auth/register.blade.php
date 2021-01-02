@extends('layouts.app')

@section('content')

<html lang="en" class=" "><head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
	<title>Winku Social Network Toolkit</title>
    <link rel="icon" href="images/fav.png" type="image/png" sizes="16x16"> 
    
    <link rel="stylesheet" href="{{asset('theme/css/main.min.css')}}">
    <link rel="stylesheet" href="{{asset('theme/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('theme/css/color.css')}}">
    <link rel="stylesheet" href="{{asset('theme/css/responsive.css')}}">

</head>
<body>
<!--<div class="se-pre-con"></div>-->
<div class="theme-layout">
	<div class="container-fluid pdng0">
		<div class="row merged">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="land-featurearea" style="background-image:url('https://img.wallpapersafari.com/desktop/1280/1024/71/14/9eqRHs.jpg')">
					<div class="land-meta">
						
					
						<div class="friend-logo">
							<!-- <span><img src="C:\Users\PC\Desktop\new\game.png" alt=""></span> -->
						</div>
					
					</div>	
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="login-reg-bg show">
					<div class="log-reg-area reg">
						<h2 class="log-title">Register</h2>
							<p>
								Don’t use Gamerz Yet? <a href="homepage" title="">Take the tour</a> or <a href="#" title="">Join now</a>
							</p>
						<form method="post" action="{{ route('register') }}" enctype="multipart/form-data">
						@csrf
							<div class="form-group">	
							  <input type="text" required="required"  name="name"  class="form-control @error('name') is-invalid @enderror">
							  <label class="control-label" for="input">name</label><i class="mtrl-select"></i>
                              @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>
                            
                            <div class="form-group">	
							  <input type="text" required="required"  name="email" class="form-control @error('email') is-invalid @enderror">
							  <label class="control-label" for="input">Email</label><i class="mtrl-select"></i>
                              
							
                            
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            
							<div class="form-group">	
							  <input type="password" required="required" name="password"  class="form-control @error('password') is-invalid @enderror">
							  <label class="control-label" for="input">Password</label><i class="mtrl-select"></i>
                              @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>
                            
							<div class="form-group">	
							  <input type="password"  required="required" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror">
							  <label class="control-label" for="input">Repeat Password</label><i class="mtrl-select"></i>
                              @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            
                            
                            <div class="form-group">	
							  <input type="text" required="required" name="phone" class="form-control @error('phone') is-invalid @enderror">
							  <label class="control-label" for="input">Phone No.</label><i class="mtrl-select"></i>
                              @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>
                            

                            <div class="mb-3 form-group">
                            <label for="formFile" class="form-label" >Choose a Profile Picture</label>
                            <input  name="image" type="file" id="formFile" class="form-control @error('image') is-invalid @enderror">
                            @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            
							
							<div class="checkbox">
							  <label>
								<input type="checkbox" name="check"  checked="checked" class="form-control @error('check') is-invalid @enderror"><i class="check-box"></i>Accept Terms &amp; Conditions ?
							  </label>
                              @error('check')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>
                           
							<a href="login" title="" class=""><span style="color:blue">Already have an account</span></a>
							<div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
						</form>
                        
                        
					</div>
                    
				</div>
			</div>
		</div>
	</div>
</div>
	
	<script data-cfasync="false" src="{{asset('theme/../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"></script><script src="{{asset('theme/js/main.min.js')}}"></script>
	<script src="{{asset('theme/js/script.js')}}"></script>

	

<div class="strp-spinner-move" style="display: none;"><div class="strp-spinner" style="display: none;"><div class="strp-spinner-rotate" style="animation: 1s steps(80) 0s infinite normal none running strp-spinner-spin;"><div class="strp-spinner-frame" style="opacity: 0.01; transform: rotate(4.5deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.03; transform: rotate(9deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.04; transform: rotate(13.5deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.05; transform: rotate(18deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.06; transform: rotate(22.5deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.08; transform: rotate(27deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.09; transform: rotate(31.5deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.1; transform: rotate(36deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.11; transform: rotate(40.5deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.13; transform: rotate(45deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.14; transform: rotate(49.5deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.15; transform: rotate(54deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.16; transform: rotate(58.5deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.18; transform: rotate(63deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.19; transform: rotate(67.5deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.2; transform: rotate(72deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.21; transform: rotate(76.5deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.23; transform: rotate(81deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.24; transform: rotate(85.5deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.25; transform: rotate(90deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.26; transform: rotate(94.5deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.28; transform: rotate(99deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.29; transform: rotate(103.5deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.3; transform: rotate(108deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.31; transform: rotate(112.5deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.33; transform: rotate(117deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.34; transform: rotate(121.5deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.35; transform: rotate(126deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.36; transform: rotate(130.5deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.38; transform: rotate(135deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.39; transform: rotate(139.5deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.4; transform: rotate(144deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.41; transform: rotate(148.5deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.43; transform: rotate(153deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.44; transform: rotate(157.5deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.45; transform: rotate(162deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.46; transform: rotate(166.5deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.48; transform: rotate(171deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.49; transform: rotate(175.5deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.5; transform: rotate(180deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.51; transform: rotate(184.5deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.53; transform: rotate(189deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.54; transform: rotate(193.5deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.55; transform: rotate(198deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.56; transform: rotate(202.5deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.58; transform: rotate(207deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.59; transform: rotate(211.5deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.6; transform: rotate(216deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.61; transform: rotate(220.5deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.63; transform: rotate(225deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.64; transform: rotate(229.5deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.65; transform: rotate(234deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.66; transform: rotate(238.5deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.68; transform: rotate(243deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.69; transform: rotate(247.5deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.7; transform: rotate(252deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.71; transform: rotate(256.5deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.73; transform: rotate(261deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.74; transform: rotate(265.5deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.75; transform: rotate(270deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.76; transform: rotate(274.5deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.78; transform: rotate(279deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.79; transform: rotate(283.5deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.8; transform: rotate(288deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.81; transform: rotate(292.5deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.83; transform: rotate(297deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.84; transform: rotate(301.5deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.85; transform: rotate(306deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.86; transform: rotate(310.5deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.88; transform: rotate(315deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.89; transform: rotate(319.5deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.9; transform: rotate(324deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.91; transform: rotate(328.5deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.93; transform: rotate(333deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.94; transform: rotate(337.5deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.95; transform: rotate(342deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.96; transform: rotate(346.5deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.98; transform: rotate(351deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.99; transform: rotate(355.5deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 1; transform: rotate(360deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div></div></div></div><div class="strp-window strp-measured strp-window-skin-strip"><div class="strp-pages"></div><div class="strp-nav strp-nav-previous" style="display: none;"><div class="strp-nav-button" style="display: none;"><div class="strp-nav-button-background"></div><div class="strp-nav-button-icon"></div></div></div><div class="strp-nav strp-nav-next" style="display: none;"><div class="strp-nav-button" style="display: none;"><div class="strp-nav-button-background"></div><div class="strp-nav-button-icon"></div></div></div><div class="strp-close"><div class="strp-close-background"></div><div class="strp-close-icon"></div></div></div><div id="topcontrol" title="Scroll Back to Top" style="position: fixed; bottom: 10px; right: 5px; opacity: 0; cursor: pointer;"><i class="fa fa-angle-up"></i></div></body></html>

@endsection





<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
