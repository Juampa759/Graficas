<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js"></script>
</head>
<body>
	<canvas id="myChart" width="400" height="300"></canvas>
</body>
<script>
	var ctx= document.getElementById("myChart").getContext("2d");
	var myChart = new Chart(ctx,{
		type: "doughnut",
		data: {
			labels: ['col1','col2','col3'],
			datasets: [{
				label:'Num datos',
				data: [10,9,15],
				backgroundColor:[
					'rgb( 115, 198, 182)',
					'rgb( 250, 215, 160 )',
					'rgb( 41, 128, 185)',
				]
			}]
		},
		options:{

		}
	});
</script>
</html>