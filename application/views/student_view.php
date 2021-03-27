<!DOCTYPE html>
<html>
	<head>
		<title> Student Form</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/forms.css')?>">
		<script type="text/javascript" src="<?php echo base_url('assets/js/form.js')?>"></script>
                    <style>
                    table, th, td {
                      border: 1px solid black;
                    }
                    </style>
	</head>
	<body>
            
		<div style="width: 100%;">
                    
			<div>
				<a href="<?php echo base_url('home/addstudent'); ?>" style="color: cyan; width: 30px ; font-size: 20px; margin-left: 100px">Add Student</a>
			</div>
			<section style="margin: auto; width: 50%; padding: 10px;">
				<table  style="background-color: #ffffff;">
					<thead>
                                        
						<tr>
							<td>Roll No</td>
							<td>First Name</td>
							<td>Last Name</td>
							<td>Email</td>
							<td>Action</td>

						</tr>
				    </thead>
				    <tbody>
				    	<?php
				    	if (!empty($student)) {
				    	foreach ($student as $list) {
				    	 ?>
				    	 <tr>
				    	 	<td><?php echo $list['student_id'];?></td>
				    	 	<td><?php echo $list['fname'];?></td>
				    	 	<td><?php echo $list['lname'];?></td>
				    	 	<td><?php echo $list['email'];?></td>
				    	 	
				    	 	<td>
				    	 		<a href="<?php echo base_url('home/editstudent/'.$list["student_id"].''); ?>">Edit</a>
				    	 		<a href="<?php echo base_url('home/deletestudent/'.$list["student_id"].''); ?>">Delete</a>
                                                        <a href="<?php echo base_url('home/view_student/'.$list["student_id"].''); ?>">View</a>
				    	 		<!-- <a href="<?php echo base_url('home/changepassword/'.$list["student_id"].''); ?>">Change Password</a> -->
				    	 	</td>
				    	 </tr>
				    	 <?php  
				    	                             }
				    	                          }
				    	?>	
				    	
				    </tbody>
				</table>
			</section>
		</div>
		<script type="text/javascript" src="<?php echo base_url('assets/js/node_modules/jquery/dist/jquery.min.js')?>"></script>
	</body>
</html>
