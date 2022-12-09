@extends('layouts.app')
@section('content')
  <!-- Start Banner -->
  <div class="section inner_page_banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner_title">
                        <h3>Exchange</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->
    
    <!-- section -->
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="full text_align_right_img">
                        <img src="images/img1.png" alt="#" />
                    </div>
                </div>
                <div class="col-md-6 layout_padding">
                    <div class="full paddding_left_15">
                        <div class="heading_main text_align_left">
                           <h2><span class="theme_color">Exchange</span> your currency</h2>    
                        </div>
                    </div>
                    <div class="full paddding_left_15">
                    <div class="row">
        <div class="col-md-8 offset-md-2 mt-5 fancy-forms">
            <!-- <div class="cardbox"> -->
            <ul class="nav nav-tabs  mt-3" id="myTab" role="tablist">
                <li class="nav-item">
                <a class="nav-link active" id="login" data-toggle="tab" href="#login_form" role="tab" aria-controls="login" aria-selected="true">Buy Currency</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" id="signup" data-toggle="tab" href="#signup_form" role="tab" aria-controls="signup" aria-selected="false">Sell Currency</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="login_form" role="tabpanel" aria-labelledby="login">
                <div class="fancyformcontainer">
                    <form>
                    <div class="form-group mt-4">
                        <label for="email_id">City</label>
                        <select name="city" class="form-control" id="city">
                    <option selected="">City</option>
                    <option value="Ahemdabad">Ahemdabad</option>
                    <option value="Ambala">Ambala</option>
                    <option value="Amritsar">Amritsar</option>
                    <option value="Bangalore">Bangalore</option>
                    <option value="Bathinda">Bathinda</option>
                    <option value="Chandigarh">Chandigarh</option>
                    <option value="Chennai">Chennai</option>
                    <option value="Coimbatore">Coimbatore</option>
                    <option value="Delhi">Delhi</option>
                    <option value="Gurgaon">Gurgaon</option>
                    <option value="Hyderabad">Hyderabad</option>
                    <option value="Jaipur">Jaipur</option>
                    <option value="Jallandar">Jallandar</option>
                    <option value="Jodhpur">Jodhpur</option>
                    <option value="Kanpur">Kanpur</option>
                    <option value="Kolkata">Kolkata</option>
                    <option value="Lucknow">Lucknow</option>
                    <option value="Ludhiana">Ludhiana</option>
                    <option value="Mumbai">Mumbai (West)</option>
                    <option value="Mumbai">Mumbai (South)</option>
                    <option value="Noida">Noida</option>
                    <option value="Panchkula">Panchkula</option>
                    <option value="Patna">Patna</option>
                    <option value="Ranchi">Ranchi</option>
                    <option value="Surat">Surat</option>
                    <option value="Udaipur">Udaipur</option>
                </select>                    </div>
                <div class="form-group">
            <div class="currency">
                        <div class="row">
                            <div class="col-lg-6 pt-3 pt-lg-0">
                                <select name="input_currency_a" class="form-control" id="input_currency_a">
                                <option value="AED">AED</option>
                                        <option value="AUD">AUD</option>
                                        <option value="CAD">CAD</option>
                                        <option value="CHF">CHF</option>
                                        <option value="EUR">EUR(Euros)</option>
                                        <option value="GBP">GBP(Pound)</option>
                                        <option value="HKD">HKD</option>
                                        <option value="INR">INR</option>
                                        <option value="JPY">JPY</option>
                                        <option value="NZD">NZD</option>
                                        <option value="SAR">SAR</option>
                                        <option value="SEK">SEK</option>
                                        <option value="SGD">SGD</option>
                                        <option value="THB">THB</option>
                                        <option value="USD" selected="">USD(US Dollars)</option>
                                        <option value="ZAR">ZAR</option>
                                </select>
                            </div>
                            <div class="col-lg-6 pt-3 pt-lg-0">
                                <select name="output_currency_a" class="form-control" id="output_currency_a">
                                        <option value="AED">AED</option>
                                        <option value="AUD">AUD</option>
                                        <option value="CAD">CAD</option>
                                        <option value="CHF">CHF</option>
                                        <option value="EUR">EUR(Euros)</option>
                                        <option value="GBP">GBP(Pound)</option>
                                        <option value="HKD">HKD</option>
                                        <option value="INR" selected="">INR</option>
                                        <option value="JPY">JPY</option>
                                        <option value="NZD">NZD</option>
                                        <option value="SAR">SAR</option>
                                        <option value="SEK">SEK</option>
                                        <option value="SGD">SGD</option>
                                        <option value="THB">THB</option>
                                        <option value="USD">USD(US Dollars)</option>
                                        <option value="ZAR">ZAR</option>
                                </select>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="form-group mt-4">

            <div class="form-group">
                    <div class="currency">
                        <div class="row">
                            <div class="col-lg-6 pt-3 pt-lg-0">
                                <input type="number" class="form-group" name="" id="input_amount_a" value="1">
                            </div>
                            <div class="col-lg-6 pt-3 pt-lg-0">
                                <input type="text" class="form-group" name="" id="output_amount_a" placeholder="0">
                            </div>
                            <div class="col-12 pt-3 pt-lg-3">
                                <div class="result">
                                    <div class="rate" id="rate_a"></div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
          </div>
            <div class="form-group mt-4">

                        <button type="submit" class="btn formsubmitbtn btn-danger">Book This Order</button>
            </div>
                    </form>
                </div>
                </div>
                <div class="tab-pane fade" id="signup_form" role="tabpanel" aria-labelledby="signup">
                <div class="fancyformcontainer">
                    <form>
                    <div class="form-group mt-4">
                        <label for="email_id">City</label>
                        <select name="city" class="form-control" id="city">
                    <option selected="">City</option>
                    <option value="Ahemdabad">Ahemdabad</option>
                    <option value="Ambala">Ambala</option>
                    <option value="Amritsar">Amritsar</option>
                    <option value="Bangalore">Bangalore</option>
                    <option value="Bathinda">Bathinda</option>
                    <option value="Chandigarh">Chandigarh</option>
                    <option value="Chennai">Chennai</option>
                    <option value="Coimbatore">Coimbatore</option>
                    <option value="Delhi">Delhi</option>
                    <option value="Gurgaon">Gurgaon</option>
                    <option value="Hyderabad">Hyderabad</option>
                    <option value="Jaipur">Jaipur</option>
                    <option value="Jallandar">Jallandar</option>
                    <option value="Jodhpur">Jodhpur</option>
                    <option value="Kanpur">Kanpur</option>
                    <option value="Kolkata">Kolkata</option>
                    <option value="Lucknow">Lucknow</option>
                    <option value="Ludhiana">Ludhiana</option>
                    <option value="Mumbai">Mumbai (West)</option>
                    <option value="Mumbai">Mumbai (South)</option>
                    <option value="Noida">Noida</option>
                    <option value="Panchkula">Panchkula</option>
                    <option value="Patna">Patna</option>
                    <option value="Ranchi">Ranchi</option>
                    <option value="Surat">Surat</option>
                    <option value="Udaipur">Udaipur</option>
                </select>                    </div>
                <div class="form-group">
            <div class="currency">
                        <div class="row">
                            <div class="col-lg-6 pt-3 pt-lg-0">
                                <select name="input_currency_a" class="form-control" id="input_currency_a">
                                <option value="AED">AED</option>
                                        <option value="AUD">AUD</option>
                                        <option value="CAD">CAD</option>
                                        <option value="CHF">CHF</option>
                                        <option value="EUR">EUR(Euros)</option>
                                        <option value="GBP">GBP(Pound)</option>
                                        <option value="HKD">HKD</option>
                                        <option value="INR">INR</option>
                                        <option value="JPY">JPY</option>
                                        <option value="NZD">NZD</option>
                                        <option value="SAR">SAR</option>
                                        <option value="SEK">SEK</option>
                                        <option value="SGD">SGD</option>
                                        <option value="THB">THB</option>
                                        <option value="USD" selected="">USD(US Dollars)</option>
                                        <option value="ZAR">ZAR</option>
                                </select>
                            </div>
                            <div class="col-lg-6 pt-3 pt-lg-0">
                                <select name="output_currency_a" class="form-control" id="output_currency_a">
                                        <option value="AED">AED</option>
                                        <option value="AUD">AUD</option>
                                        <option value="CAD">CAD</option>
                                        <option value="CHF">CHF</option>
                                        <option value="EUR">EUR(Euros)</option>
                                        <option value="GBP">GBP(Pound)</option>
                                        <option value="HKD">HKD</option>
                                        <option value="INR" selected="">INR</option>
                                        <option value="JPY">JPY</option>
                                        <option value="NZD">NZD</option>
                                        <option value="SAR">SAR</option>
                                        <option value="SEK">SEK</option>
                                        <option value="SGD">SGD</option>
                                        <option value="THB">THB</option>
                                        <option value="USD">USD(US Dollars)</option>
                                        <option value="ZAR">ZAR</option>
                                </select>
                            </div>
                        </div>
                    </div>
            </div>
         
            <div class="form-group mt-4">

            <div class="form-group">
                    <div class="currency">
                        <div class="row">
                            <div class="col-lg-6 pt-3 pt-lg-0">
                                <input type="number" class="form-group" name="" id="input_amount_a" value="1">
                            </div>
                            <div class="col-lg-6 pt-3 pt-lg-0">
                                <input type="text" class="form-group" name="" id="output_amount_a" placeholder="0">
                            </div>
                            <div class="col-12 pt-3 pt-lg-3">
                                <div class="result">
                                    <div class="rate" id="rate_a"></div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
          </div>
                    <div class="form-group mt-4">
                        <button type="submit" class="btn formsubmitbtn btn-danger">Book This Order</button>
                    </div>
                    </form>
          </div>
        </div>
      </div>
      <!-- 	</div> -->
    </div>
  </div>
                    </div>
                    <!-- <div class="full paddding_left_15">
                        <a class="main_bt" href="#">Exchange Currency ></a>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <!-- end section -->
@endsection