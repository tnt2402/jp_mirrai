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
<script src="https://code.highcharts.com/highcharts-more.js"></script>

<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<script src="https://code.highcharts.com/modules/offline-exporting.js"></script>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

            <div id="buttonrow">

            <button style="color: red" id="export-png">Export to PNG</button>
            <button style="color: red" id="export-pdf">Export to PDF</button>
            </div>
            <br>

<div id="trungbinh" style="width:50%; height:400px;"></div><br>
<div id="diem" style="width:50%; height:400px;"></div>
<div id="radar" style="width:50%; height:400px;"></div>
<div id="container3" style="width:50%; height:400px;display: none"></div>

<script>
    
 //get điểm
 
var chart0 = Highcharts.chart('trungbinh', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'medium score'
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
            text: 'score'
        }
    },
    legend: {
        enabled: false
    },
    tooltip: {
        pointFormat: ' <b>{point.y:.1f} score</b>'
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

    </script>
<?php } ?>

<script>
var chart1 = Highcharts.chart('diem', {
    chart: {
        type: 'line'
    },
    title: {
        text: 'score daily'
    },
    subtitle: {
        text: 'MIRAI'
    },
    xAxis: {
        categories: ['02-03-20', '03-03-20', '04-03-20', '05-03-20', '06-03-20', '07-03-20', '08-03-20', '09-03-20', '10-03-20', '11-03-20', '12-03-20', '13-03-20']
    },
    yAxis: {
        title: {
            text: 'score'
        }
    },
    plotOptions: {
        line: {
            dataLabels: {
                enabled: true
            },
            enableMouseTracking: false
        }
    },
    series: [{
        name: 'Tran Minh Tuan',
        data: [11, 22, 33, 44, 55, 22, 23, 44, 25, 42, 11, 95]
    }, {
        name: 'Ha Mit',
        data: [18, 27, 25, 14, 89, 38, 27, 37, 24, 24, 33, 11]
    }, {
        name: 'Hihi',
        data: [3.9, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8]
    }]
});
</script>

<script>
var chart2 =  Highcharts.chart('radar', {

chart: {
    polar: true
},

title: {
    text: 'Highcharts Polar Chart'
},

subtitle: {
    text: 'Also known as Radar Chart'
},

pane: {
    startAngle: 0,
    endAngle: 360
},

xAxis: {
    tickInterval: 45,
    min: 0,
    max: 360,
    labels: {
        format: '{value}°'
    }
},

yAxis: {
    min: 0
},

plotOptions: {
    series: {
        pointStart: 0,
        pointInterval: 45
    },
    column: {
        pointPadding: 0,
        groupPadding: 0
    }
},

series: [{
    type: 'column',
    name: 'Column',
    data: [8, 7, 6, 5, 4, 3, 2, 1],
    pointPlacement: 'between'
}, {
    type: 'line',
    name: 'Line',
    data: [1, 2, 3, 4, 5, 6, 7, 8]
}, {
    type: 'area',
    name: 'Area',
    data: [1, 8, 2, 7, 3, 6, 4, 5]
}]
});
</script>
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
    //export report

    Highcharts.getSVG = function(charts, options, callback) {
  var svgArr = [],
    top = 0,
    width = 0,
    addSVG = function(svgres) {
      // Grab width/height from exported chart
      var svgWidth = +svgres.match(
          /^<svg[^>]*width\s*=\s*\"?(\d+)\"?[^>]*>/
        )[1],
        svgHeight = +svgres.match(
          /^<svg[^>]*height\s*=\s*\"?(\d+)\"?[^>]*>/
        )[1],
        // Offset the position of this chart in the final SVG
        svg;

      if (svgWidth > 500) {
        svg = svgres.replace('<svg', '<g transform="translate(0,' + top + ')" ');
        top += svgHeight;
        width = Math.max(width, svgWidth);
      } else {
        svg = svgres.replace('<svg', '<g transform="translate(' + width + ', 0 )"');
        top = Math.max(top, svgHeight);
        width += svgWidth;
      }

      svg = svg.replace('</svg>', '</g>');
      svgArr.push(svg);
    },
    exportChart = function(i) {
      if (i === charts.length) {
      
      	// add SVG image to exported svg
      	addSVG(svgImg.outerHTML);
        
        return callback('<svg height="' + top + '" width="' + width +
          '" version="1.1" xmlns="http://www.w3.org/2000/svg">' + svgArr.join('') + '</svg>');
      }
      charts[i].getSVGForLocalExport(options, {}, function(e) {
        console.log("Failed to get SVG");
      }, function(svg) {
        addSVG(svg);
        return exportChart(i + 1); // Export next only when this SVG is received
      });
    };
    
  exportChart(0);
};

/**
 * Create a global exportCharts method that takes an array of charts as an argument,
 * and exporting options as the second argument
 */
Highcharts.exportCharts = function(charts, options) {
  options = Highcharts.merge(Highcharts.getOptions().exporting, options);

  // Get SVG asynchronously and then download the resulting SVG
  Highcharts.getSVG(charts, options, function(svg) {
    Highcharts.downloadSVGLocal(svg, options, function() {
      console.log("Failed to export on client side");
    });
  });
};
function toDataURL(url, callback) {
  var xhr = new XMLHttpRequest();
  xhr.onload = function() {
    var reader = new FileReader();
    reader.onloadend = function() {
      callback(reader.result);
    }
    reader.readAsDataURL(xhr.response);
  };
  xhr.open('GET', url);
  xhr.responseType = 'blob';
  xhr.send();
}


var svgImg = document.createElementNS('http://www.w3.org/2000/svg','svg');
svgImg.setAttribute('xmlns:xlink','http://www.w3.org/1999/xlink');
svgImg.setAttribute('height','400');
svgImg.setAttribute('width','600');
svgImg.setAttribute('id','test');

var svgimg = document.createElementNS('http://www.w3.org/2000/svg','image');
svgimg.setAttribute('height','400');
svgimg.setAttribute('width','600');
svgimg.setAttribute('id','testimg');

// convert image and add to svg image object
toDataURL('<?=$url?>images/svg.png', function(dataUrl) {
  svgimg.setAttributeNS('http://www.w3.org/1999/xlink', 'href', dataUrl);
});

svgimg.setAttribute('x','0');
svgimg.setAttribute('y','0');
svgImg.appendChild(svgimg);

// add svg with image to DOM
document.querySelector('#container3').appendChild(svgImg);
// Set global default options for all charts
Highcharts.setOptions({
  exporting: {
    fallbackToExportServer: false // Ensure the export happens on the client side or not at all
  }
});
$('#export-png').click(function() {
  Highcharts.exportCharts([chart0, chart1, chart2]);
});

$('#export-pdf').click(function() {
  Highcharts.exportCharts([chart0, chart1, chart2], {
    type: 'application/pdf'
  });
});
//end export
 </script>
 