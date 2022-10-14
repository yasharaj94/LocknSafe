<?php
include "connection.php";
?>
<!DOCTYPE html>
<html lang="">
<head>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        ul.admin-locker{width: 100%;}

        ul.admin-locker li.locker{float: left;
            width: calc(18% - 22px);
           
            margin: 1%;
            border: 2px solid #000;
            background: #48D2D9;
            padding: 5px;
            list-style: none;
            text-align: center;
            height: 40px;}

           

           
.btn{
  margin:5px;
  border:solid;
  
}



    </style>
</head>
   
  
        
    <div class="btn-group">
      <center>
        <a href ="index.html"><button type="button" class="btn btn-info">Home</button></a>
         <a href = "fetch.php"><button type="button" class="btn btn-info" >Details</button></a></center>
      </div><div></div>
      </div>
<div class="para">
    
</div>

<?php

$sql = "select * from `login`";
$qry  = mysqli_query($conn, $sql);
$vars = array();
$cars = array();
$names = array();
$i=0;
while($crow = mysqli_fetch_assoc($qry)) {
	$vars[] = $crow;


}
 foreach($vars as $key=>$value){
$names[$i]=$value['name'];
$names2[$i]=$value['name2'];
$cars[$i]=$value['booked'];

$i++;
 }
$arrlength = count($cars);

?>

<ul class="admin-locker">
<?php

for($x = 1; $x < 30; $x++) {
    $count=0;
    for($y = 0; $y < $arrlength; $y++) {

        if($cars[$y]==$x){
            echo '<li class="locker" style="background:red;"> Booked By:'.$names[$y].' & '.$names2[$y].'</li>';
            $count++;
        }
    }
    if($count==0){echo '<li class="locker"> Locker:'.$x.'</li>';}
}
    ?>

</ul>
<!--
<table align="center">
    <tr>
  	<th class="del"><label>Sl No</label></th>
    <th style="text-align:center"><label >Project Name</label></th>
    <th style="text-align:center"><label >Project location</label></th>
		<th style="text-align:center;"><label>Builder Name</label></th>
		<th style="text-align:center;"><label>Builder Grade</label></th>
		<th style="text-align:center;"><label>OC Status</label></th>
		<th style="text-align:center;"><label>Starting price (Rs)</label></th>
		<th style="text-align:center;"><label>Size (SBA)</label></th>
		<th style="text-align:center;"><label>Configuration</label></th>
		<th style="text-align:center;"><label>Discounts</label></th>
		<th style="text-align:center;"><label>Segment</label></th>
		<th style="text-align:center;"><label>Amenities</label></th>
    <th class="del"  style="text-align:center"><label>Delete</label></th>
    <th class="del" style="text-align:center"><label>Update</label></th>

    <tr>

  <?php // foreach($vars as $key=>$value){ ?>
  <tr>
  <td class="del"><?php // echo $key+1; ?></td>
    <td style="text-align:center"><label><?php // echo $value['projectName']; ?></lebel></td>
		<td style="text-align:center"><label><?php // echo $value['projectLocation']; ?></label></td>
		<td style="text-align:center;"><label><?php // echo $value['builderName']; ?></label></td>
		<td style="text-align:center;"><label><?php // echo $value['builderGrade']; ?></label></td>
		<td style="text-align:center;"><label><?php // echo $value['wheatherOCReceived']; ?></label></td>
		<td style="text-align:center;"><label><?php // echo $value['startingPriceRs']; ?></label></td>
		<td style="text-align:center;"><label><?php // echo $value['size_SBA']; ?></label></td>
		<td style="text-align:center;"><label><?php // echo $value['configuration']; ?></label></td>
		<td style="text-align:center;"><label><?php // echo $value['discount']; ?></label></td>
		<td style="text-align:center;"><label><?php // echo $value['segment']; ?></label></td>
		<td style="text-align:center;"><label><?php // echo $value['amenities']; ?></label></td>
    <td class="del"><a href="?id=<?php // echo $value['id']; ?>" onclick="return confirm('Are you sure want to Delete?');">Del</a></td>
    <td class="update"><a href="update.php?uid=<?php // echo $value['id']; ?>" onclick="return confirm('Are you sure want to update?')">Edit</a></td>
  </tr>
<?php // } ?>
</table>
-->
</body>
</html>
