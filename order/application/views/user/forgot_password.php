<div class="container">
<div class="row">
    <div class="col-md-8">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="<?php echo base_url('img/login-banner-en.png'); ?>" style="max-width: 100%;">
                </div>
                <div class="item">
                    <img src="<?php echo base_url('img/login-banner-bn.png'); ?>" style="max-width: 100%;">
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>


    </div>

    <div class="col-md-4">
        <div class="login-wrapper">
            <?php echo form_open('forgot_password_request'); ?>
            <table class="table">
                <caption style="font-size: 18px; margin-top: 0; padding-top: 0;">Password Recovery</caption>
                <?php if (isset($success)) { ?>
                    <ul>
                        <li>
                            <div class="alert alert-success alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                <strong>Well done!</strong> <?php echo $success; ?> </div>
                        </li>
                    </ul>
                <?php } ?>
                
                <?php if (isset($error)) { ?>
                    <ul>
                        <li>
                            <div class="alert alert-danger alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                <strong>Oh snap!</strong> <?php echo $error; ?> </div>
                        </li>
                    </ul>
                <?php } ?>
                <tbody>                
                    <tr>
                        <td><label>Your Email: </label><input type="text" name="userkey" autofocus="" placeholder="Enter registered email" required="" class="form-control" title="Enter your email address"></td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="2"><input type="submit" value="Change" class="btn btn-warning btn-block"></td>
                    </tr>
                </tfoot>
            </table>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>
</div>