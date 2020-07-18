
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