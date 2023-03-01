
    <div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box ">
					<div class="left">
						<div class="content">
							<div class="header">
								<div class="logo text-center"><img src="assets/img/logoekskul.jpg" alt="Logo CS50's School" width="300" height="150"></div>
								<p class="lead">Login to your account</p>
								<?php echo $this->session->flashdata('notify');?>
							</div>
							<?php echo form_open('login/signin',array('class' => 'form-auth-small'));?>
							    
								<div class="form-group">
									<label for="signin-email" class="control-label sr-only">Username</label>
									<input type="text" class="form-control" id="signin-email" name="username" placeholder="Username">
								</div>
								<div class="form-group">
									<label for="signin-password" class="control-label sr-only">Password</label>
									<input type="password" class="form-control" id="signin-password" name="password" placeholder="Password">
								</div>
								
								<input type="submit" name="submit" class="btn btn-primary btn-lg btn-block" value="Login to..">
								
							<?php echo form_close();?>
							<br><center><p>Final Project @ <a href='https://cs50.harvard.edu/indonesia/2023/project/' title='https://cs50.harvard.edu/indonesia/2023/project/' target='https://cs50.harvard.edu/indonesia/2023/project/'>CS50x Indonesia</a></p></center>
							
						</div>
					</div>
					<div class="right">
						<div class="overlay"></div>
						<div class="content text">
							<h1 class="heading">Extracurricular Management Information System </h1>
							<p>CS50's School Extracurricular Activities</p>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	