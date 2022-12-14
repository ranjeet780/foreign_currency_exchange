@extends('layouts.app')
@section('content')
<div class="section inner_page_banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner_title">
                        <h3>Contact</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->
    
   <!-- section -->
    <div class="section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="heading_main text_align_center">
                           <h2><span class="theme_color"></span>Contact</h2>    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end section -->

    <!-- contact_form -->
    <div class="section contact_form">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12 offset-lg-3">
                    <div class="full">
                        <form class="contact_form_inner" method="post" action="{{url('add-contact')}}">
                          @csrf 
                        <fieldset>
                                <div class="field">
                                    <input type="text" name="name" placeholder="Your name" />
                                </div>
                                <div class="field">
                                    <input type="email" name="email" placeholder="Email" />
                                </div>
                                <div class="field">
                                    <input type="text" name="phone_no" placeholder="Phone number" />
                                </div>
                                <div class="field">
                                    <select name="services" placeholder="Services" class='form-control' style="background: #0e0606;">
                                       <option value="">Services</option>
                                       <option value="Overseas University & Colleges Fees Transfer">Overseas University & Colleges Fees Transfer</option>
                                        <option value="Overseas Gic fees">Overseas Gic fees</option>
                                        <option value="Family Maintainance fund transefer to close relatives">Family Maintainance fund transefer to close relatives</option>
                                        <option value="Gift payments to close relatives & friends">Gift payments to close relatives & friends</option>
                                        <option value="immigration funds transfer">immigration funds transfer</option>
                                        <option value="VISA FEES">VISA FEES</option>
                                        <option value="Employment Fees">Employment Fees</option>
                                        <option value="Forex Card">Forex Card</option>
                                    </select> 
                                </div>
                                <div class="field">
                                    <textarea name="message" placeholder="Message"></textarea>
                                </div>
                                <div class="field center">
                                    <button type="submit">SEND</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact_form -->
   
@endsection