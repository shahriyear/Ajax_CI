<!DOCTYPE html>
<html>
<head>
	<title>Data Table With Ajax</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="<?= base_url('assets/sweet/sweetalert2.min.js');?>"></script>
<link rel="stylesheet" href="<?= base_url('assets/sweet/sweetalert2.min.css')?>">

</head>
<body>
<div class="container">
	
	
	<div class="row">
		<div class="col-md-6 offset-lg-3">
		<h1>Data Table Insert</h1>
			<p id="succ_mess"></p>
			<form id="submitForm">
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
				<span class="er" id="ename"></span>
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
				<span class="er" id="etitle"></span>

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
	<!-- <div  id="show_h" class="row">
		<h1>this is display none block</h1>
	</div> -->
	<div class="row">
		<table class="table">
			<thead>
			<tr>
				<td>Title</td>
				<td>Name</td>
				<td>Des</td>
				<td></td>
			</tr>
			</thead>
			<tbody id="dataTableView">
			</tbody>
		</table>
	</div>
</div>

<style>
	/*.d_block{
		display: none;
	}*/
	.abc{
		display: block !important;
	}
</style>
  
<script type="text/javascript">

$(document).ready(function(){


	get_data();

	// $('#show_h').hide();

	$("#btnSubmit").click(function(e){
		e.preventDefault();

		$.ajax({
			url:'/ajax/DataTable/insert',
			type:"POST",
			data:$("form").serialize(),
			cache:false,
			success:function(data){
				var obj = $.parseJSON(data);
				console.log(obj);
				if(obj === "OK"){
					noti('success','Save Successfully');
					$('.er').html('');
					$("form").get(0).reset();
					get_data();
				}else{
					noti('info','Something Went Wrong Try Again!');
					$("#ename").html(obj['name']);
					$("#etitle").html(obj['title']);
				}
				
				if(obj === "QF"){
					noti('warning','Query Failed');
				}
			},
			error:function(data){
				noti('error','Failed to Save');
			}

		});

	});

	function noti(type,title){
		const toast = swal.mixin({
		          toast: true,
		          position: 'top-end',
		          showConfirmButton: false,
		          timer: 3000
		        });

		        toast({
		          type: type,
		          title: title
		        })
	}

	function get_data(){
		$.ajax({
		        type  : 'ajax',
		        url   : 'DataTable/all',
		        async : false,
		        dataType : 'json',
		        success : function(data){
				var html = '';
		            var i;
		            for(i=0; i<data.length; i++){
		                html += '<tr>'+
			                        '<td>'+data[i].name+'</td>'+
			                  		'<td>'+data[i].title+'</td>'+
			                        '<td>'+data[i].des+'</td>'+
			                        '<td style="text-align:right;">'+
                                    '<a href="javascript:void(0);" class="btn btn-info btn-sm item_edit" data-product_code="'+data[i].id+'" data-product_name="'+data[i].name+'" data-price="'+data[i].des+'">Edit</a>'+' '+
                                    '<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-product_code="'+data[i].id+'">Delete</a>'+
                                '</td>'+
		                        '</tr>';
		            }
		            $('#dataTableView').html(html);
				}

		});
	}


});
   


</script>



</body>
</html>