<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php
$con = mysql_connect("localhost","root","");
 if (!$con)
 {
 die('Could not connect: ' . mysql_error());
 }
 
 mysql_select_db("brb", $con);
 
 $result = mysql_query("SELECT * FROM p_trans");
$i=0;
 while($row = mysql_fetch_array($result))
 {
 
 $a[$i]=$row['high'];
 $b[$i]=$row['medium'];
 $c[$i]=$row['low'];
 
 }

 //$a=high $b=Mid $c=Low
 $i=0;
$s=array("D1"=>array($a[$i],$b[$i],$c[$i]));

//echo $s["D1"][0]."".$s["D1"][1]." "." ".$s["D1"][2];
$i=0;
$t=0;
while($i<3)
{
$x[$t]=$s["D1"][$i];
$i++;
$t++;
}



/*for($i=0;$i<3;$i++)
{
echo $x[$i]."<br />";
}


//D1=row1(h,m,l);D2=row2(h,m,l);D3=row3(h,m,l)



//Matching Degree Calculation alpha1-alpha27
/*
$i=0;
$j=0;
$k=0;
$t=0;
$n=3;
while($i<$n)
{
$j=0;
while($j<$n)
{
$k=0;
while($k<$n)
{
$x[$t]=$s["D1"][$i]*$s["D2"][$j]*$s["D3"]["$k"];
$k++;
$t++;
}
$j++;
}
$i++;
}

    //Matching degree show
	
	/*for($i=0;$i<27;$i++)
    {
        echo $x[$i];
			echo "<br />";
			}
			*/
			
			?>

</body>
</html>
