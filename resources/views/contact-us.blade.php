@extends("layouts.frontend")

@section("title")

  {{ config("app.name") }}  | Contact Us

@endsection

@section("breadcrumb")
    @includeIf("layouts.breadcrumb" , [ "title" => "Contact Us" , "subtitle" => "Contact Us"])
@endsection

@section("main_content")



        <section class="ttm-row clearfix">
            <div class="container">
                <div class="row pt-60 res-991-pt-0">
                    <div class="col-lg-8">
                        <div class="pr-40 res-991-pr-0 res-991-pb-30">
                            <!-- section-title -->
                            <div class="section-title with-desc clearfix">
                                <div class="title-header">
                                    <h2 class="title">How Can We Help?</h2>
                                </div>
                            </div>
                            <!-- section-title end -->
                            <form id="ttm-contactform" class="ttm-contactform wrap-form style2 res-991-mt_15 clearfix" method="post" action="#">
                                @{{ csrf_field() }}
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Full Name *</label>
                                        <span class="text-input"><input name="your-name" type="text" value="" placeholder="" required="required"></span>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Your email *</label>
                                        <span class="text-input"><input name="email" type="email" value="" placeholder="" required="required"></span>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Your Phone *</label>
                                        <span class="text-input"><input name="phone" type="text" value="" placeholder="" required="required"></span>
                                    </div>
                                    <div class="col-md-6">
                                        <label>I'm interested in *</label>
                                        <span class="text-input"><input name="venue" type="text" value="" placeholder="" required="required"></span>
                                    </div>
                                    <div class="col-md-12">
                                        <label>Your Message *</label>
                                        <span class="text-input"><textarea name="message" cols="40" rows="6" placeholder="" required="required"></textarea></span>
                                    </div>
                                </div>
                                <input type="submit" value="SEND-MESSAGE" class="submit ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-fill ttm-btn-color-skincolor">
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <!-- section-title -->
                        <div class="section-title clearfix">
                            <div class="title-header">
                                <h2 class="title">Follow Us</h2>
                            </div>
                        </div>
                        <!-- section-title end -->
                        <div class="pt-25 pb-40 res-991-pb-10 res-991-mt-50">
                            <div class="social-icons circle social-hover">
                                <div class="ttm-socialbox-links-wrapper row">
                                    <div class="ttm-socialbox-i-wrapper col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <a class="tooltip-top ttm-socialbox-icon-link-twitter" target="_blank" href="#" data-tooltip="Twitter">
                                            <i class="fa fa-twitter" aria-hidden="true"></i>
                                            <span class="ttm-link">twitter</span>
                                        </a>
                                    </div>
                                    <div class="ttm-socialbox-i-wrapper col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <a class="tooltip-top ttm-socialbox-icon-link-gplus" target="_blank" href="#" data-tooltip="Google+">
                                            <i class="fa fa-google-plus" aria-hidden="true"></i>
                                            <span class="ttm-link">gplus</span>
                                        </a>
                                    </div>
                                    <div class="ttm-socialbox-i-wrapper col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <a class="tooltip-top ttm-socialbox-icon-link-facebook" target="_blank" href="#" data-tooltip="Facebook">
                                            <i class="fa fa-facebook" aria-hidden="true"></i>
                                            <span class="ttm-link">facebook</span>
                                        </a>
                                    </div>
                                    <div class="ttm-socialbox-i-wrapper col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <a class="tooltip-top ttm-socialbox-icon-link-twitter" target="_blank" href="#" data-tooltip="Twitter">
                                            <i class="fa fa-twitter" aria-hidden="true"></i>
                                            <span class="ttm-link">twitter</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- section-title -->
                        <div class="section-title clearfix">
                            <div class="title-header">
                                <h2 class="title">Opening Hours</h2>
                            </div>
                        </div>
                        <!-- section-title end -->
                        <div class="ttm-timelistbox-wrapper pt-10 res-991-mt-50">
                            <div class="ttm-timelistbox-block-wrapper">
                                <ul class="ttm-timelistbox-block">
                                    <li>Monday - Friday<span class="service-time">09:00 - 17:00</span></li>
                                    <li>Saturday<span class="service-time">09:00 - 17:00</span></li>
                                    <li>Sunday<span class="service-time">Closed</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- intro-section end -->


        

@endsection