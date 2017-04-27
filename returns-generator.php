<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Returns Generator</title>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.6.0/clipboard.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	
	<style>
	
		hr {
			margin: 0 auto 10px;
		}
		
		.middle { border-left: 2px solid #dedede; border-right: 2px solid #dedede; }
		
		#return-and-refund {
			max-height: 550px;
			overflow: auto;
			overflow-y: scroll;
			
			padding: 0 20px;
			border: 1px solid #dedede;
			border-radius: 7px;
		}
		
		.tab-pane {
			padding: 20px;
			border-left: 1px solid #dedede;
			border-bottom: 1px solid #dedede;
			border-right: 1px solid #dedede;
			border-bottom-left-radius: 7px;
			border-bottom-right-radius: 7px;
		}
		
		
	</style>
</head>
<body>

<body>

<h1 style="text-align: center; ">VQDEV Returns and Refund policy Generator</h1>

<div class="container">
	<p style="display:block;text-align:center;">You will need to write this yourself, but this form has textfields that are <b>adjustable</b> where you can write your own special messages<br> for each of the situations you might run into. Along with helpful examples and hints on what to include. </p>

</div>
<hr>
	<div ng-app="">

		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-4">
					<form>
						<h2>Form</h2>
						<div class="row">
							<div class="col-xs-6">
								<h4>GENERAL</h4>
								<hr>
								<div class="form-group">
									<label for="compname">Company Name</label>
									<input type="text" ng-model="compname" class="form-control" id="compname" placeholder="Company Name">
								</div>
							</div>
							
						
							<div class="col-xs-6">
								<h4>RETURNS</h4>
								<hr>
								<div class="form-group">
									<label for="days">How many days they have to return a product</label>
									<input type="text" ng-model="days" class="form-control" id="days" placeholder="30">
								</div>
							</div>
						</div><!--row-->
						
						<div class="row">
							<div class="col-xs-6">
								<h4>REFUNDS</h4>
								<hr>
								<div class="form-group">
									<label for="credit">How will they receive the refund (credit or replacement)</label>
									<textarea  ng-model="credit" class="form-control" id="credit" placeholder=""></textarea>
								</div>
							</div>
						
						
							<div class="col-xs-6">
								<h4>Digital or Real Shippable Products</h4>
								<hr>
								<div class="form-group">
									<label for="refund">If you offer refunds for digital products or in-app purchases</label>
									<textarea  ng-model="refund" class="form-control" id="refund" placeholder=""></textarea>
								</div>
							</div>
						</div><!-- row -->
						
						<div class="row">
							<div class="col-xs-6">
								<h4>SHIPPING</h4>
								<hr>
								
								<div class="form-group">
									<label for="shipping">Who pays for shipping to return the product</label>
									<textarea  ng-model="shipping" class="form-control" id="shipping" placeholder=""></textarea>
								</div>
							</div>
						
							<div class="col-xs-6">
								<h4>GUARENTEE</h4>
								<hr>
								<div class="form-group">
									<label for="guarentee">Who pays for shipping to return the product</label>
									<textarea  ng-model="guarentee" class="form-control" id="guarentee" placeholder=""></textarea>
								</div>
							</div>
						</div>
						
					</form>
					<button type="button" class="btn btn-primary return-btn"  onclick="generate_return()" data-clipboard-target="#return-and-refund">Copy to clipboard</button>
				</div>
				
				<div class="col-lg-4 middle">
				
					<h2>Hints and Examples</h2>
					
					<div id="tabs">

						<!-- Nav tabs -->
						<ul class="nav nav-tabs" role="tablist">
							<li role="presentation" class="active"><a href="#hints" aria-controls="hints" role="tab" data-toggle="tab">Hints</a></li>
							<li role="presentation"><a href="#examples" aria-controls="examples" role="tab" data-toggle="tab">Examples</a></li>
						</ul>

						<!-- Tab panes -->
						<div class="tab-content">
							<div role="tabpanel" class="tab-pane active" id="hints">
							
							
								<p>Your Return Policy or Refund Policy should include at least the following sections:</p>
								<ul>
									<li>Refund</li>
									<li>Returns</li>
									<li>Shipping</li>
									<li></li>
								</ul>
								
								<p>Your return policy should answer these questions:</p>
								<ul>
									<li>What kind of refund you will give to the customer after the item is returned: another similar product, a store credit, etc.?</li>
									<li>Who will pay for the return shipping?</li>
									<li>Are refunds credited back to customers' Visa, MasterCard or American Express credit/debit cards?</li>
									<li>Do you have a different policy for international vs domestic?</li>
								</ul>
								
								If you sell digital products, the Policy should include the following sections:
								<ul>
									<li>Are RMA's (Return Merchandise Authorization) required?</li>
									<li>Do the serial number's of the product be verified first?</li>
									<li>If you offer refunds on digital purchases</li>
									<li>If you offer refunds in limited cases, e.g. download link wasn't working</li>
								</ul>
							
							
							</div>
							<div role="tabpanel" class="tab-pane" id="examples">
							
								<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
									<div class="panel panel-default">
										<div class="panel-heading" role="tab" id="headingOne">
											<h4 class="panel-title">
												<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
													EXAMPLE 1
												</a>
											</h4>
										</div>
										<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
											<div class="panel-body">
												<p>If you are not 100% satisfied with your purchase, you can return the product and get a full refund or exchange the product for another one, be it similar or not.</p>
												<p>You can return a product for up to 30 days from the date you purchased it.</p>
												<p>Any product you return must be in the same condition you received it and in the original packaging. Please keep the receipt.</p>
											</div>
										</div>
									</div>
									<div class="panel panel-default">
										<div class="panel-heading" role="tab" id="headingTwo">
											<h4 class="panel-title">
												<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
													EXAMPLE 2
												</a>
											</h4>
										</div>
										<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
											<div class="panel-body">
												<p>If you're not pleased with your purchase from {{compname}}, just contact us within {{days}} days and we will give you a refund or replacement.</p>
											</div>
										</div>
									</div>
									<div class="panel panel-default">
										<div class="panel-heading" role="tab" id="headingThree">
											<h4 class="panel-title">
												<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
													EXAMPLE 3
												</a>
											</h4>
										</div>
										<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
											<div class="panel-body">
												<p>If you are not 100% satisfied with your purchase, simply send it back within 14 days and we’ll refund the full cost of the item minus shipping costs.</p>
											</div>
										</div>
									</div>
									<div class="panel panel-default">
										<div class="panel-heading" role="tab" id="headingFour">
											<h4 class="panel-title">
												<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
													DIGITAL EXAMPLE 3
												</a>
											</h4>
										</div>
										<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
											<div class="panel-body">
												<p>Given the nature of downloadable digital items, we do not generally offer a refund or credit on a purchase unless required under Australian consumer law or other relevant consumer protection laws.</p>
											</div>
										</div>
									</div>
								</div>
							
							
							
							
							
							
							</div>

						</div>

					</div><!--end tabs -->
					
				</div>
			 
				<div class="col-lg-4">
					<h2>See Preview Below:</h2>
					
					<div id="return-and-refund" >
						
						<h3>Return &amp; Refund Policy</h3>

						<p>Thanks for shopping at {{compname}}.</p>

						<p>If you are not entirely satisfied with your purchase, we're here to help.</p>


						<strong>Returns</strong>

						<p>You have {{days}} calendar days to return an item from the date you received it.</p>

						<p>To be eligible for a return, your item must be unused and in the same condition that you received it.</p>

						<p>Your item must be in the original packaging.</p>

						<p>Your item needs to have the receipt or proof of purchase.</p>


						<strong>Refunds</strong>

						<p>Once we receive your item, we will inspect it and notify you that we have received your returned
						item. We will immediately notify you on the status of your refund after inspecting the item.</p>

						<p>If your return is approved, we will initiate a refund to your credit card (or original method of payment).</p>

						<p>You will receive the credit within a certain amount of days, depending on your card issuer's policies.</p>


						<strong>Shipping</strong>

						<p>You will be responsible for paying for your own shipping costs for returning your item. Shipping costs are non-refundable.</p>

						<p>If you receive a refund, the cost of return shipping will be deducted from your refund.</p>


						<strong>Contact Us</strong>

						<p>If you have any questions on how to return your item to us, contact us.</p> 
						
						<strong>Guarentee</strong>
						
						<p>{{guarentee}}</p>

					</div><!-- ToS -->
					
				</div>
			</div>
			
		</div> <!-- end container -->
	</div>
	
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script>
		function generate_return() {
			new Clipboard('.return-btn');
		}
	</script>
	

</body>
</html>
