 <head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/css/bootstrapValidator.css"/>
    <!---- AnyOther custom stylesheets ---->
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.0/jquery.js"></script>
    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.js"></script>
 

 </head>

  <form id="newpanform" method="post" action="" class="form-horizontal"
    data-bv-feedbackicons-valid="glyphicon glyphicon-ok"
    data-bv-feedbackicons-invalid="glyphicon glyphicon-remove"
    data-bv-feedbackicons-validating="glyphicon glyphicon-refresh">

                         
                       
                      <div class="shadow-soft p-3 mb-5 bg-white rounded">
                               <div class="col-lg-12">

                                    <h4>Applicant Details</h4>
                                  
                                                   
                                    <div class="form-group">
                                        <div class="form-row col-md-12">
                                            <div class="col-md-3">
                                                <label class="form-label">Select type of applicant</label>
                                            </div>
                                            <div class="col-md-9 ">
                                           <select id="pancard_type_id" name="pancard_type_id" class="form-control">
                                            <option>--Please Select Applicant--</option>
                                             <option value="new">New</option>
                                             <option value="existing">Existing</option>
                                           </select>


                                            </div>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <div class="form-row col-md-12">
                                            <div class="col-md-3">
                                                <label class="form-label">Category of Applicant</label>
                                            </div>
                                            <div class="col-md-9 ">
                                           <select id="pancard_applicant_category_id" name="pancard_applicant_category_id" class="form-control">
                                             <option>--Please Select Category--</option>
                                             <option value="1">individual</option>
                                             <option value="2">Firm</option>
                                              <option value="3">Asscociation of Person</option>
                                             
                                           </select>


                                            </div>
                                        </div>
                                      </div>
                                      <div id="panno" style="display: none;">
                                      <div class="form-group">
                                        <div class="form-row col-md-12">
                                            <div class="col-md-3">
                                                <label class="form-label">PAN Number</label>
                                            </div>
                                            <div class="col-md-9 ">
                                           <input type="text" name="panno" id="panno" class="form-control">


                                            </div>
                                        </div>
                                      </div>
                                    </div>
                                      <div id="bachatgat" style="display:none">
                                     <div class="form-group">
                                        <div class="form-row col-md-12">
                                            <div class="col-md-3">
                                                <label class="form-label">Bachat Gut Name</label>
                                            </div>
                                            <div class="col-md-9 ">
                                            <input type="text" id="bachat_gat_name" class="form-control" name="bachat_gat_name" placeholder="Bachat Gat Name" value="" class="form-control">


                                            </div>
                                        </div>
                                      </div>


                                       <div class="form-group">
                                        <div class="form-row col-md-12">
                                            <div class="col-md-3">
                                                <label class="form-label">Name of Bachat Gat on pan card</label>
                                            </div>
                                            <div class="col-md-9 ">
                                            <input readonly="" type="text" id="bachat_gat_pan" class="form-control" name="bachat_gat_pan" placeholder="Bachat Gat pan Name" value="" >
                                            </div>
                                        </div>
                                      </div>
                                    </div>

                                 
<div id="association" style="display: none">
    <div class="form-group">
      <div class="form-row col-md-12">                        
        <div class="col-md-3">
          <label class="form-label">Applicant Name <span class="text-danger">*</span></label></div>
        <div class="col-md-9">
          <div class="form-row"> 
             <div class="col-md-4">
               <div class="form-group">                                 
          
                  <div class="js-form-message js-focus-state">
                      <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name" required data-msg="Please enter your last name."data-error-class="u-has-error" data-success-class="u-has-success">
                </div>
              </div></div>
              <div class="col-md-4">
                <div class="form-group">                                 
          
                  <div class="js-form-message js-focus-state">
                    <input name="first_name" placeholder="First Name" type="text" id="first_name" class="form-control" required data-msg="Please enter your first name." data-error-class="u-has-error"data-success-class="u-has-success">
                  </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">                                 
          
               <div class="js-form-message js-focus-state">
                <input name="middle_name" placeholder="Middle Name" type="text" id="middle_name" class="form-control" required data-msg="Please enter your Middle name." data-error-class="u-has-error" data-success-class="u-has-success">
              </div>
            </div>
        </div>
    </div>
  </div>
</div>
      <div class="form-group">
          <div class="form-row col-md-12">                       
           <div class="col-md-3"><label class="form-label">Father's Name</label></div>
          <div class="col-md-9">
            <div class="form-row">                                  
                <div class="col-md-4">
                  <div class="form-group">                                 
                  <div class="js-form-message js-focus-state">
                      <input name="father_last_name" id="father_last_name" placeholder="Last Name" type="text" class="form-control" required data-msg="Please Fill this Field ." data-error-class="u-has-error"data-success-class="u-has-success">
                    </div>
                  </div>
                </div>
            <div class="col-md-4">
              <div class="form-group">                                 
          
                <div class="js-form-message js-focus-state">
                    <input name="father_first_name" id="father_first_name" placeholder="First Name" type="text" class="form-control" required data-msg="Please Fill this Field ." data-error-class="u-has-error"data-success-class="u-has-success">
                </div>
            </div>
          </div>

        <div class="col-md-4"> 
        <div class="js-form-message js-focus-state">
          <input name="father_middle_name" id="father_middle_name" placeholder="Middle Name" type="text" class="form-control" required data-msg="Please Fill this Field ." data-error-class="u-has-error" data-success-class="u-has-success"></div></div>
        </div>
    </div>
    </div>
</div>
<div class="form-group">
    <div class="form-row col-md-12">
      <div class="col-md-3"><label class="form-label">Name as per Aadhaar</label></div>
      <div class="col-md-9">
          <div class="form-row">      
            <div class="js-form-message js-focus-state">
              <input name="adhar_name" id="adhar_name" placeholder="Name as per Aadhaar" type="text" class="form-control" maxlength="12"required data-rule-maxlength="12" data-msg="only 12 digits" data-error-class="u-has-error"
data-success-class="u-has-success">
          </div>                              
        </div>
      </div>                            
    </div>
</div>

  <div class="form-group"> 
        <div class="form-row col-md-12">        
            <div class="col-md-3"><label class="form-label">Name On Pancard</label></div>
              <div class="col-md-9">
                <div class="form-row">                                    
                    <div class="js-form-message js-focus-state">
                        <input name="pan_name" id="pan_name" placeholder="Name On Pancard" type="text" class="form-control"required data-msg="only 12 digits" data-error-class="u-has-error" data-success-class="u-has-success">
                    </div>
                </div>
              </div>
          </div>
      </div> 
</div>   

  <div id="association1" style="display: none;">
    <div class="form-group">
        <div class="form-row col-md-12">
            <div class="col-md-3"><label class="form-label">Gender</label></div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="gender" value="option1">
                    <label class="form-check-label" for="inlineRadio1">Female</label>
                </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="gender" value="option2">
                 <label class="form-check-label" for="inlineRadio2">Male</label>
            </div>
        </div>
      </div>
    <div class="form-group"> 
        <div class="form-row col-md-12">
            <div class="col-md-3"><label class="form-label">Date of Birth</label></div>
              <div id="datepickerWrapper" class="u-datepicker w-auto input-group">
                 <div class="input-group-prepend">
                    <span class="input-group-text">
                      <span class="fas fa-calendar"></span>
                    </span>
                </div>
                  <input class="js-range-datepicker form-control bg-transparent rounded-right" type="date"
                    data-rp-wrapper="#datepickerWrapper"
                    data-rp-type="range"
                    data-rp-date-format="d/m/y"
                    data-rp-default-date='["05/07/18", "31/07/18"]'>
                </div>
             </div>
      </div>
                                   
<div class="form-group">
        <label class="col-lg-3 control-label">Adhar number</label>
        <div class="col-lg-4">
            <input type="text" class="form-control" name="adhar_no"
                data-bv-regexp="true"
                data-bv-regexp-regexp="^\d{12}$"
                data-bv-regexp-message="please enter valid adhar number falak"
                 />
        </div>
    </div>

</div>
</div>

</div>
  <div class="shadow-soft p-3 mb-5 bg-white rounded">
      <div class="row">
        <div class="col-md-12">
            <h4>CONTACT DETAILS</h4>
                <div class="form-group">
                    <div class="form-row col-md-12">
                      <div class="col-md-3"><label class="form-label">Mobile</label>
                      </div>
                      <div class="col-md-9">
                          <div class="js-form-message js-focus-state">
                              <input  name="mobile_no" placeholder="Mobile" type="text" id="mobile_no" class="form-control" required="" data-msg="Fill proper name field" data-error-class="u-has-error"data-success-class="u-has-success">
                         </div>
                      </div>
                    </div>
                  </div> 
                <div class="form-group">
                   <div class="form-row col-md-12">
                      <div class="col-md-3"><label class="form-label">Email ID</label>
                      </div>
                      <div class="col-md-9">
                        <div class="js-form-message js-focus-state">
                          <input name="aadharmiddlename" placeholder="Email" type="email" id="aadhar_middlename" class="form-control" required data-msg="Fill proper email field" data-error-class="u-has-error" data-success-class="u-has-success">
                        </div>
                      </div>
                    </div>  
                </div> 
          </div>
        </div>
    </div>

                                    
                               
            <div id="ao_code" style="display: block;">    
                <div class="shadow-soft p-3 mb-5 bg-white rounded">
                  <div class="col-lg-12">             
                   <div class="form-content">
                    <h4>Address Information</h4>                 
                        <div class="form-row"> 
                         <div class="col-md-3">
                         
                         <div class="form-group">                                               
                            <input type="text" name="ao_code" id="ao_code" class="form-control" placeholder="AO CODE">                                  
                        </div>
                      </div>
                          <div class="col-md-3">
                            <div class="form-group">
                                 <input name="ao_type" type="text" id="ao_type" class="numeric form-control"  placeholder="AO TYPE">
                                                              
                          </div>
                        </div>
                         <div class="col-md-3">
                            <div class="form-group">
                               <input name="range_code" type="text" id="range_code" class="numeric form-control"  placeholder="RANGE" required data-msg="Fill this field" data-error-class="u-has-error"data-success-class="u-has-success">
                          </div>                                   
                        </div>
                        <div class="col-md-3">
                           <div class="form-group">
                               <input name="ao_no" type="text" id="ao_no" class="numeric form-control"  placeholder="AO Number" required  data-msg="Fill this field" data-error-class="u-has-error"data-success-class="u-has-success">
                            </div>
                          </div>
                            <div class="col-md-12 notecss"><a href="https://tin.tin.nsdl.com/pan2/servlet/AOSearch" target="blank">Find AO Code Here</a></div>
                          <div class="col-md-12" style="text-align: center;">  
                              <input type="Submit" class="btn btn-primary" name="save" value="Submit & pay" >
                          </div>
                      </div>
                  </div>
                
            </div>
        </div>
      </div>
  </div>
</form>


<script>
$(document).ready(function(){


  $("#pancard_type_id").change(function(){
   // alert("The text has been changed.");
   if(this.value === 'existing')
  {
    $("#panno").show();
    $("#ao_code").hide();
  }
  else
  {
    $("#panno").hide();
  }

  if(this.value === 'new')
  {
      $("#ao_code").show();

  }
  });



  $("#pancard_applicant_category_id").change(function(){
   // alert("The text has been changed.");
   if(this.value === '3')
  {
    $("#bachatgat").hide();
   $("#association1").show();
    $("#association").show();
    $("#ao_code").show();
  }
  else
  {
    $("#bachatgat").hide();
    $("#association1").show();
    $("#association").show();
  }
  });


});
</script>
<script>
$(document).ready(function() {
    $('#newpanform').bootstrapValidator();
});
</script>