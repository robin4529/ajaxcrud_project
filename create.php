<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Development Area</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
	
	

	<div class="wrap-table shadow">
		<button id="button" class="btn btn-primary">Add New</button>
	
		<div class="add_data">
		
			<div class="msg"></div>
			
			
		<div class="card">
			<div class="card-body">
				<button id="close_data" class="close">&times;</button>

				<form id="user_form"  action="" class="form-inline" method="POST" >
					<div class="form-group ml-2">
						<input name="name" class="form-control " type="text" placeholder="Name">
					</div>
					<div class="form-group ml-2">
						<input name="email" class="form-control " type="text" placeholder="Email">
					</div>
					<div class="form-group ml-2">
						<input name="cell" class="form-control " type="text" placeholder="Cell">
					</div>
					<div class="form-group ml-2">
						<input name="submit" type="submit" class="btn btn-info" value="Add" id="add">
					</div>
				</form>
				
			</div>
			</div>
		</div>
		
		
		<div class="card">
			<div class="card-body">
				<h2>All Data</h2>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>Email</th>
							<th>Cell</th>
							<th>Photo</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody id="user_data">
						

					</tbody>
				</table>
			</div>
		</div>
	</div>
	







	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
	<script>
			 $('#button').click(function(){
					$('.add_data').show();
			 })
			 $('#close_data').click(function(){
				
					$('.add_data').hide();
					$('.msg').html('');
			 })
			 $('#user_form').submit(function(e){
				 e.preventDefault();

				 $.ajax({
					 url : 'content.php',
					method : 'POST',
					data:new FormData(this),
					processData: false,
   					contentType: false,
   					
					 success :function(data){
						$('#user_form')[0].reset();
						$('.msg').html(data);
						datasend();
						
					 }
				 });

			 });

		 datasend();
			  function datasend(){

				  $.ajax({ 
					   url : 'data.php',
				  success : function(data){
						$('#user_data').html(data);
				  }
				  });
				
			  }
		
		
	</script>
</body>
</html>


