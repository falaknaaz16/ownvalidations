<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

enter number:<input type="text" name="panNumber" id="panNumber" >
<input type="submit" name="submit" onclick="check()">

</body>
<!-- <script type="text/javascript">

    function check() {
        // body...
    
    var panVal = $('#panNumber').val();
var regpan = /^([a-zA-Z]){5}([0-9]){4}([a-zA-Z]){1}?$/;

if(regpan.test(panVal)){
   alert("valid pan card number");
} else {
   alert("invalid pan card number");
}

}
</script>
 -->
 <script src="bootstrap-validate/dist/bootstrap-validate.js"></script>
<script>
	bootstrapValidate('#panNumber', 'min:5:Enter at least 5 Characters');

   // if (isValid) {
   //     alert('Element is valid');
   // } else {
   //     alert('Element is invalid');
   // }

</script>
</html>