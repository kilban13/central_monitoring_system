@extends('layouts.app')
@section('content')

    <div id="content">
    	
        <div class="col">
        	<h4 class="text-center mt-5">শিক্ষাকেন্দ্র পরিদর্শন ফরম</h4>
        </div>

        <div class="col">      	
         <div class="row mt-5">      	
        		<div class="col">
        			<div class="row req">
				      <label class="control-label col-4" for="email">পরিদর্শনকারীর নাম:</label>
				      <div class="col-8 ">
						  <select class="custom-select" id="inputGroupSelect02">
						    <option selected>Choose...</option>
						    <option value="">One</option>
						    <option value="">Two</option>
						    <option value="">Three</option>
						  </select>
						  
				      </div>
				    </div>
				    <div class="row req">
				      <label class="control-label col-4" for="pwd">শিক্ষাকেন্দ্রের নাম:</label>
				      <div class="col-8">          
						
						  <select class="custom-select" id="inputGroupSelect02">
						    <option selected>Choose...</option>
						    <option value="">One</option>
						    <option value="">Two</option>
						    <option value="">Three</option>
						  </select>
						  				      
					 </div>
				    </div>
				    <div class="row req">
				      <label class="control-label col-4" for="pwd">শিক্ষক/শিক্ষিকার নাম:</label>
					<div class="col-8">          
						  <select class="custom-select" id="inputGroupSelect02">
						    <option selected>Choose...</option>
						    <option value="">One</option>
						    <option value="">Two</option>
						    <option value="">Three</option>
						  </select>
						  				      
					 </div>
				    </div>
        		</div>
        		<div class="col">
        			<div class="row req">
				      <label class="control-label col-4" for="email">পরিদর্শনকারীর পরিচয়:</label>
				      <div class="col-8 ">
				        <div class="input-group mb-3">
						  <input class="form-control" type="text" name="" id="" placeholder="">
						</div>
				      </div>
				    </div>
				    <div class="row req">
				      <label class="control-label col-4" for="pwd">শিক্ষাকেন্দ্রের ধরন :</label>
				      <div class="col-8">
						  <select class="custom-select" id="inputGroupSelect02">
						    <option selected>Choose...</option>
						    <option value="">One</option>
						    <option value="">Two</option>
						    <option value="">Three</option>
						  </select>
						  				      
					 </div>
				    </div>
				    <div class="row req">
				      <label class="control-label col-4" for="pwd">উপস্থিত শিক্ষার্থীর সংখ্যা:</label>
					<div class="col-8">          
						
						  <select class="custom-select" id="inputGroupSelect02">
						    <option selected>Choose...</option>
						    <option value="">One</option>
						    <option value="">Two</option>
						    <option value="">Three</option>
						  </select>
						 				      
					 </div>
				    </div>
        		</div>
        		<div class="col">
        			<div class="row req">
				      <label class="control-label col-4" for="email">পরিদর্শনের তারিখ ও সময়:</label>
				      <div class="col-8 ">
				            <input class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="example-datetime-local-input">
				      </div>
				    </div>
				    <div class="row req">
				      <label class="control-label col-4" for="pwd">কেন্দ্রের মোট শিক্ষার্থী সংখ্যা:</label>
				      <div class="col-8">          
						<div class="input-group mb-3">
						  
						     <input class="form-control" type="text" name="" id="" placeholder="">

						</div>				      
					 </div>
				    </div>
				    <div class="row req">
				      <label class="control-label col-4" for="pwd">পরিদর্শনকারীর মোবাইল নং:</label>
					<div class="col-8">          
						<div class="input-group mb-3">
						  <input class="form-control" type="text" name="" id="" placeholder="">  
						</div>				      
					 </div>
				    </div>
        		</div>
         </div>
        </div>
        <div class="col">
        	<h6 class="mt-3">পরিদর্শনকালে উপস্থাপিত কার্যক্রম (ইভেন্ট)</h6>
        </div>
        <div class="row mt-3">
		  <div class="col">
		  	<div class="col">
 				<label class="container-chk">জাতীয় সঙ্গীত ও দৈনিক সমাবেশ
				  <input type="checkbox">
				  <span class="checkmark"></span>
				</label>
		  	</div>
		  	<div class="col">
		  		<label class="container-chk">চারু ও কারু কাজ (চিত্রাঙ্কন সহ) 
				  <input type="checkbox">
				  <span class="checkmark"></span>
				</label>
		  	</div>
		  </div>
		  <div class="col">
		  	<div class="col">
 				<label class="container-chk">প্রাক গঠন ও লিখন
				  <input type="checkbox">
				  <span class="checkmark"></span>
				</label>
		  	</div>
		  	<div class="col">
		  		<label class="container-chk">ক্রিয়া ও শরীরচর্চা
				  <input type="checkbox">
				  <span class="checkmark"></span>
				</label>
		  	</div>
		  </div>
		  <div class="col">
		  	<div class="col">
 				<label class="container-chk">ছড়া, গান ও গল্প
				  <input type="checkbox">
				  <span class="checkmark"></span>
				</label>
		  	</div>
		  	<div class="col">
		  		<label class="container-chk">নৈতিকতা ও ধর্মীয় শিক্ষা / প্রায়ানামা 
				  <input type="checkbox">
				  <span class="checkmark"></span>
				</label>
		  	</div>
		  </div>
		  <div class="col">
		  	<div class="col">
 				<label class="container-chk">প্রাক গনিত
				  <input type="checkbox">
				  <span class="checkmark"></span>
				</label>
		  	</div>
		  	<div class="col">
		  		<label class="container-chk">সামাজিক পরিবেশ ও স্বাস্থ্য  
				  <input type="checkbox">
				  <span class="checkmark"></span>
				</label>
		  	</div>
		  </div>
		</div>

		<div class="col">
        	<h6 class="mt-3">পরিদর্শনকালীন উপস্থাপিত মন্দির সংশ্লিষ্ট গণ্যমান্য ব্যক্তির নাম ও পরিচিতি  </h6>
        </div>
        <div class="col">
         <div class="row mt-3">
        	<div class="col ">
        		<div class="row">
				      <label class="control-label col-4" for="pwd">নাম:</label>
				      <div class="col-8">          
						<div class="input-group mb-3">
						  
						     <input class="form-control" type="text" name="" id="" placeholder="">

						</div>				      
					 </div>
				  </div>
				  <div class="row">
				      <label class="control-label col-4" for="pwd">নাম:</label>
				      <div class="col-8">          
						<div class="input-group mb-3">
						  
						     <input class="form-control" type="text" name="" id="" placeholder="">

						</div>				      
					 </div>
				   </div>
				   <div class="row">
				      <label class="control-label col-4" for="pwd">নাম:</label>
				      <div class="col-8">          
						<div class="input-group mb-3">
						  
						     <input class="form-control" type="text" name="" id="" placeholder="">

						</div>				      
					 </div>
				   </div>
        	</div>
        	<div class="col">
        		<div class="row">
				      <label class="control-label col-4" for="pwd">পরিচিতি:</label>
				      <div class="col-8">          
						<div class="input-group mb-3">
						  
						     <input class="form-control" type="text" name="" id="" placeholder="">

						</div>				      
					 </div>
				  </div>
				  <div class="row">
				      <label class="control-label col-4" for="pwd">পরিচিতি:</label>
				      <div class="col-8">          
						<div class="input-group mb-3">
						  
						     <input class="form-control" type="text" name="" id="" placeholder="">

						</div>				      
					 </div>
				   </div>
				   <div class="row">
				      <label class="control-label col-4" for="pwd">পরিচিতি:</label>
				      <div class="col-8">          
						<div class="input-group mb-3">
						  
						     <input class="form-control" type="text" name="" id="" placeholder="">

						</div>				      
					 </div>
				   </div>
        	</div>
        </div>
       </div>
       <div class="col">
        	<h6 class="mt-3">শিক্ষাকেন্দ্রে প্রদর্শিত/ব্যবহিত শিক্ষা উপকরন </h6>
        </div>

        <div class="row mt-3">
		  <div class="col">
		  	<div class="col">
 				<label class="container-chk">ব্লাকবোর্ড 
				  <input type="checkbox">
				  <span class="checkmark"></span>
				</label>
		  	</div>
		  	<div class="col">
		  		<label class="container-chk">শিক্ষার্থীদের চারু ও কারুকাজ
				  <input type="checkbox">
				  <span class="checkmark"></span>
				</label>
		  	</div>
		  	<div class="col">
		  		<label class="container-chk">ড্রয়িং পেপার ও রঙ্গিন কাগজ
				  <input type="checkbox">
				  <span class="checkmark"></span>
				</label>
		  	</div>
		  </div>
		  <div class="col">
		  	<div class="col">
 				<label class="container-chk">ঘণ্টা
				  <input type="checkbox">
				  <span class="checkmark"></span>
				</label>
		  	</div>
		  	<div class="col">
		  		<label class="container-chk">জাতীয় পতাকা
				  <input type="checkbox">
				  <span class="checkmark"></span>
				</label>
		  	</div>
		  	<div class="col">
		  		<label class="container-chk">কাঁচি
				  <input type="checkbox">
				  <span class="checkmark"></span>
				</label>
		  	</div>
		  </div>
		  <div class="col">
		  	<div class="col">
 				<label class="container-chk">সাইনবোর্ড
				  <input type="checkbox">
				  <span class="checkmark"></span>
				</label>
		  	</div>
		  	<div class="col">
		  		<label class="container-chk">শিক্ষার্থী পাঠদান বই
				  <input type="checkbox">
				  <span class="checkmark"></span>
				</label>
		  	</div>
		  	<div class="col">
		  		<label class="container-chk">রং পেন্সিল, ইরেসার, পেন্সিল কাটার 
				  <input type="checkbox">
				  <span class="checkmark"></span>
				</label>
		  	</div>
		  </div>
		  <div class="col">
		  	<div class="col">
 				<label class="container-chk">০৮ টি দেয়াল পোস্টার 
				  <input type="checkbox">
				  <span class="checkmark"></span>
				</label>
		  	</div>
		  	<div class="col">
		  		<label class="container-chk">অনুশীলন খাতা  
				  <input type="checkbox">
				  <span class="checkmark"></span>
				</label>
		  	</div>
		  </div>
		</div>
		 <div class="col">
        	<h6 class="mt-3">পাঠদান প্রক্রিয়ার শিক্ষা উপকরণের ব্যস্তব ব্যবহার </h6>
        </div>

		<div class="row mt-3">
		  <div class="col">
		  	<div class="col">
 				<label class="container-chk">কাঠি
				  <input type="checkbox">
				  <span class="checkmark"></span>
				</label>
		  	</div>
		  	<div class="col">
		  		<label class="container-chk">ফুল ও অন্যান্য উপকরন (যদি থাকে)
				  <input type="checkbox">
				  <span class="checkmark"></span>
				</label>
		  	</div>
		  	<div class="col">
 				<label class="container-chk">কাঁচি
				  <input type="checkbox">
				  <span class="checkmark"></span>
				</label>
		  	</div>
		  </div>
		  <div class="col">
		  	
		  	<div class="col">
		  		<label class="container-chk">ফলের বীচি
				  <input type="checkbox">
				  <span class="checkmark"></span>
				</label>
		  	</div>
		  	<div class="col">
 				<label class="container-chk">রং পেন্সিল
				  <input type="checkbox">
				  <span class="checkmark"></span>
				</label>
		  	</div>
		  </div>
		  <div class="col">
		  	
		  	<div class="col">
		  		<label class="container-chk">মাটির তৈরি সামগ্রী
				  <input type="checkbox">
				  <span class="checkmark"></span>
				</label>
		  	</div>
		  	<div class="col">
 				<label class="container-chk">ড্রয়িং পেপার
				  <input type="checkbox">
				  <span class="checkmark"></span>
				</label>
		  	</div>
		  </div>
		  <div class="col">
		  	
		  	<div class="col">
		  		<label class="container-chk">গাছের পাতা
				  <input type="checkbox">
				  <span class="checkmark"></span>
				</label>
		  	</div>
		  	<div class="col">
		  		<label class="container-chk">রঙ্গিন কাগজ
				  <input type="checkbox">
				  <span class="checkmark"></span>
				</label>
		  	</div>
		  </div>
		</div>

		<div class="row mt-3">
		  <div class="col">
			  <div class="col">
	        	<h6>পাঠদান প্রক্রিয়ার শিক্ষা উপকরণের ব্যস্তব ব্যবহার </h6>
	          </div>
	          <div class="col">
	          	<div class="row">
		          	<div class="col-6">
				  		<label class="container-chk">হ্যাঁ 
						  <input type="checkbox">
						  <span class="checkmark"></span>
						</label>
				  	</div>
				  	<div class="col-6">
				  	
				  		<label class="container-chk">না
						  <input type="checkbox">
						  <span class="checkmark"></span>
						</label>
					</div>
	          	</div>
			  	
			  	
			   </div>
		  	 
		  </div>
		  <div class="col">
			  <div class="col">
	        	<h6>শিক্ষক নিয়মিত পাঠদান বই ব্যবহার করেন কিনা?</h6>
	          </div>
	          <div class="col">
	          	<div class="row">
		          	<div class="col-6">
				  		<label class="container-chk">হ্যাঁ 
						  <input type="checkbox">
						  <span class="checkmark"></span>
						</label>
				  	</div>
				  	<div class="col-6">
				  	
				  		<label class="container-chk">না
						  <input type="checkbox">
						  <span class="checkmark"></span>
						</label>
					</div>
	          	</div>
			  	
			  	
			   </div>
		  	 
		  </div>
		</div>

		

 		<div class="col">
	         <div class="row mt-3">
	        	<div class="col ">
		        	<div class="row">
						   <label class="control-label col-4" for="email">পরিদর্শনকালে প্রকল্প নির্ধারিত পোষাক পরিহিত শিক্ষার্থী সংখ্যা (জন) :</label>
					      <div class="col-8 ">
					        <div class="input-group mb-3">
							  <input class="form-control" type="text" name="" id="" placeholder="">
							</div>
					      </div>
					</div>
					  
	        	</div>
	        	<div class="col ">
		        	<div class="row">
						     <label class="control-label col-4" for="email">নিকটবর্তী সরকারি প্রাথমিক বিদ্যালয় থেকে শিক্ষাকেন্দ্রের দূরত্ব  :</label>
					      <div class="col-8 ">
					        <div class="input-group mb-3">
							  <input class="form-control" type="text" name="" id="" placeholder="">
							</div>
					      </div>
					</div>
					  
	        	</div>
	        	
	        </div>

        </div>

        <div class="col">
	         <div class="row mt-3">
	        	<div class="col ">
		        	<div class="row">
						   <label class="control-label col-4" for="email">গত ৬ মাসে অনুষ্ঠিত কেন্দ্র মনিটরিং কমিটি সভার তারিখ উল্লেখ করুন</label>
					      <div class="col-8 ">
					        <div class="input-group mb-3">
							      <input class="form-control" type="date" value="2011-08-19" id="example-date-input">

							</div>
					      </div>
					</div>
					  
	        	</div>
	        	<div class="col ">
		        	<div class="row">
					      <div class="col-md-8 col-">
					        <div class="input-group mb-3">
							      <input class="form-control" type="date" value="2011-08-19" id="example-date-input">

							</div>

					      </div>
					</div>
					  
	        	</div>
	        	
	        </div>

        </div>


		<div class="col">
        	<h6 class="mt-3">পূর্ববর্তী পরিদর্শনকারী ব্যক্তির নাম, পরিচয় ও পরিদর্শনের তারিখ (পরিদর্শন রেজিস্টার অনুযায়ী) </h6>
        </div>

        <div class="col">      	
         <div class="row mt-5">      	
        		<div class="col">
        			<div class="row">
				      <label class="control-label col-4" for="pwd">নাম:</label>
				      <div class="col-8">          
						<div class="input-group mb-3">
						  
						     <input class="form-control" type="text" name="" id="" placeholder="">

						</div>				      
					 </div>
				  </div>
				  <div class="row">
				      <label class="control-label col-4" for="pwd">নাম:</label>
				      <div class="col-8">          
						<div class="input-group mb-3">
						  
						     <input class="form-control" type="text" name="" id="" placeholder="">

						</div>				      
					 </div>
				  </div>
				  <div class="row">
				      <label class="control-label col-4" for="pwd">নাম:</label>
				      <div class="col-8">          
						<div class="input-group mb-3">
						  
						     <input class="form-control" type="text" name="" id="" placeholder="">

						</div>				      
					 </div>
				  </div>
				   
        		</div>

        		<div class="col">
        			<div class="row">
				      <label class="control-label col-4" for="pwd">পরিচয়:</label>
				      <div class="col-8">          
						<div class="input-group mb-3">
						  
						     <input class="form-control" type="text" name="" id="" placeholder="">

						</div>				      
					 </div>
				  </div>
				  <div class="row">
				      <label class="control-label col-4" for="pwd">পরিচয়:</label>
				      <div class="col-8">          
						<div class="input-group mb-3">
						  
						     <input class="form-control" type="text" name="" id="" placeholder="">

						</div>				      
					 </div>
				  </div>
				  <div class="row">
				      <label class="control-label col-4" for="pwd">পরিচয়:</label>
				      <div class="col-8">          
						<div class="input-group mb-3">
						  
						     <input class="form-control" type="text" name="" id="" placeholder="">

						</div>				      
					 </div>
				  </div>
				   
        		</div>
        		<div class="col">
        			<div class="row">
				      <label class="control-label col-4" for="pwd">পরিদর্শনের তারিখ:</label>
				      <div class="col-8">          
						<div class="input-group mb-3">
						  
							      <input class="form-control" type="date" value="2011-08-19" id="example-date-input">

						</div>				      
					 </div>
				  </div>
				  <div class="row">
				      <label class="control-label col-4" for="pwd">পরিদর্শনের তারিখ:</label>
				      <div class="col-8">          
						<div class="input-group mb-3">
						  
							      <input class="form-control" type="date" value="2011-08-19" id="example-date-input">

						</div>				      
					 </div>
				  </div>
				  <div class="row">
				      <label class="control-label col-4" for="pwd">পরিদর্শনের তারিখ:</label>
				      <div class="col-8">          
						<div class="input-group mb-3">
						  
							      <input class="form-control" type="date" value="2011-08-19" id="example-date-input">

						</div>				      
					 </div>
				  </div>
				   
        		</div>
        		
        </div>
        </div>
        <div class="col">
        	<h6 class="mt-3">শিক্ষক কর্তৃক শিক্ষার্থীদের পাঠ মূল্যায়ন ব্যবস্থা</h6>
        </div>

        <div class="row mt-3">
		  <div class="col">
		  	<div class="col">
 				<label class="container-chk">মৌখিক
				  <input type="checkbox">
				  <span class="checkmark"></span>
				</label>
		  	</div>
		  </div>
		  <div class="col">
		  	<div class="col">
 				<label class="container-chk">লিখিত
				  <input type="checkbox">
				  <span class="checkmark"></span>
				</label>
		  	</div>
		  	
		  </div>
		  <div class="col">
		  	<div class="col">
 				<label class="container-chk">মৌখিক ও লিখিত উভয়ই
				  <input type="checkbox">
				  <span class="checkmark"></span>
				</label>
		  	</div>
		  
		  </div>
		 
		</div>

		<div class="col mt-3">
        	<h6 class="mb-3">কেন্দ্র পরিচালনার ক্ষেত্রে কেন্দ্র শিক্ষক কর্তৃক উত্থাপিত সমস্যা </h6>
        </div>
        <div class="col mb-2">
        	<textarea class="form-control" rows="2" hei id="">ক.</textarea>
        </div>
        <div class="col mb-2">
        	<textarea class="form-control" rows="2" id="">খ.</textarea>
        </div>
        <div class="col mb-2">
        	<textarea class="form-control" rows="2" id="">গ.</textarea>
        </div>

        <div class="col mt-3">
        	<h6 class="mb-3">বিশেষ মন্তব্য (যদি থাকে)</h6>
        </div>
        <div class="col mb-2">
        	<textarea class="form-control" rows="5" hei id=""></textarea>
        </div>
        <div class="col mt-3">
        	<h6 class="mb-3">পরিদর্শনকারীর সুপারিশ (যদি থকে)</h6>
        </div>
        <div class="col mb-2">
        	<textarea class="form-control" rows="5" hei id=""></textarea>
        </div>


        <div class="col mt-5">  	
        	<div class="row req2">
			<label class="control-label col-4" > Indicates required</label>
		   </div>
        </div>
        <div class="col mt-5 pb">  	
        	<button class="float-right btn-form"><i class="fas fa-window-close"></i> Clear</button>
        	 <button class="float-right btn-form mr-3"><i class="fa fa-folder"></i> Save</button>

        </div>
     

@stop

