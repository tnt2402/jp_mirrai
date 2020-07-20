<?php 
	include_once('../../../config/config.php');

	$id = $_POST["id"];
	$sql = "SELECT * FROM `jp_students` WHERE `id` = $id";
	$qr = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($qr);

 ?>

<div class="row">
	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
	<input type="text" id="idsv" value="<?php echo $id?>" style="display: none">
		Mã Sinh Viên:
		<div class="form-group">
		    <div class="input-group">
		    <div class="input-group-addon">
		    	<span class="glyphicon glyphicon-barcode"></span>
		    </div>
		    <input class="form-control" id="masv" type="text" placeholder="Mã sinh viên..." value="<?php echo $row["id"]?>" style="color:#000" disabled>
		    </div>
	    </div>
	</div>
	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
		Họ Tên Sinh Viên:
		<div class="form-group">
		    <div class="input-group">
		    <div class="input-group-addon">
		    <span class="glyphicon glyphicon-user"></span>
		    </div>
		    <input class="form-control" id="tensv" type="text" placeholder="Họ tên sinh viên..." value="<?php echo $row["fullName"]?>" autofocus="autofocus" >
		    </div>
	    </div>
	</div>
	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
	Point Reaction:
		<div class="form-group">
		    <div class="input-group">
		    <div class="input-group-addon">
		    <span class="glyphicon glyphicon-ok"></span>
		    </div>
		    <input class="form-control" id="Reaction" type="text" placeholder="Họ tên sinh viên..." value="<?php echo $row["point_Reaction"]?>" autofocus="autofocus" >
		    </div>
	    </div>
	</div>
	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
		Point Memori:
		<div class="form-group">
		    <div class="input-group">
		    <div class="input-group-addon">
		    <span class="glyphicon glyphicon-ok"></span>
		    </div>
		    <input class="form-control" id="Memori" type="text" placeholder="Họ tên sinh viên..." value="<?php echo $row["point_Memorization"]?>" autofocus="autofocus" >
		    </div>
	    </div>
	</div>
	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
		Point Pragmatic:
		<div class="form-group">
		    <div class="input-group">
		    <div class="input-group-addon">
		    <span class="glyphicon glyphicon-ok"></span>
		    </div>
		    <input class="form-control" id="Pragmatic" type="text" placeholder="Họ tên sinh viên..." value="<?php echo $row["point_Pragmatic"]?>" autofocus="autofocus" >
		    </div>
	    </div>
	</div>
	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
		point Communication:
		<div class="form-group">
		    <div class="input-group">
		    <div class="input-group-addon">
		    <span class="glyphicon glyphicon-ok"></span>
		    </div>
		    <input class="form-control" id="Communication" type="text" placeholder="Họ tên sinh viên..." value="<?php echo $row["point_communication"]?>" autofocus="autofocus" >
		    </div>
	    </div>
	</div>
	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
		Point Concentration:
		<div class="form-group">
		    <div class="input-group">
		    <div class="input-group-addon">
		    <span class="glyphicon glyphicon-ok"></span>
		    </div>
		    <input class="form-control" id="Concentration" type="text" placeholder="Họ tên sinh viên..." value="<?php echo $row["point_Concentration"]?>" autofocus="autofocus" >
		    </div>
	    </div>
	</div>
	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
		Point Attitude:
		<div class="form-group">
		    <div class="input-group">
		    <div class="input-group-addon">
		    <span class="glyphicon glyphicon-ok"></span>
		    </div>
		    <input class="form-control" id="Attitude" type="text" placeholder="Họ tên sinh viên..." value="<?php echo $row["point_Attitude"]?>" autofocus="autofocus" >
		    </div>
	    </div>
	</div>
	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
		Point Planability:
		<div class="form-group">
		    <div class="input-group">
		    <div class="input-group-addon">
		    <span class="glyphicon glyphicon-ok"></span>
		    </div>
		    <input class="form-control" id="Planability" type="text" placeholder="Họ tên sinh viên..." value="<?php echo $row["point_Planability"]?>" autofocus="autofocus" >
		    </div>
	    </div>
	</div>
	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
		Point Health:
		<div class="form-group">
		    <div class="input-group">
		    <div class="input-group-addon">
		    <span class="glyphicon glyphicon-ok"></span>
		    </div>
		    <input class="form-control" id="Health" type="text" placeholder="Họ tên sinh viên..." value="<?php echo $row["point_Health"]?>" autofocus="autofocus" >
		    </div>
	    </div>
	</div>
	

	

		Giáo Viên Nhận Xét :
		<div class="form-group">
		    <div class="input-group">
		    <div class="input-group-addon">
		    	<span class="glyphicon glyphicon-comment"></span>
		    </div>
		    <textarea id="nhanxet" class="form-control" placeholder="Giáo viên nhận xét ..."><?php echo $row["nhan_xet"]?></textarea>
		    </div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
		Mật khẩu cấp 2:
		<div class="form-group">
		    <div class="input-group">
		    <div class="input-group-addon">
		    <span class="glyphicon glyphicon-saved"></span>
		    </div>
		    <input class="form-control" id="mk2" type="text" placeholder="Nhập mật khẩu..." value="" autofocus="autofocus" >
		    </div>
	    </div>
	</div>
	</div>
	

</div>

<script>
	


/*== Hiển Thị Học Kỳ ==*/


/*== Hiển Thị Môn Học ==*/


/*== Thêm Sinh Viên ==*/
$(document).ready(function() {
	$('#suasinhvien').click(function(event) {
		$.ajax({
			url: 'xu-ly/sua-sinh-vien.php',
			type: 'POST',
			dataType: 'HTML',
			data: {
				idsv: $('#idsv').val(),
				mk2: $('#mk2').val(),
				tensv: $('#tensv').val(),
				nhanxet: $('#nhanxet').val(),
				Reaction: $('#Reaction').val(),
				Memori: $('#Memori').val(),
				Pragmatic: $('#Pragmatic').val(),
				Communication: $('#Communication').val(),
				Concentration: $('#Concentration').val(),
				Attitude: $('#Attitude').val(),
				Planability: $('#Planability').val(),
				Health: $('#Health').val(),
			},
		success: function(data){
			$('#thongbaothem').html(data);
		}
		});
		
	});
});
</script>