<html>
<head>
	<title>Newsletter</title>
	
	<link rel="stylesheet" href="<?php echo base_url();?>css/main.css" type="text/css"/>
	<style type="text/css">
	
	label{
		display:block;
	}
	
	.error{
		color:red;
	}
	
	input[type=submit]{
		cursor:pointer;
		border: 1px solid green;
		background:yellow;
		padding:.5em;
	}
	
	</style>
	
</head>
<body>

<div id="newsletter_form">



	<?php echo form_open('email/send'); //this creates the following <form method="post" action="http://codeigniter/index.php/email/send"
	 ?>
	 <?php
	 
	 $name_data=array(
	 	'name'=> 'name',
	 	'id'=>'name',
	 	'value'=>set_value('name')
	 
	 );	 ?>
	 <!-- this input uses an array to pass get its data -->
	 <p> <label for="name">Name:</label><?php echo form_input($name_data); ?> </p>
	 <!-- this input inputs the information directly -->
	 <p> <label for="email">Email:</label><input type="text" name="email" id="email" value="<?php echo set_value('email');?>"> </p>
	 <p> <?php echo form_submit('submit', 'Submit');//two parameters refer to name and value ?></p>
	
	<?php echo form_close(); ?>
	

<?php echo validation_errors('<p class="error">'); ?><!-- Print out the validation errors -->
	
	
</div>
</body>
</html>