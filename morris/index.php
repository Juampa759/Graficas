<!DOCTYPE html>
<html>
<head>
	<title>Morris Js</title>
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
</head>
<body>
	<div id="myfirstchart" style="height: 250px;"></div>
	<div id="bar-example"></div>
	<div id="donut.example"></div>
</body>
<script>
	new Morris.Line({
	  // ID of the element in which to draw the chart.
	  element: 'myfirstchart',
	  // Chart data records -- each entry in this array corresponds to a point on
	  // the chart.
	  data: [
	    { year: '2008', value: 20 },
	    { year: '2009', value: 10 },
	    { year: '2010', value: 5 },
	    { year: '2011', value: 5 },
	    { year: '2012', value: 20 }
	  ],
	  // The name of the data record attribute that contains x-values.
	  xkey: 'year',
	  // A list of names of data record attributes that contain y-values.
	  ykeys: ['value'],
	  // Labels for the ykeys -- will be displayed when you hover over the
	  // chart.
	  labels: ['Value']
	});
	Morris.Bar({
		element: 'bar-example',
		data: [
			{ y: '2006', a: 100, b: 90},
			{ y: '2006', a: 100, b: 90},
			{ y: '2006', a: 100, b: 90},
			{ y: '2006', a: 100, b: 90},
			{ y: '2006', a: 100, b: 90, c: 50},
		],
		xkey: 'y',
		ykeys: ['a','b','c'],
		labels: ['Series A', 'Serires B']
	});
	Morris.Donut({
		element: 'donut.example',
		data: [
			{ label: 'Hola', value: 20 },
			{ label: 'Que', value: 25 },
			{ label: 'Tal', value: 30 }
		]
	});
</script>
</html>