<?php 
	$title="Community Page";
	include('c-top.php'); ?>
	<body>
			<div class="inner-wrapper">
					<!-- start: page -->
						<section class="panel" style="padding:10px 10px 10px 10px">
							<header class="panel-heading">
							<h2 class="panel-title">CodeBinary Initiatives <small>Where Passion meets Purpose</small></h2>
							</header>
							<div class="panel-body">
								<table class="table table-bordered table-striped mb-none" id="datatable-default">
									<thead>
										<tr>
											<th>Name</th>
											<th>Position</th>
											<th>Institution</th>
											<th>Reference Code</th>
											<th>E-mail</th>
										</tr>
									</thead>
									<tbody>
									<?php
									while($coreT = mysqli_fetch_array($coreT_sql,MYSQLI_ASSOC))
									{
										echo "
											<tr>
											<td> " . $coreT['fname'] . ' ' . $coreT['lname'] . "</td>
											<td> " . $coreT['position'] . '' . $coreT['domain'] . ', ' . $coreT['division'] . "</td>
											<td> " . $coreT['institution'] . "</td>
											<td>" . $coreT['reference_code'] . "</td>
											<td><a href='mailto:" . $coreT['email'] . "'><i class='fa fa-envelope-o'></i></a></td>
										</tr>
										";
										
									}
									?>
									
									<?php
									while($internT = mysqli_fetch_array($internT_sql,MYSQLI_ASSOC))
									{
										echo "
											<tr>
											<td> " . $internT['fname'] . ' ' . $internT['lname'] . "</td>
											<td> " . $internT['position'] . ' ' . $internT['domain'] . ', ' . $internT['division'] . "</td>
											<td> " . $internT['institution'] . "</td>
											<td>" . $internT['reference_code'] . "</td>
											<td><a href='mailto:" . $internT['email'] . "'><i class='fa fa-envelope-o'></i></a></td>
										</tr>
										";
										
									}
									?>
									
									</tbody>
								</table>
								
								
								
								<p class="text-center text-muted mt-md mb-md"><strong><a href="http://codebinary.in/">CodeBinary Initiatives</a></strong><br> Registered Under <strong>Ministry of Micro, Small & Medium Enterprises, GoI</strong></strong></a>.</p>

							</div>
						</section>
					<!-- end: page -->
					
					
				</section>
			</div>

	<?php include('c-bottom.php') ?>
	</body>
</html>