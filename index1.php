<!DOCTYPE html>
<htm>
<head>
<title></title>
<?php include 'link.php';?>
<?php include 'style.php';?>
</head>
<body onload="fetch()">
<nav class="navbar navbar-expand-lg nav_style P-3">
  <a class="navbar-brand pl-5" href="#">COVID-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5 text-capitalize">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
     
	  <li class="nav-item">
        <a class="nav-link" href="#tbval">India-Corona-Live</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="#aboutid">about</a>
      </li>
     <li class="nav-item">
        <a class="nav-link" href="#quiz">quiz</a>
      </li>
    </ul>
    
  </div>
  
</nav>
<div class="main_header">
<div class="row w-100 h-100">
<div class="col-lg-5 col-md-5 c0l-12 order-lg-1 order-2">
<div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
<img src="https://image.freepik.com/free-vector/coronavirus-logo-template-style_23-2148507440.jpg" width="200" height="300">
</div>
</div>
<div class="col-lg-7 col-md-7 c0l-12 order-lg-2 order-1">
<div class="rightside  w-100 h-100 d-flex justify-content-center align-items-center">
<h1>Stay At Home Everyday Keeps Cor<span><img src="data:image/jpeg;base64,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" height="50" width="50"></span>na Away</h1>
</div>
</div>
</div>
</div>
<!---.....corona latest update.......--->
<section class="corona_update container-fluid">
<div class="mb-5">
<h3 class="text-uppercase text-center">covid-19 updates of india</h3>
</div>
<div class="table-responsive">
<table class="table table-bordered table-striped text-center" id="tbval">
<tr>
<th class="capitalize">last updated time</th>
<th class="capitalize">state</th>
<th class="capitalize">confirmed</th>
<th class="capitalize">active</th>
<th class="capitalize">recovered</th>
<th class="capitalize">deaths</th>
</tr>
<?php
$data=file_get_contents('https://api.covid19india.org/data.json');
$coronalive= json_decode($data,true);
$statescount = count($coronalive['statewise']);

$i=1;
while($i<$statescount){
	?>
	<tr>
	<td><?php echo $coronalive['statewise'][$i]['lastupdatedtime'] ?></td>
	<td><?php echo $coronalive['statewise'][$i]['state'] ?></td>
	<td><?php echo $coronalive['statewise'][$i]['confirmed'] ?></td>
	<td><?php echo $coronalive['statewise'][$i]['active'] ?></td>
	<td><?php echo $coronalive['statewise'][$i]['recovered'] ?></td>
	<td><?php echo $coronalive['statewise'][$i]['deaths'] ?></td>
	</tr>
	
	<!---echo $coronalive['statewise'][$i]['lastupdatedtime']."<br>";
	echo $coronalive['statewise'][$i]['state']."<br>";
	echo $coronalive['statewise'][$i]['confirmed']."<br>";
	echo $coronalive['statewise'][$i]['active']."<br>";
	echo $coronalive['statewise'][$i]['recovered']."<br>";
	echo $coronalive['statewise'][$i]['deaths']."<br>";--->
	<?php
	$i++;
}
?>
</table>
</div>
</div>
</section>

<!----about secton---->
<div class="container-fluid sub_section pt-5 pb-5" id="aboutid">
<div class="section_header text-center mb-5 mt-4">
<h1>About COVID-19</h1>
</div>
<div class="row pt-5">
<div class="col-lg-5 col-md-6 col-12 ml-5">
<img src="https://img.freepik.com/free-vector/coronavirus-2019-ncov-virus-background-with-disease-cells-covid-19-corona-virus-outbreaking-pandemic-medical-health-risk-concept_139523-182.jpg?size=626&ext=jpg" class="img-fluid">
</div>
<div class="col-lg-6 col-md-6 col-12">
<h2>What is COVID-19 </h2>
<p>Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.</p>
<p>Most people infected with the COVID-19 virus will experience mild to moderate respiratory illness and recover without requiring special treatment. 
 Older people, and those with underlying medical problems like cardiovascular disease, diabetes, chronic respiratory disease, and cancer are 
 more likely to develop serious illness.</p>
 <p>The COVID-19 virus spreads primarily through droplets of saliva or discharge from the nose when an infected person coughs or sneezes, so
 it’s important that you also practice respiratory etiquette (for example, by coughing into a flexed elbow).</p>
</div>
</div>
<!---------quiz-------->
<section class="corona_quiz container-fluid " id="quiz">
<div class="mt-5">
<h1 class="text-uppercase text-center">quiz on covid-19</h1>
</div>
<div>
<form action="index1.php" method="post">
1.Age group...?<br> <input type="radio" name="age" value="1-10">1-10
           <input type="radio" name="age" value="10-40">10-40
           <input type="radio" name="age" value="40-70">40-70
           <input type="radio" name="age" value="70-100">70-100
		   <br><br>
2.Are you suffering from fever..?<br><input type="radio" name="fever" value="yes">yes
                               <input type="radio" name="fever" value="no">no	
<br><br>
3.Do you suffer from cough and cold or have irritation in your throat...?<br><input type="radio" name="cold" value="yes">yes
                                                                       <input type="radio" name="cold" value="no">no
<br><br>
4.Do you feel nauseous or suffering from diarrhea ...?<br><input type="radio" name="xyz" value="yes">yes
                                                    <input type="radio" name="xyz" value="no">no
<br><br>
5.Are you having headache...?<br><input type="radio" name="abc" value="yes">yes
                           <input type="radio" name="abc" value="no">no
<br><br>
6.Have you traveled anywhere internationally in the last 30-45 days...?<br><input type="radio" name="travel" value="yes">yes
                                                                     <input type="radio" name="travel" value="no">no 
<br><br>
<input type="submit" name="submit" value="check now" style="background-color: #66ccff">
</form>
</div>
<?php
if(isset($_POST['submit']))
{
	$age=$_POST['age'];
    $fever= $_POST['fever'];
    $xyz=$_POST['xyz'];
    $abc=$_POST['abc'];
    $travel=$_POST['travel'];
    $cold=$_POST['cold'];
	if($age=='10-40'||$age =='40-70')
	{
		if($fever=='yes' && $cold=='yes')
		{
			if(  $abc=='yes' || $xyz=='yes' || $travel=='yes')
			{
				echo'<script> alert ("you may have corona+ kindly contact your immediate health center")</script>';
			}
		    else if ($abc=='no' && $xyz=='no' && $travel=='no')
		    {
			echo'<script> alert("you are safe but if symptoms persist then kindly visit health center")</script>';
		    }
		
        }
		else if ($fever=='no' || $cold=='no')
			echo'<script> alert("you are safe!!")</script>';
	}
	else if ($age=='1-10'||$age=='70-100')
	{
		if($fever=='yes' && $cold=='yes'&& $abc=='yes')
		{
			echo'<script> alert("you are corona +ve")</script>';
		}
		else if ($fever=='no'|| $cold=='no' ||$abc=='no')
		{
			echo'<script> alert("you are safe now!!")</script>';
		}
	}
}

?>
</section>			






		   
<!-----footer----->
 <footer class="mt-5">
<div class="footer_style text-white text-center container-fluid">
<p>&copy NIKHIL KUMAR<p>
</div>
</footer>


</body>
</html>