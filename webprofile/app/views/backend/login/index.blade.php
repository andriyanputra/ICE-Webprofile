<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>ProUI - Responsive Bootstrap Admin Template</title>

        <meta name="description" content="ProUI is a Responsive Bootstrap Admin Template created by pixelcave and published on Themeforest.">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">

        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="img/favicon.ico">
        <link rel="apple-touch-icon" href="img/icon57.png" sizes="57x57">
        <link rel="apple-touch-icon" href="img/icon72.png" sizes="72x72">
        <link rel="apple-touch-icon" href="img/icon76.png" sizes="76x76">
        <link rel="apple-touch-icon" href="img/icon114.png" sizes="114x114">
        <link rel="apple-touch-icon" href="img/icon120.png" sizes="120x120">
        <link rel="apple-touch-icon" href="img/icon144.png" sizes="144x144">
        <link rel="apple-touch-icon" href="img/icon152.png" sizes="152x152">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Bootstrap is included in its original form, unaltered -->
        {{HTML::style("front/css/bootstrap.min.css")}}

        <!-- Related styles of various icon packs and plugins -->
        {{HTML::style("admin/css/plugins.css")}}

        <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
        {{HTML::style("admin/css/main.css")}}

        <!-- Include a specific file here from css/themes/ folder to alter the default theme of the template -->

        <!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
        {{HTML::style("admin/css/themes.css")}}
        <!-- END Stylesheets -->

        <!-- Modernizr (browser feature detection library) & Respond.js (Enable responsive CSS code on browsers that don't support it, eg IE8) -->
        {{HTML::script("admin/js/vendor/modernizr-2.7.1-respond-1.4.2.min.js")}}
    </head>
    <body>
        <!-- Login Alternative Row -->
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-md-offset-1">
                    <div id="login-alt-container">
                        <!-- Title -->
                        <h1 class="push-top-bottom">
                            <i class="gi gi-flash"></i> <strong>ProUI</strong><br>
                            <small>Welcome to ProUI Admin Template!</small>
                        </h1>
                        <!-- END Title -->

                        <!-- Key Features -->
                        <ul class="fa-ul text-muted">
                            <li><i class="fa fa-check fa-li text-success"></i> Clean &amp; Modern Design</li>
                            <li><i class="fa fa-check fa-li text-success"></i> Fully Responsive &amp; Retina Ready</li>
                            <li><i class="fa fa-check fa-li text-success"></i> 10 Color Themes</li>
                            <li><i class="fa fa-check fa-li text-success"></i> PSD Files Included</li>
                            <li><i class="fa fa-check fa-li text-success"></i> Widgets Collection</li>
                            <li><i class="fa fa-check fa-li text-success"></i> Designed Pages Collection</li>
                            <li><i class="fa fa-check fa-li text-success"></i> .. and many more awesome features!</li>
                        </ul>
                        <!-- END Key Features -->

                        <!-- Footer -->
                        <footer class="text-muted push-top-bottom">
                            <small><span id="year-copy"></span> &copy; <a href="http://goo.gl/TDOSuC" target="_blank">ProUI 2.0</a></small>
                        </footer>
                        <!-- END Footer -->
                    </div>
                </div>
                <div class="col-md-5">
                    <!-- Login Container -->
                    <div id="login-container">
                        <!-- Login Title -->
                        <div class="login-title text-center">
                            <h1><strong>Login</strong> or <strong>Register</strong></h1>
                        </div>
                        <!-- END Login Title -->

                        <!-- Login Block -->
                        <div class="block push-bit">
                            @include('admin.layouts.messages')
                            <!-- Login Form -->
                            <form action="{{$actionUrl}}" method="post" id="form-login" class="form-horizontal">
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="gi gi-envelope"></i></span>
                                            <input type="text" name="email" id="login-email" name="login-email" class="form-control input-lg" placeholder="Email">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="gi gi-asterisk"></i></span>
                                            <input type="password" name="password" id="login-password" name="login-password" class="form-control input-lg" placeholder="Password">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group form-actions">
                                    <div class="col-xs-4">
                                        <label class="switch switch-primary" data-toggle="tooltip" title="Remember Me?">
                                            <input type="checkbox" id="login-remember-me" name="login-remember-me" checked>
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="col-xs-8 text-right">
                                        <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-angle-right"></i> Login to Dashboard</button>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12 text-center">
                                        <a href="javascript:void(0)" id="link-reminder-login"><small>Forgot password?</small></a> -
                                        <a href="javascript:void(0)" id="link-register-login"><small>Create a new account</small></a>
                                    </div>
                                </div>
                            </form>
                            <!-- END Login Form -->

                            <!-- Reminder Form -->
                            <form action="login_alt.html#reminder" method="post" id="form-reminder" class="form-horizontal display-none">
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="gi gi-envelope"></i></span>
                                            <input type="text" id="reminder-email" name="reminder-email" class="form-control input-lg" placeholder="Email">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group form-actions">
                                    <div class="col-xs-12 text-right">
                                        <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-angle-right"></i> Reset Password</button>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12 text-center">
                                        <small>Did you remember your password?</small> <a href="javascript:void(0)" id="link-reminder"><small>Login</small></a>
                                    </div>
                                </div>
                            </form>
                            <!-- END Reminder Form -->

                            <!-- Register Form -->
                            <form action="login_alt.html#register" method="post" id="form-register" class="form-horizontal display-none">
                                <div class="form-group">
                                    <div class="col-xs-6">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="gi gi-user"></i></span>
                                            <input type="text" id="register-firstname" name="register-firstname" class="form-control input-lg" placeholder="Firstname">
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        <input type="text" id="register-lastname" name="register-lastname" class="form-control input-lg" placeholder="Lastname">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="gi gi-envelope"></i></span>
                                            <input type="text" id="register-email" name="register-email" class="form-control input-lg" placeholder="Email">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="gi gi-asterisk"></i></span>
                                            <input type="password" id="register-password" name="register-password" class="form-control input-lg" placeholder="Password">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="gi gi-asterisk"></i></span>
                                            <input type="password" id="register-password-verify" name="register-password-verify" class="form-control input-lg" placeholder="Verify Password">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group form-actions">
                                    <div class="col-xs-6">
                                        <a href="#modal-terms" data-toggle="modal" class="register-terms">Terms</a>
                                        <label class="switch switch-primary" data-toggle="tooltip" title="Agree to the terms">
                                            <input type="checkbox" id="register-terms" name="register-terms">
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="col-xs-6 text-right">
                                        <button type="submit" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Register Account</button>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12 text-center">
                                        <small>Do you have an account?</small> <a href="javascript:void(0)" id="link-register"><small>Login</small></a>
                                    </div>
                                </div>
                            </form>
                            <!-- END Register Form -->
                        </div>
                        <!-- END Login Block -->
                    </div>
                    <!-- END Login Container -->
                </div>
            </div>
        </div>
        <!-- END Login Alternative Row -->

        <!-- Modal Terms -->
        <div id="modal-terms" class="modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Terms &amp; Conditions</h4>
                    </div>
                    <div class="modal-body">
                        <h4>Title</h4>
                        <p>Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <p>Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <h4>Title</h4>
                        <p>Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <p>Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <h4>Title</h4>
                        <p>Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <p>Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Modal Terms -->

        <!-- Include Jquery library from Google's CDN but if something goes wrong get Jquery from local file (Remove 'http:' if you have SSL) -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <!--<script>!window.jQuery && document.write(decodeURI('%3Cscript src"admin/js/vendor/jquery-1.11.0.min.js"%3E%3C/script%3E'));</script>-->
        {{HTML::script("admin/js/vendor/jquery-1.11.0.min.js")}}
        <!-- Bootstrap.js, Jquery plugins and Custom JS code -->
        {{HTML::script("admin/js/vendor/bootstrap.min.js")}}
        {{HTML::script("admin/js/plugins.js")}}
        {{HTML::script("admin/js/app.js")}}

        <!-- Load and execute javascript code used only in this page -->
        {{HTML::script("admin/js/pages/login.js")}}
        <script>$(function(){ Login.init(); });</script>
    </body>
</html>
