@extends('layouts.app')

@section('css')

<style type="text/css">
	
	
	</style>
@endsection

@section('content')

<div id="cspio-page">
    <div id="cspio-content">
        
        <img id="cspio-logo" src="https://static.comingsoonpage.com/cspio-assets/1.0.0/seedprod-logo-white.png">
                            
        <h1 id="cspio-headline">Coming Soon Page</h1>			    				
        
        <div id="cspio-description">Get ready! Something really cool is coming!</div>			    				
        
        <form id="cspio-form" action="" method="post">
            <div id="cspio-field-wrapper">
                <div class="row">
                    <div class="col-md-12 seperate"><div class="input-group"><input id="cspio-email" name="EMAIL" class="form-control input-lg form-el" type="email" placeholder="Email" required/>
                <span class="input-group-btn"><button id="cspio-subscribe-btn" type="submit" class="btn btn-lg btn-primary form-el noglow">Notify Me</button></span></div></div>
                </div>
            </div>
        </form>
        
        <span id="cspio-privacy-policy-txt">We promise to never spam you.</span>
                                                                                                                                            
        <div id="cspio-socialprofiles">
            <a href="" target="_blank"><i class="fa fa-facebook-official fa-2x"></i></a>			
            <a href="" target="_blank"><i class="fa fa-twitter fa-2x"></i></a>			
            <a href="mailto:" target="_blank"><i class="fa fa-envelope fa-2x"></i></a>			
        </div>

        <div id="cspio-credit">
                <span>Created with <a target="_blank" href="https://www.comingsoonpage.com"><img id="aff" src="https://static.comingsoonpage.com/cspio-assets/1.0.0/comingsoonpage.com-logo.png" alt="Created by ComingSoonPage.com"></a> Free download <a target="_blank" href="http://www.seedprod.com/free-coming-soon-page/" style="text-decoration:underline" alt="Get your free coming soon page.">here.</a>
            </span></div>
                                                                                                                                                                                     
    </div><!-- end of #cspio-content -->
</div>



@endsection
