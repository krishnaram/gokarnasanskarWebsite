<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
		<html xmlns="http://www.w3.org/1999/xhtml">
		<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Divine</title>
		<link rel="icon" href="images/favicon.ico">
		<link href="CSS/menu.css" rel="stylesheet" type="text/css" />
		<link href="CSS/bootstrap.css" rel="stylesheet" type="text/css" />
        
         <script src="JS/jquery-1.9.1.min.js"></script>
         <script src="JS/jquery.jscroll.js"></script>
         <script src="JS/jquery.jscroll.min.js"></script>
         
         <link rel="stylesheet" href="//code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css">
		<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
		<script src="http://code.jquery.com/ui/1.11.3/jquery-ui.js"></script>

 
 		<script>
		
        jQuery(document).ready(function ($) {
			$('.error-email').hide();
				$('.error-fname').hide();
				$('.error-lname').hide();
				$('.error-nop').hide();
				$('.error-phone').hide();
				$('.error-schedule').hide();
				$('.error-message').hide();
			$('#header').load('header.html');
			$('#book').click(function() {
				var submitForm = true;
				$('.error-email').html('');
				$('.error-fname').html('');
				$('.error-lname').html('');
				$('.error-nop').html('');
				$('.error-phone').html('');
				$('.error-schedule').html('');
				var email = $('#email').val();
				var fname = $('#fname').val();
				var lname = $('#lname').val();
				var nop = $('#nop').val();
				var phone = $('#phone').val();
				var message = $('#message').val();
				var fromDate = new Date($('#from').val());
				var toDate = new Date($('#to').val());				
				if($('#from').val().length <=0 )
				{
					$('.error-schedule').html('Please select a valid from date').show();
					submitForm = false;
				}
				else if($('#to').val().length <=0)
				{
					$('.error-schedule').html('Please select a valid to date').show();
					submitForm = false;					
				}
				else if( fromDate > toDate)
				{
					alert('here');
					$('.error-schedule').html('Form date should be less than to date').show();
									submitForm = false;
				}
				
				
				if(! message.length>0)
				{
					$('.error-message').html('Please write your message to us').show();
									submitForm = false;
				}
				if(email.length>0)
				{
						  	if(!email.match(/^[_A-z0-9-]+(\.[_A-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/))
							{
								$('.error-email').html('Please enter valid email-id').show();
									submitForm = false;
							}
				}
				else{
					$('.error-email').html('Please enter email-id').show();
									submitForm = false;
				}
				if(fname.length>0 && fname.length <15)
				{
						  	if(!fname.match(/^[A-Za-z]+$/))
							{
								$('.error-fname').html('Only Alphabets are allowed').show();
									submitForm = false;
							}
				}
				else{
					$('.error-fname').html('Fname should consists of 1 to max 15 chars').show();
					submitForm = false;
				}
				if(lname.length>0 && lname.length <15)
				{
						  	if(!lname.match(/^[A-Za-z]+$/))
							{
								$('.error-lname').html('Only Alphabets are allowed').show();
									submitForm = false;
							}
				}
				else{
					$('.error-lname').html('Lname should consists of 1 to max 15 chars').show();
					submitForm = false;
				}
				if(phone.length>0)
				{
					if(phone.length !=  10){
						$('.error-phone').html('Cell number should have 10 digits').show();
						submitForm = false;
					}
							
					else if(!phone.match(/^[0-9]+$/) ){
						$('.error-phone').html('Only digits are allowed').show();
						submitForm = false;
					}
									
				}
				else{
					$('.error-phone').html('Please provide cell number').show();
					submitForm = false;	
				}
				if(nop.length>0)
				{
					 if(!nop.match(/^[0-9]+$/) ){
						$('.error-nop').html('Only digits are allowed').show();
						submitForm = false;
					}
									
				}
				else{
					$('.error-nop').html('Please give people estimation').show();
					submitForm = false;	
				}
				return submitForm;
			});
			
		});
		
		$(function() {
				$( "#from" ).datepicker(
				{ minDate: +2, maxDate: "+6M +10D",
				showOn: "button",
	      		buttonImage: "img/book/calendar.png",
	      		buttonImageOnly: true,
				
				onSelect: function(selectedDate) {
            var date = $(this).datepicker('getDate');
            date.setDate(date.getDate() + 7); // Add 7 days
            $('#to').datepicker('option', 'maxDate', date); // Set as default
			}
			
	   });
		});
		$(function() {
				$( "#to" ).datepicker({
					minDate: +2, maxDate: "+6M +10D",
					showOn: "button",
	      		buttonImage: "img/book/calendar.png",
	      		buttonImageOnly: true
				
					});
		});

		</script>
		<style>
			.ui-datepicker {
 			   background: #333;
    			border: 1px solid #555;
    			color: #EEE;
				margin-right: 100px;
			}
		</style>
		</head>
		
		<body style='background-image:url(img/bodyimg.jpg);
	background-repeat:repeat;'>
        	 <div class="container mainBody ">
	   		<div  id='header' >
            </div>
			 <br>
            	<br>
                <script>
				  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
				  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
				  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
				  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

				  ga('create', 'UA-69397993-1', 'auto');
				  ga('send', 'pageview');

				</script>
				<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
				<!-- Religious -->
				<ins class="adsbygoogle"
					 style="display:inline-block;width:728px;height:90px"
					 data-ad-client="ca-pub-9370553173400629"
					 data-ad-slot="4668689790"></ins>
				<script>
				(adsbygoogle = window.adsbygoogle || []).push({});
				</script>
              <div class="container">
          		  <br>
            	<br>
              </div>
              <div class="container">
    <div class="row scroll">
    	<div class="col-md-3">
        </div>
        <div class="col-md-5">
            <div class="well well-sm">
           

                <form class="form-horizontal" method="post" action="sendmail.php">
					<?php
                    echo '<input type="hidden" value="'.$_POST['prc'].'" id="prc" name="prc">';
					echo '<input type="hidden" value="'.$_POST['priest'].'" id="priest" name="priest">';
					echo '<input type="hidden" value="'.$_POST['price'].'" id="price" name="price">';
					echo '<input type="hidden" value="'.$_POST['days'].'" id="days" name="days">';
                     ?>
                    <fieldset>
                        <legend class="text-center header">Booking</legend>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center col-xs-4"><img src="img/book/name.png" height="30px"  alt="FName" class="fa fa-user bigicon"></img></span>
                            <div class="col-md-8 col-xs-8">
                                <input id="fname" name="fname" type="text" placeholder="First Name" class="form-control">
                            </div>
                            <span class='error-fname errorfield col-md-8 col-md-offset-4'></span>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center col-xs-4"><img class="fa fa-user bigicon" src="img/book/name.png" height="30px" alt="LName"></img></span>
                            <div class="col-md-8 col-xs-8">
                                <input id="lname" name="lname" type="text" placeholder="Last Name" class="form-control">
                            </div>
                            <span class='error-lname errorfield col-md-8 col-md-offset-4'></span>
                        </div><div class="form-group ">
                        <span class="col-md-1 col-md-offset-2 text-center col-xs-4">&nbsp;</span>
                            <!--<span class="col-md-1 col-md-offset-2 text-center"><img class="fa fa-user bigicon" src="img/book/calendar.png" height="30px" alt="LName"></img></span>-->
                            <div class="col-md-4 col-xs-2">
                                <input id="from" name="from" type="text" placeholder="From Date" class="form-control" readonly="readonly">
                            </div>
                            <!--<span class="col-md-1  text-center"><img class="fa fa-user bigicon" src="img/book/calendar.png" height="30px" alt="LName"></img></span>-->
                            <div class="col-md-4 col-xs-2">
                                <input id="to" name="to" type="text" placeholder="To Date" class="form-control" readonly="readonly">
                            </div>
                            <span class='error-schedule errorfield col-md-8 col-md-offset-4'></span>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center col-xs-4"><img class="fa fa-user bigicon" src="img/book/name.png" height="30px" alt="LName"></img></span>
                            <div class="col-md-8 col-xs-8">
                                <input id="nop" name="nop" type="text" placeholder="Number Of People Coming" class="form-control">
                            </div>
                            <span class='error-nop errorfield col-md-8 col-md-offset-4'></span>
                        </div>						
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center col-xs-4"><img class="fa fa-envelope-o bigicon" src="img/book/mail.png" height="30px" alt="Mail"></img></span>
                            <div class="col-md-8 col-xs-8">
                                <input id="email" name="email" type="text" placeholder="Email Address" class="form-control">
                            </div>
                            <span class='error-email errorfield col-md-8 col-md-offset-4'></span>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center col-xs-4"><img class="fa fa-phone-square bigicon" src="img/book/mobile.png" height="30px" alt="Mobile"></img></span>
                            <div class="col-md-8 col-xs-8">
                                <input id="phone" name="phone" type="text" placeholder="Phone" class="form-control">
                            </div>
                            <span class='error-phone errorfield col-md-8 col-md-offset-4'></span>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center col-xs-4"><img class="fa fa-pencil-square-o bigicon" src="img/book/message.png" height="30px" alt="Msg"></img></span>
                            <div class="col-md-8 col-xs-8">
                                <textarea class="form-control"  id="message" name="message" placeholder="Enter Any Custom Message/Concern." rows="5" style="resize:none"></textarea>
                            </div>
                            <span class='error-message errorfield col-md-8 col-md-offset-4'></span>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary btn-sm" id='book'>Book</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
	</div>
    <div class="col-md-3">
    </div>
   <div class="footer footerBody">
		  <div class="container">
			This site is being developed.
		  </div>
		</div>
</div>

<style>
    
    .bigicon {
        font-size: 35px;
        color: #36A0FF;
    }
</style>
        </body>
        </html>