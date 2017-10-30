<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Highcharts Example</title>
		<link href="./css/bootstrap.css" rel="stylesheet" />
		<link href="http://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" />
		<style type="text/css">
		
		</style>
	</head>
<script src="../highchart/code/highcharts.js"></script>
<script src="../highchart/code/modules/exporting.js"></script>

<style>
.button_mission {
  padding: 15px 25px;
  font-size: 24px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: #00AA55;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button_mission:hover {background-color: #227700}

.button_mission:active {
  background-color: #227700;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
.button_log {
  padding: 15px 25px;
  font-size: 24px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: #33CCFF;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button_log:hover {background-color: #0066FF}

.button_log:active {
  background-color: #0066FF;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

</style>
<body style="margin-top:80px">

<br>
<div>

	<button type="button" class="btn btn-primary" style="width: 100px; height:50px; position:absolute; top:130px; left:10px;" name="cam1">cam1</button>

	<button type="button" class="btn btn-success" style="width: 100px; height:50px;position:absolute; top:210px; left:10px;" name="cam2">cam2</button>

	<button type="button" class="btn btn btn-info" style="width: 100px; height:50px;position:absolute; top:290px; left:10px;" name="cam3">cam3</button>

<br>

<img src="./pest.jpg" style="width: 600px; height: 700px; float:left;">
<font style="font-size:40px; position:absolute; top:880px; left:150px;">菜蟲:100% </font>
</div>
<div id="temperature" style="min-width: 380px; height: 300px; float:right;"></div>

<div id="humidity" style="min-width: 380px; height: 300px; float:right;"></div>

<div id="Soil_moisture" style="min-width: 380px; height: 300px; float:right;"></div>

<div style="width:100%;height:3px;margin:0px auto;padding:0px;background-color:#D5D5D5;overflow:hidden; position:absolute; top:1100px;"></div>

<button onclick="javascript:location.href='./copter_patrol.php'" class="button_mission" style="width: 300px; height:300px; position:absolute; top:1150px; left:100px;" ><span style="font-size:30px;">任務<p>模式</p></span></button>
<button class="button_log" style="width: 300px; height:300px; position:absolute; top:1150px; left:550px;" ><span style="font-size:30px;">紀錄<p>瀏覽</p></span></button>
		<script type="text/javascript">

Highcharts.chart('temperature', {
    chart: {
        type: 'line'
    },
    title: {
        text: 'Monthly Average Temperature'
    },
    xAxis: {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
    },
    yAxis: {
        title: {
            text: 'Temperature (°C)'
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
        name: 'Tainan',
        data: [18.0, 19.9, 20.0, 23.0, 25.6, 26.0, 27.1, 28.3, 26.5, 25.8, 23.0, 19.5]
    }]
});

Highcharts.chart('humidity', {
    chart: {
        type: 'line'
    },
    title: {
        text: 'Monthly Average relative humidity'
    },
    xAxis: {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
    },
    yAxis: {
        title: {
            text: 'relative humidity (%)'
        }
    },
    plotOptions: {
        line: {
            dataLabels: {
                enabled: true,
            },
            enableMouseTracking: false
        }
	
    },
    series: [{
        name: 'Tainan',
	color: 'green',
        data: [65, 62, 65, 68, 70, 72, 75, 75, 72, 70, 68, 65]
    }]
});

Highcharts.chart('Soil_moisture', {
    chart: {
        type: 'line'
    },
    title: {
        text: 'Monthly Average Soil moisture'
    },
    xAxis: {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
    },
    yAxis: {
        title: {
            text: 'relative humidity (%)'
        }
    },
    plotOptions: {
        line: {
            dataLabels: {
                enabled: true,
            },
            enableMouseTracking: false
        }
	
    },
    series: [{
        name: 'Tainan',
	color: 'pink',
        data: [65, 62, 65, 68, 70, 72, 75, 75, 72, 70, 68, 65]
    }]
});
		</script>
	</body>
</html>
