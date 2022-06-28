<?= $this->extend('layouts/template'); ?>
<?= $this->section('content'); ?>
<div class="col-sm-12">
    <ol class="breadcrumb" ">
    <li>
        <i class=" clip-home"></i>
        <a href="/" style="color: white;"> &nbsp;Home </a>
        </li>
        <li>
            <a href="/urmeet" style="color: white;">Rapat Anda </a>
        </li>
        <li>
            <a href="#" style="color: white;">Buat Rapat </a>
        </li>
    </ol>
</div>
<div class=" blog-card__squareblue"></div>
<div class="blog-card__squaregreen"></div>
<div class="row">
    <div class="col-md-12" style="margin-top: 10px;">
        <!-- start: FORM VALIDATION 1 PANEL -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-external-link-square"></i>
                Form Tambah Rapat
                <div class="panel-tools">
                    <a class="btn btn-xs btn-link panel-collapse collapses" href="#">
                    </a>
                    <a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal">
                        <i class="fa fa-wrench"></i>
                    </a>
                    <a class="btn btn-xs btn-link panel-refresh" href="#">
                        <i class="fa fa-refresh"></i>
                    </a>
                    <a class="btn btn-xs btn-link panel-expand" href="#">
                        <i class="fa fa-resize-full"></i>
                    </a>
                    <a class="btn btn-xs btn-link panel-close" href="#">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
            </div>
            <div class="panel-body">
                <h2><i class="fa fa-pencil-square teal"></i> REGISTER</h2>
                <p>
                    Create one account to manage everything you do with ClipOne, from your shopping preferences to your ClipOne activity.
                </p>
                <hr>
                <form action="#" role="form" id="form">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="errorHandler alert alert-danger no-display">
                                <i class="fa fa-times-sign"></i> You have some form errors. Please check below.
                            </div>
                            <div class="successHandler alert alert-success no-display">
                                <i class="fa fa-ok"></i> Your form validation is successful!
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">
                                    First Name <span class="symbol required"></span>
                                </label>
                                <input type="text" placeholder="Insert your First Name" class="form-control" id="firstname" name="firstname">
                            </div>
                            <div class="form-group">
                                <label class="control-label">
                                    Last Name <span class="symbol required"></span>
                                </label>
                                <input type="text" placeholder="Insert your Last Name" class="form-control" id="lastname" name="lastname">
                            </div>
                            <div class="form-group">
                                <label class="control-label">
                                    Email Address <span class="symbol required"></span>
                                </label>
                                <input type="email" placeholder="Text Field" class="form-control" id="email" name="email">
                            </div>
                            <div class="form-group">
                                <label class="control-label">
                                    Password <span class="symbol required"></span>
                                </label>
                                <input type="password" class="form-control" name="password" id="password">
                            </div>
                            <div class="form-group">
                                <label class="control-label">
                                    Confirm Password <span class="symbol required"></span>
                                </label>
                                <input type="password" class="form-control" id="password_again" name="password_again">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group connected-group">
                                <label class="control-label">
                                    Date of Birth <span class="symbol required"></span>
                                </label>
                                <div class="row">
                                    <div class="col-md-3">
                                        <select name="dd" id="dd" class="form-control">
                                            <option value="">DD</option>
                                            <option value="01">1</option>
                                            <option value="02">2</option>
                                            <option value="03">3</option>
                                            <option value="04">4</option>
                                            <option value="05">5</option>
                                            <option value="06">6</option>
                                            <option value="07">7</option>
                                            <option value="08">8</option>
                                            <option value="09">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                            <option value="14">14</option>
                                            <option value="15">15</option>
                                            <option value="16">16</option>
                                            <option value="17">17</option>
                                            <option value="18">18</option>
                                            <option value="19">19</option>
                                            <option value="20">20</option>
                                            <option value="21">21</option>
                                            <option value="22">22</option>
                                            <option value="23">23</option>
                                            <option value="24">24</option>
                                            <option value="25">25</option>
                                            <option value="26">26</option>
                                            <option value="27">27</option>
                                            <option value="28">28</option>
                                            <option value="29">29</option>
                                            <option value="30">30</option>
                                            <option value="31">31</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <select name="mm" id="mm" class="form-control">
                                            <option value="">MM</option>
                                            <option value="01">1</option>
                                            <option value="02">2</option>
                                            <option value="03">3</option>
                                            <option value="04">4</option>
                                            <option value="05">5</option>
                                            <option value="06">6</option>
                                            <option value="07">7</option>
                                            <option value="08">8</option>
                                            <option value="09">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" placeholder="YYYY" id="yyyy" name="yyyy" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label">
                                    Gender <span class="symbol required"></span>
                                </label>
                                <div>
                                    <label class="radio-inline">
                                        <input type="radio" class="grey" value="" name="gender" id="gender_female">
                                        Female
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" class="grey" value="" name="gender" id="gender_male">
                                        Male
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">
                                            Zip Code <span class="symbol required"></span>
                                        </label>
                                        <input class="form-control" type="text" name="zipcode" id="zipcode">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label class="control-label">
                                            City <span class="symbol required"></span>
                                        </label>
                                        <input class="form-control tooltips" type="text" data-original-title="We'll display it when you write reviews" data-rel="tooltip" title="" data-placement="top" name="city" id="city">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <hr>
                                <label class="control-label">
                                    <strong>Signup for Clip-One Emails</strong> <span class="symbol required"></span>
                                </label>
                                <p>
                                    Would you like to review Clip-One emails?
                                </p>
                                <div>
                                    <label class="radio-inline">
                                        <input type="radio" class="grey" value="" name="newsletter">
                                        No
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" class="grey" value="" name="newsletter">
                                        Yes
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div>
                                <span class="symbol required"></span>Required Fields
                                <hr>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <p>
                                By clicking REGISTER, you are agreeing to the Policy and Terms &amp; Conditions.
                            </p>
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-yellow btn-block" type="submit">
                                Register <i class="fa fa-arrow-circle-right"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- end: FORM VALIDATION 1 PANEL -->
    </div>
</div>
<?= $this->endSection(); ?>