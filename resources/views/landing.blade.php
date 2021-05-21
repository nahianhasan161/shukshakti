@include('layouts.head')
<body>
	<!-- Image and text -->
{{-- <nav class="navbar navbar-primary bg-primary">
	
		

			<a class="navbar-brand ml-5" href="#" class="title" style="font-family: 'Pasofico' 
	 
     
	 font-weight: 200;
	 
	 font-size: 24px;
	 
	 ">
	  <img src="{{ asset('assets/logo.png') }}" width="30" height="30" class="d-inline-block align-top" alt="">
	  
	  Shukshakti
	  
	</a>



	<button id="cspio-subscribe-btn" class="btn btn-lg btn-success  my-2 my-sm-0 " type="button">Admin</button>

	
  </nav> --}}
	  
	<div id="cspio-page">
		<div id="cspio-content">
			@if (Session::has('message'))

			<small class="alert alert-success alert-dismissible fade show mt-5" role="alert">
				{{ Session::get('message') }}
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </small>

			
			@endif

			{{-- <img id="cspio-logo" src="{{ asset('shukshakti.png') }}"> --}}
			<div class="row">
				

						    				
			</div>
			<h1 id="cspio-headline">Coming Soon </h1>	
			<div id="cspio-description">Get ready! Something really cool is coming!</div>			    				
			
			{{-- <form id="cspio-form" action="" method="post">
				<div id="cspio-field-wrapper">
					<div class="row">
						<div class="col-md-12 seperate"><div class="input-group"><input id="cspio-email" name="EMAIL" class="form-control input-lg form-el" type="email" placeholder="Email" required/>
					<span class="input-group-btn"><button id="cspio-subscribe-btn" type="submit" class="btn btn-lg btn-primary form-el noglow">Notify Me</button></span></div></div>
					</div>
				</div>
			</form>
			 --}}

			 {{-- <div class="row">
				<div class="form-group">
					<label for="exampleFormControlInput1">Email address</label>
					<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
				  </div>
				  <div class="form-group">
					<label for="exampleFormControlInput1">Email address</label>
					<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
				  </div>
				  
				  <div class="form-group">
					<label for="exampleFormControlTextarea1">Example textarea</label>
					<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
				  </div> --}}

				  <form method="POST" action="/store" >
					@csrf
					<div class="form-group">
					  <label for="InputEmail1" >Email address</label>
					  <input type="email" name="email" class="form-control form-control-lg" id="InputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
					  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
					  @error('email')

					  
					  <small class="alert alert-info alert-dismissible fade show" role="alert">
						{{ $message }}
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						  <span aria-hidden="true">&times;</span>
						</button>
					  </small>
					  
						  
					  @enderror
					</div>
					<div class="form-group">
					  <label for="InputPassword1">Name</label>
					  <input type="text"  name= "name" class="form-control form-control-lg mb-2" id="InputName" placeholder="Name">
					  

					  @error('name')
					  <small class="alert alert-info alert-dismissible fade show mt-5" role="alert">
						{{ $message }}
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						  <span aria-hidden="true">&times;</span>
						</button>
					  </small>
						  
					  @enderror
					</div>
					<div class="form-group">
						<label for="FormControlTextarea1">Message</label>
						<textarea class="form-control form-control-lg mb-2" name="message" id="FormControlTextarea1" rows="8" placeholder="Anything you want to know"></textarea>
						

						@error('message')
						<small class="alert alert-info alert-dismissible fade show mt-5" role="alert">
							{{ $message }}
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							  <span aria-hidden="true">&times;</span>
							</button>
						  </small>
						  
					  @enderror
					  </div>

					  <button id="cspio-subscribe-btn" type="submit" class="btn btn-lg btn-primary form-el noglow">Send</button>
				  </form>

			<span id="cspio-privacy-policy-txt">We promise to never spam you.</span>
			    						    			    								    			    			    				
			<div id="cspio-socialprofiles">
				<a href="" target="_blank"><i class="fa fa-facebook-official fa-2x"></i></a>			
				<a href="" target="_blank"><i class="fa fa-twitter fa-2x"></i></a>			
				<a href="mailto:" target="_blank"><i class="fa fa-envelope fa-2x"></i></a>			
			</div>

			{{-- <div id="cspio-credit">
					<span>Created with <a target="_blank" href="https://www.comingsoonpage.com"><img id="aff" src="https://static.comingsoonpage.com/cspio-assets/1.0.0/comingsoonpage.com-logo.png" alt="Created by ComingSoonPage.com"></a> Free download <a target="_blank" href="http://www.seedprod.com/free-coming-soon-page/" style="text-decoration:underline" alt="Get your free coming soon page.">here.</a>
				</span></div> --}}
									    									    			    			    							    			     			    		
		</div><!-- end of #cspio-content -->
	</div>


	<script>
		// Animate Delay
		setTimeout(function(){ jQuery("#cspio-content").show().addClass('animated fadeIn'); }, 250);

		// Reseize	
		function resize(){
				$('head').append("<style id='form-style' type='text/css'></style>");
				$('#form-style').html('.cspio .input-group-btn, .cspio .input-group{display:block;width:100%;}.cspio #cspio-subscribe-btn{margin-left:0;width:100%;display:block;}.cspio .input-group .form-control:first-child, .cspio .input-group-addon:first-child, .cspio .input-group-btn:first-child>.btn, .cspio .input-group-btn:first-child>.dropdown-toggle, .cspio .input-group-btn:last-child>.btn:not(:last-child):not(.dropdown-toggle) {border-bottom-right-radius: 4px;border-top-right-radius: 4px;}.cspio .input-group .form-control:last-child, .cspio .input-group-addon:last-child, .cspio .input-group-btn:last-child>.btn, .cspio .input-group-btn:last-child>.dropdown-toggle, .cspio .input-group-btn:first-child>.btn:not(:first-child) {border-bottom-left-radius: 4px;border-top-left-radius: 4px;}');
		}
		
		$('#cspio-content').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', 
			function(){
				var width = $('#cspio-field-wrapper').width();
				if(width < 480 && width != 0){
					resize();
				}
			}
		);
	</script>

	</body>
