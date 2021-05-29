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

       { label: "apple", y: 2 },
	   { label: "banana", y: 2 },
       { label: "orange", y: 2 }

       ]
     },

     { //dataSeries - second quarter

      type: "column",
      name: "Unusable",
      showInLegend: true,
      dataPoints: [

      { label: "apple", y: 3 },
	  { label: "banana", y: 3 },
      { label: "orange", y: 3 }

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
