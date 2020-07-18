
<head>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css"/>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/css/bootstrapValidator.css"/>
    <!---- AnyOther custom stylesheets ---->
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.0/jquery.js"></script>
    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.js"></script>
  
</head>

<form id="regexpForm" class="form-horizontal">
    <div class="form-group">
        <label class="col-sm-3 control-label">Full name</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" name="fullName" />
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">Adhar Number</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" name="adhar_no" />
        </div>
    </div>

</form>
<form>
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

                                 
<div id="association">
    
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

  <div id="association1" style="">
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
    <div class="form-row col-md-12">        
       <div class="col-md-3"><label class="form-label">Enter Adhaar Number</label></div>
       <div class="col-md-9">
          <div class="form-row">                                    
            <input name="adhar_no" placeholder="Aadhaar Number" type="text" class="form-control">  
         </div>
      </div>
  </div>
</div>
 <div class="form-group">
        <label class="col-sm-3 control-label">Adhar Number</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" name="adhar_no" />
        </div>
    </div>

</div>
</div>

</div>
<script>
    
    $(document).ready(function() {
    $('#regexpForm').bootstrapValidator({
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            fullName: {
                validators: {
                    regexp: {
                        regexp: /^[a-z\s]+$/i,
                        message: 'The full name can consist of alphabetical characters and spaces only'
                    }
                }
            },
            adhar_no: {
                validators: {
                    regexp: {
                        regexp: /^\d{12}$/,
                        message: 'only 12 digits'
                    }
                }
            }
        }
    });
});
</script>