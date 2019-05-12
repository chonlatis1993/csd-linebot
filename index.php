<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>CSD S1</title>
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/cus.css">
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/popper.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="liff_search.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Sarabun|Roboto" rel="stylesheet">
		<link rel="shortcut icon" type="image/x-icon" href="assets/images/pea-logo.png" />
	</head>
	<body>
		<header style="margin-bottom: 70px;">
			<nav class="shadow-sm navbar fixed-top navbar-light bg-white">
				<!-- Brand/logo -->
				<a class="navbar-brand font-weight-bold" href="#!">
					<img src="assets/images/pea-logo.png" alt="logo" style="width:100px;">
					สถานะเบอร์โทรศัพท์
				</a>
			</nav>
		</header>
		<main>
			<div class="container mt-2">
				<div clas="row row-center">
					<div class="col-lg-12">
						<div class="form-group">
							<select class="form-control" id="office_select">
								<option selected disabled>--เลือกหน่วยงาน--</option>
								<option value="j091">กฟต.1</option>
								<option value="j092">กฟจ.</option>
								<option value="j093">กฟจ.</option>
								<option value="j094">กฟจ.</option>
							</select>
						</div>						
						<div class="form-group">
							<button type="button" class="btn btn-primary btn-block" onclick="search()">ค้นหา</button>
						</div>
					</div>
				</div>
			</div>
			<div class="container mt-2">
				<div class="row">
					<div class="col-lg-12">
					<p id="search_result"></p>
					</div>
				</div>
				<div class="row" id="card-area">
					<!--Card Area-->
				</div>
			</div>
		</main>
	</body>
</html>
