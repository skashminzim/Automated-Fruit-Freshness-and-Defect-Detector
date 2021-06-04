<!DOCTYPE HTML>
<html>
<head>
  <script type="text/javascript">
  window.onload = function () {
    var chart = new CanvasJS.Chart("chartContainer", {
      title:{
        text: "Fruits per day"
      },

      data: [  //array of dataSeries
      { //dataSeries - first quarter
 /*** Change type "column" to "bar", "area", "line" or "pie"***/
       type: "column",
       name: "Usable",
       showInLegend: true,
       dataPoints: [

       { label: "apple", y: <?php echo $u_apple ?>},
	   { label: "banana", y: <?php echo $u_banana ?> },
       { label: "orange", y: <?php echo $u_orange ?> }

       ]
     },

     { //dataSeries - second quarter

      type: "column",
      name: "Unusable",
      showInLegend: true,
      dataPoints: [

      { label: "apple", y: <?php echo $un_apple ?> },
	  { label: "banana", y: <?php echo $un_banana ?> },
      { label: "orange", y: <?php echo $un_orange ?> }

      ]
    }
    ],
 /** Set axisY properties here*/
    axisY:{
      //prefix: "$",
      suffix: "Kgs"
    }
  });

chart.render();
}
</script>
<script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</head>
<body>
  <center><div id="chartContainer" style="height: 600px; width: 660px;">
  </div></center>
</body>
</html>
