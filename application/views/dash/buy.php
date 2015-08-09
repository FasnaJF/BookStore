<div class="panel panel-login overlay" style="display: none;">
    <div class="login-wrapper">
        <div class="login-content" id="loginTarget">
            <a class="close">x</a>
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-6">
                        <a href="#" class="active" id="login-form-link">Check Out</a>
                    </div>
                </div>
                <hr>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <form id="login-form" action="<?php echo base_url('Admin/buyBook'); ?>" method="post" role="form" style="display: block;">
                            <input type="hidden" id="bookID" class="bookID" value="" name="bookID">

                            <div class="form-group text-center">
                                <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                                <label for="remember"> Yes, I'm buying this book</label>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-6 col-sm-offset-3">
                                        <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Buy Now">
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
