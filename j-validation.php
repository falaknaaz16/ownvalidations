<head>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css"/>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/css/bootstrapValidator.css"/>
    <!---- AnyOther custom stylesheets ---->
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.0/jquery.js"></script>
    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.js"></script>
  
</head>
<form id="panform" class="form-horizontal"
    data-bv-feedbackicons-valid="glyphicon glyphicon-ok"
    data-bv-feedbackicons-invalid="glyphicon glyphicon-remove"
    data-bv-feedbackicons-validating="glyphicon glyphicon-refresh">

    <div class="form-group">
        <label class="col-lg-3 control-label">Full name</label>
        <div class="col-lg-4">
            <input type="text" class="form-control" name="fullName"
                data-bv-regexp="true"
                data-bv-regexp-regexp="^[a-z\s]+$"
                data-bv-regexp-message="The full name can consist of alphabetical characters and spaces only" />
        </div>
    </div>
        <div class="form-group">
        <label class="col-lg-3 control-label">Adhar number</label>
        <div class="col-lg-4">
            <input type="text" class="form-control" name="adhar_no"
                data-bv-regexp="true"
                data-bv-regexp-regexp="^\d{12}$"
                data-bv-regexp-message="please enter valid adhar number falak" />
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label">Pan number</label>
        <div class="col-lg-4">
            <input type="text" class="form-control" name="pan_num"
                data-bv-regexp="true"
                data-bv-regexp-regexp="^[A-Z]{5}\d{4}[A-Z]{1}$"
                data-bv-regexp-message="please enter valid PAN NUMBER** falak" />
        </div>
    </div>
    <div class="form-group">
    <div class="form-row col-md-12">
      <div class="col-md-3"><label class="form-label">Name as per Aadhaar</label></div>
      <div class="col-md-9">
          <div class="form-row">      
            <div class="js-form-message js-focus-state">
              <input name="adhar_name" id="adhar_name" placeholder="Name as per Aadhaar" type="text" class="form-control" data-msg="only 12 digits" data-error-class="u-has-error" pattern="^\d{12}$" 
data-success-class="u-has-success">
          </div>                              
        </div>
      </div>                            
    </div>
</div>
<div id="association" style="">
    <div class="form-group">
      <div class="form-row col-md-12">                        
        <div class="col-md-3">
          <label class="form-label">Applicant Name <span class="text-danger">*</span></label></div>
        <div class="col-md-9">
          <div class="form-row"> 
             <div class="col-md-4">
               <div class="form-group">                                 
          
                       <input type="text" class="form-control" name="fullName"
                data-bv-regexp="true"
                data-bv-regexp-regexp="^[a-z\s]+$"
                data-bv-regexp-message="The full name can consist of alphabetical characters and spaces only" />
    
                </div>
              </div></div>
              <div class="col-md-4">
                <div class="form-group">                                 
          
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
                        <input name="pan_name" id="pan_name" placeholder="Name On Pancard" type="text" class="form-control"required data-msg="only 12 digits" data-error-class="u-has-error" data-success-class="u-has-success" >
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
        <label class="col-lg-3 control-label">Adhar number</label>
        <div class="col-lg-4">
            <input type="text" class="form-control" name="adhar_no">
                 </div>
    </div>

</div>
</div>

</div>
</form>
<script>
$(document).ready(function() {
    $('#panform').bootstrapValidator();
});
</script>