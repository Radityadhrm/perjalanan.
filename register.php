<!DOCTYPE html>
<html lang="en" >
	<head>
		<meta charshet="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!- - Boostrap CSS - ->
		<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">
		<!- - My CSS - ->
		<link rel="stylesheet" type="text/css" href="style.css">
		<!- - Boostrap ICON - ->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
		<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:400,700'>
		<link rel="shortcut icon" href="asset/img/logo/logo.png">
		<title>Aplikasi Catatan Perjalanan</title>
	</head>
	
	<body>
	<! -- partial:index.partial.html -->
		<div class="login-form">
			<form action="tambah_register.php"method="POST">
				<h1><img src="kcp.png"height="50px"><p>Register / Daftar Pengguna Baru</h1>
					<div class="content">
						<div class="input-field">
							<input type="number"name="nik" placeholder="Masukan NIK"required>
						</div>
						<div class="input-field">
							<input type="text"name="nama" placeholder="Masukan Nama Lengkap"required>
						</div>
					</div>
		<div class="action">
			<button onclick="window.location.href='register.php'" class="btn mr-2">Cancel</button>
			<button type="submit">Register</button>
		</div>
			</form>
		</div>
<! -- partial -- >
<script src="script.js"></script>
	</body>
</html>