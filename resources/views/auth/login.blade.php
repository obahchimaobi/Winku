<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>Winku Social Network</title>
    <link rel="icon" href="{{ asset('images/fav.png') }}" type="image/png" sizes="16x16">

    <link rel="stylesheet" href="{{ asset('css/main.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/color.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

</head>

<body>
    <!--<div class="se-pre-con"></div>-->
    <div class="theme-layout">
        <div class="container-fluid pdng0">
            <div class="row merged">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="land-featurearea">
                        <div class="land-meta">
                            <h1>Winku</h1>
                            <p>
                                Winku is free to use for as long as you want with two active projects.
                            </p>
                            <div class="friend-logo">
                                <span><img src="{{ url('images/wink.png') }}" alt=""></span>
                            </div>
                            <a href="{{ url('#') }}" title="" class="folow-me">Follow Us on</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="login-reg-bg">
                        <div class="log-reg-area sign">
                            <h2 class="log-title">Login</h2>
                            <p>
                                Don’t use Winku Yet? <a href="{{ url('#') }}" title="">Take the tour</a> or <a
                                    href="{{ url('#') }}" title="">Join now</a>
                            </p>
                            <form method="post">
                                <div class="form-group">
                                    <input type="text" id="input" required="required" />
                                    <label class="control-label" for="input">Username</label><i
                                        class="mtrl-select"></i>
                                </div>
                                <div class="form-group">
                                    <input type="password" required="required" />
                                    <label class="control-label" for="input">Password</label><i
                                        class="mtrl-select"></i>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" checked="checked" /><i class="check-box"></i>Always
                                        Remember Me.
                                    </label>
                                </div>
                                <a href="{{ url('#') }}" title="" class="forgot-pwd">Forgot Password?</a>
                                <div class="submit-btns">
                                    <button class="mtr-btn signin" type="button"><span>Login</span></button>
                                    <button class="mtr-btn signup" type="button"><span>Register</span></button>
                                </div>
                            </form>
                        </div>
                        <div class="log-reg-area reg">
                            <h2 class="log-title">Register</h2>
                            <p>
                                Don’t use Winku Yet? <a href="{{ url('#') }}" title="">Take the tour</a> or <a
                                    href="{{ url('#') }}" title="">Join now</a>
                            </p>
                            <form method="post">
                                <div class="form-group">
                                    <input type="text" required="required" />
                                    <label class="control-label" for="input">First & Last Name</label><i
                                        class="mtrl-select"></i>
                                </div>
                                <div class="form-group">
                                    <input type="text" required="required" />
                                    <label class="control-label" for="input">User Name</label><i
                                        class="mtrl-select"></i>
                                </div>
                                <div class="form-group">
                                    <input type="password" required="required" />
                                    <label class="control-label" for="input">Password</label><i
                                        class="mtrl-select"></i>
                                </div>
                                <div class="form-radio">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="radio" checked="checked" /><i
                                                class="check-box"></i>Male
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="radio" /><i class="check-box"></i>Female
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" required="required" />
                                    <label class="control-label" for="input"><a
                                            href="{{ url('https://wpkixx.com/cdn-cgi/l/email-protection') }}" class="__cf_email__"
                                            data-cfemail="6c29010d05002c">[email&#160;protected]</a></label><i
                                        class="mtrl-select"></i>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" checked="checked" /><i class="check-box"></i>Accept
                                        Terms & Conditions ?
                                    </label>
                                </div>
                                <a href="{{ url('#') }}" title="" class="already-have">Already have an account</a>
                                <div class="submit-btns">
                                    <button class="mtr-btn signup" type="button"><span>Register</span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script data-cfasync="false" src="{{ url('../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}"></script>
    <script src="{{ url('js/main.min.js') }}"></script>
    <script src="{{ url('js/script.js') }}"></script>

</body>

</html>
