<!DOCTYPE html>
<html>
<head>
	<title>Data Table With Ajax</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-6 offset-lg-3">
		<h1>Data Table Insert SAM</h1>
			<?php if($mess = $this->session->flashdata('message')):?>
                <div class="alert alert-danger">
                  <?= $mess; ?>
                </div>
            <?php endif;?>
			<form id="submitForm" method="post" >
				<div class="form-group">
				    <label for="exampleInputEmail1">Name</label>
				    <?php
				    	$name = [
				    		'name'  =>	'name',
				    		'class' =>	'form-control',
				    		'id'	=>	'',
				    		'required'=>'required',
				    	];
				    echo form_input($name);
				    ?>
				</div>
				<div class="form-group">
				    <label for="exampleInputEmail1">Title</label>
				    <?php
				    	$title = [
				    		'name'  =>	'title',
				    		'class' =>	'form-control',
				    		'required'=>'required',
				    		'id'	=>	'',
				    	];
				    echo form_input($title);
				    ?>
				</div>
				<div class="form-group">
				    <label for="exampleInputEmail1">Description</label>
				    <?php
				    	$des = [
				    		'name'  =>	'des',
				    		'class' =>	'form-control',
				    		'required'=>'required',
				    		'id'	=>	'',
				    	];
				    echo form_input($des);
				    ?>
				</div>
				<div class="form-group">
				<button type="button" id="btnSubmit" class="btn btn-primary">Submit</button>
					</form>
				</div>

				</form>

		</div>
	</div>
</div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
	$("#btnSubmit").click(function(e){

			e.preventDefault();

		$.ajax({
			url:'/ajax/DataTable/insert',
			type:'POST',
			data: $("form").serialize(),
			cache:false,
			beforeSend: function(data){
				alert($('form#submitForm').serialize());
			},
			success: function(data){
				alert('sam done');
			},
			error: function(data) {
				alert(JSON.stringify(data));
			},

			complete: function() {
					 
			}
		});
		});



		
	});

</script>



</body>
</html>