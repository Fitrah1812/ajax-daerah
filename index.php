<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Pencarian Daerah</title>
    <script type="text/javascript">
        $(document).ready(function(){
            $.ajax({
                type: 'POST',
                url: "get_provinsi.php",
                cache: false, 
                success: function(msg){
                $("#provinsi").html(msg);
                }
            });
    
            $("#provinsi").change(function(){
            var provinsi = $("#provinsi").val();
                $.ajax({
                    type: 'POST',
                    url: "get_kabupaten.php",
                    data: {provinsi: provinsi},
                    cache: false,
                    success: function(msg){
                    $("#kabupaten").html(msg);
                    }
                });
            });
    
            $("#kabupaten").change(function(){
            var kabupaten = $("#kabupaten").val();
                $.ajax({
                    type: 'POST',
                    url: "get_kecamatan.php",
                    data: {kabupaten: kabupaten},
                    cache: false,
                    success: function(msg){
                    $("#kecamatan").html(msg);
                    }
                });
            });
    
            $("#kecamatan").change(function(){
            var kecamatan = $("#kecamatan").val();
                $.ajax({
                    type: 'POST',
                    url: "get_kelurahan.php",
                    data: {kecamatan: kecamatan},
                    cache: false,
                    success: function(msg){
                    $("#kelurahan").html(msg);
                    }
                });
            });
        });
    </script>
</head>
<body>
<nav class="navbar navbar-dark bg-primary fixed-top">
  <a class="navbar-brand" href="index.php" style="color: #fff;">
    Fitrah Arie Ramadhan
  </a>
</nav>
<center>
<div class="container mb-20">
	<h2 align="center" style="margin: 60px 10px 10px 10px;">Pilihan Daerah</h2><hr>
	<div class="row">
		<div class="col-sm-12">
			<div class="form-group">
				<b><label>Provinsi</label></b>
				<select class="form-control" name="provinsi" id="provinsi">
					<option value=""> Pilih Provinsi</option>
				</select>
			</div>
			
			<div class="form-group">
				<b><label>Kabupaten</label></b>
				<select class="form-control" name="kabupaten" id="kabupaten">
					<option value=""></option>
				</select>
			</div>
 
			<div class="form-group">
				<b><label>Kecamatan</label></b>
				<select class="form-control" name="kecamatan" id="kecamatan">
					<option value=""></option>
				</select>
			</div>
 
			<div class="form-group">
				<b><label>Kelurahan</label></b>
				<select class="form-control" name="kelurahan" id="kelurahan">
					<option value=""></option>
				</select>
			</div>
 
		</div>
	</div>
	<hr>
</div>
</center>
<div class="navbar bg-dark fixed-bottom">
	<div style="color: #fff;">© <?php echo date('Y'); ?> Copyright:
	    <a href="#"> Fitrah Arie Ramadhan</a>
	</div>
</div>
</body>
</html>