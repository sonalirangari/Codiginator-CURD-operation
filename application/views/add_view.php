<!DOCTYPE html>
<html>
	<head>
		<title> Student Form </title>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/forms.css')?>">
		<script type="text/javascript" src="<?php echo base_url('assets/js/form.js')?>"></script>
	</head>
	<body>
		<div style="width: 100%;">
			<section style="margin: auto; width: 50%; padding: 10px;">
				<div class="form-div">
                                    <a href="<?php echo base_url(); ?>" style="color: cyan">Back</a>
					<form class="myform" method="post" action="<?php echo site_url('home/add');?>">	
						<table>
							<tbody>
								<tr>
									<td>
										<label>First Name</label>
									</td>
									<td>
										<input  type="text" name="fname" id="fname" class="fname"/>
									</td>
								</tr>
								<tr>
									<td>
										<label>Last Name</label>
									</td>
									<td>
										<input type="text" name="lname" id="lname" class="lname"/>
									</td>
								</tr>
								<tr>
									<td>
										<label>Email </label>
									</td>
									<td>
										<input type="email" name="email" id="email" class="email">
									</td>
								</tr>
								<!-- <tr>
									<td>
										<label>Password </label>
									</td>
									<td>
										<input type="password" name="password" id="password" class="password">
									</td>
								</tr> -->
							</tbody>
						</table>
						<input class="btn btn-success" type="submit" name="submit" value="SUBMIT">
<!--						<br><br>-->
						<input class="btn btn-primary" type="reset" name="reset" value="RESET" />
					</form>
				</div>
			</section>
		</div>
		<script type="text/javascript" src="<?php echo base_url('assets/js/node_modules/jquery/dist/jquery.min.js')?>"></script>
	</body>
</html>