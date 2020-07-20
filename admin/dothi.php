<?php include_once('../config/config.php');
 session_start();
            $sv = "SELECT * FROM `jp_students` LIMIT 4";
            $chay = mysqli_query($conn, $sv);
            $d = 0;
            $a = '[';
            while($diem = mysqli_fetch_assoc($chay)){
                $d++;
                $diemtb = $diem['point_Total']/8;
                $id = $diem['fullName'];
            
                $a = $a.'\''.$id.'\''.','.$diemtb.']';
                if($d < 4){
                    $a = $a.',[';
                }
            }   
            $a = '['.$a.']';
            
            //aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
		if($_SESSION["taikhoan"] == NULL){ ?>
			<script>
				window.location.href="../tai-khoan/dang-nhap.php";
			</script>
		<?php } elseif($_SESSION["nhomtk"] < 1){ ?>
		      <script>
	    	window.location.href="../index.php";
	    	</script>
		    </div>
		<?php }else {
		 ?>

			<div  class="caption">
			Đồ thị 
			</div>
			<!-- đồ thị -->
			<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<div id="container" style="width:50%; height:400px;"></div>

<script>
 //get điểm
 $.ajax({
         url: '<?=$url?>diem.php',
         type: 'POST',
         dataType: 'HTML',
         data: {
        },
       success: function(data){
           point = (data);
        Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Điểm trung bình '
    },
    subtitle: {
        text: 'Ngày : 23-2 -> 23-4 năm 2020'
    },
    xAxis: {
        type: 'category',
        labels: {
            rotation: -45,
            style: {
                fontSize: '13px',
                fontFamily: 'Verdana, sans-serif'
            }
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Điểm'
        }
    },
    legend: {
        enabled: false
    },
    tooltip: {
        pointFormat: 'Population in 2017: <b>{point.y:.1f} millions</b>'
    },
    series: [{
        name: 'Population',
        data: <?=$a?>,
        dataLabels: {
            enabled: true,
            rotation: -90,
            color: '#FFFFFF',
            align: 'right',
            format: '{point.y:.1f}', // one decimal
            y: 10, // 10 pixels down from the top
            style: {
                fontSize: '13px',
                fontFamily: 'Verdana, sans-serif'
            }
        }
    }]
});
       }
       });

    </script>
<?php } ?>



<script>
 	$(document).ready(function() {
 		$('a#quanlysv').addClass('chon');
 		$('a#themsv').removeClass('chon');
 		$('a#bangdk').removeClass('chon');
 		$('a#quanlykhoa').removeClass('chon');

			setInterval(function(){ $.get('xu-ly/sinh-vien/du-lieu-lop.php', function(data) {
				$('#hienthidulieulop').html(data);
			});
			 }, 1000);

			

		$.get('xu-ly/sinh-vien/du-lieu-lop.php',{id: ""}, function(data) {
			$('#hienthidulieulop').html(data);
		});
     });
    
 </script>
 