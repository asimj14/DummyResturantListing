<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="Description" content="Demo FairHire">
	<title>Index</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
	<div class="jumbotron text-center">
		<h1> Resturants Listing </h1>
	</div>
	<div class="row justify-content-center">
			<Button type="button" class="btn btn-primary" value="Q_ENT_CATEGORY" name="displybtn" id="displybtn">Display Data</Button>
	</div>
	<br>
	<div class="container">
		<div class="table-responsive table-responsive-sm">
			<table id="jTable" class="table table-striped table-bordered">
				<tr >
					<th>Q_ENT_CAT_ID</th>
					<th>ENTITY_ID</th>
					<th>BRAND_ID</th>
					<th>QCAT_1</th>
				</tr>
				</thead>
				<tbody id="tData">
				</tbody>
			</table>
		</div>
		<button type="button" class="btn btn-primary" value="showmore" name="showmore_btn" id="showmore_btn">Show More</button>
		<button type="button" class="btn btn-secondary" value="showless" name="showless_btn" id="showless_btn">Show Less</button>
	</div>
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"   integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="   crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" integrity="sha384-1CmrxMRARb6aLqgBO7yyAxTOQE2AKb9GfXnEo760AUcUmFx3ibVJJAzGytlQcNXd" crossorigin="anonymous"></script>
	<script src="demo.js"></script>
</body>
</html>