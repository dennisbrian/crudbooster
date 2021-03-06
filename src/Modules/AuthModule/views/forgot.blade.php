<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>{{cbTrans("page_title_forgot")}} : {{$appname}}</title>
    <meta name='generator' content='CRUDBooster.com'/>
    <meta name='robots' content='noindex,nofollow'/>
    <link rel="shortcut icon"
          href="{{ cbGetsetting('favicon')?asset(cbGetsetting('favicon')):cbAsset('logo_crudbooster.png') }}">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
{!! cbStyleSheet('adminlte/bootstrap/css/bootstrap.min.css') !!}
<!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet"
          type="text/css"/>
    <!-- Theme style -->
    {!! cbStyleSheet('adminlte/dist/css/AdminLTE.min.css') !!}

    @include('crudbooster::_IE9')
    {!! cbStyleSheet('css/main.css') !!}
    <style type="text/css">
        .login-page, .register-page {
            background: {{ cbGetsetting("login_background_color")?:'#dddddd'}} url('{{ cbGetsetting("login_background_image")?asset(cbGetsetting("login_background_image")):cbAsset('bg_blur3.jpg') }}');
            color: {{ cbGetsetting("login_font_color")?:'#ffffff' }}   !important;
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }

        .login-box-body {
            box-shadow: 0px 0px 50px rgba(0, 0, 0, 0.8);
            background: rgba(255, 255, 255, 0.9);
            color: {{ cbGetsetting("login_font_color")?:'#666666' }}   !important;
        }
    </style>
</head>
<body class="login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="{{url('/')}}">
            <img title='{!!($appname == 'CRUDBooster')?"<b>CRUD</b>Booster":$appname!!}'
                 src='{{ cbGetsetting("logo")?asset(cbGetsetting('logo')):cbAsset('logo_crudbooster.png') }}'
                 style='max-width: 100%;max-height:170px'/>
        </a>
    </div><!-- /.login-logo -->
    <div class="login-box-body">

        @if ( session('message') != '' )
            <div class='alert alert-warning'>
                {{ session('message') }}
            </div>
        @endif

        <p class="login-box-msg">{{cbTrans("forgot_message")}}</p>
        <form action="{{ route('postForgot') }}" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
            <div class="form-group has-feedback">
                <input type="email" class="form-control" name='email' required placeholder="Email Address"/>
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-8">
                    {{cbTrans("forgot_text_try_again")}} <a href='{{route("getLogin")}}'>{{cbTrans("click_here")}}</a>
                </div>
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">{{cbTrans("button_submit")}}</button>
                </div>
            </div>
        </form>

        <br/>
        <!--a href="#">I forgot my password</a-->

    </div><!-- /.login-box-body -->
</div><!-- /.login-box -->

<!-- jQuery 2.1.3 -->
{!! cbScript('adminlte/plugins/jQuery/jQuery-2.1.4.min.js') !!}
<!-- Bootstrap 3.3.2 JS -->
{!! cbScript('adminlte/bootstrap/js/bootstrap.min.js') !!}

</body>
</html>
