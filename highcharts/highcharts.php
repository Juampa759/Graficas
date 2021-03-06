<!DOCTYPE html>
<html>
<head>
	<title>Highcharts </title>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="http://code.highcharts.com/highcharts.js"></script>
	<script src="http://code.highcharts.com/modules/exporting.js"></script>
</head>
<body>
	<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
	<script>
$(function () {
    $('#container').highcharts({
        title: {
            text: 'Resumen de ventas',
            x: -20 //center
        },
        subtitle: {
            text: 'La Tiendita',
            x: -20
        },
        xAxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
        },
        yAxis: {
            title: {
                text: 'Ventas (€)'
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        tooltip: {
            valueSuffix: '€'
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle',
            borderWidth: 0
        },
        series: [{
            name: 'Ventas',
            data: [85.36, 92.55, 79.55, 125.25, 180.35, 210.55, 250.25, 260.55, 203.35, 108.35, 130.95, 90.65]
        }, {
            name: 'Beneficios (70%)',
            data: [59.75, 64.78, 55.68, 87.67, 126.24, 147.38, 175.17, 182.38, 142.34, 75.84, 91.66, 63.45]
        }]
    });
});
</script>
</body>
</html>