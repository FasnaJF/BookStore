<div class="panel panel-login overlay" style="display: none;">
    <div class="login-wrapper">
        <div class="login-content" id="loginTarget">
            <a class="close">x</a>
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-6">
                        <a href="#" class="active" id="login-form-link">Login</a>
                    </div>
                    <div class="col-xs-6">
                        <a href="#" id="register-form-link">Register</a>
                    </div>
                </div>
                <hr>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <form id="login-form" action="<?php echo base_url('Admin/authenticate'); ?>" method="post" role="form" style="display: block;">
                            <div class="form-group">
                                <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                            </div>
                            <div class="form-group text-center">
                                <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                                <label for="remember"> Remember Me</label>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-6 col-sm-offset-3">
                                        <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
                                    </div>
                                </div>
                            </div>
                        </form>
                        <form id="register-form" action="<?php echo(base_url('Admin/addUser')); ?> " method="post" role="form" style="display: none;">
                            <div class="form-group">
                                <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <input type="password" name="conf_password" id="conf_password" tabindex="2" class="form-control" placeholder="Confirm Password">
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-6 col-sm-offset-3">
                                        <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
