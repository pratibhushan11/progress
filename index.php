
<?php
if(isset($_POST["submit"])){

 

  
$str="";

function namepost($name,$time){
  $str="";
  if($name=="resident") {
    $str.="The Author attended the resident at the scheduled appointment at ";
    $str.=$time;
   
  }
  else
  {

    $str.="The author attended ";
    $str.="".ucfirst($name);
    $str.=" at the scheduled appointment at ";
    $str.="".$time;
  }

  return $str;

}

function isthereRepo($repo){

  $str="";

  if($repo=="neutral"){
    $str.="";
  }
  else if($repo=="b2c"){
    $str.= ";with the help of X2Staff transfer him from the bed to chair ";
  }
   else {
    $str.= ";with the help of X2Staff transfer him from the chair to bed";
  }
  return $str;
}


function padchanged($pad){

  $str="";

  if($pad=="neutral"){
    $str.="";
  }
 
  else {
        $str.= ";incontinent Pad has been changed ";
}
  return $str;
}


function clothesChanged($pad){

  $str="";

  if($pad=="neutral"){
    $str.="";
  }
 
  else if($pad=="n2d"){
        $str.= ";night Time dress was change into daytime attire ";
}
 else {

          $str.= ";day Time dress was change into nighttime attire ";

 }
  return $str;
}

function welfare($val,$name){

$str="";

  if($val=="neutral"){
    $str.="";
  }
 
  else if($val=="wely"){
    $str.= ";welfare of ".$name. " has been checked and he said he is fine";
}
 else {

   $str.= ";welfare of ".$name. " has been checked and he said he has some  problem, notified RN on duty ";

 }
  return $str;

}

function dinner($val){


$str="";

if($val=="neutral"){
    $str.="";
  }
 
else if($val=="dinnerc"){

    $str.= ";".$name. "has taken his dinner with other resident in the communal dining area";
}
 else if($val=="dinnerr"){

   $str.= ";".$name. "has taken his dinner in his room";

 }
 else if($val=="dinnerwfamily"){

     $str.= ";".$name. " has taken his dinner with his family outside the villege";
 }

 else {

   $str.= ";".$name. " has refused to eat his dinner"; 

 }
  return $str;

}


function bbmedication($val,$name){


$str="";

if($val=="medicationN"){
    $str.="";
  }
 
else if($val=="medicationT"){

    $str.= ";".$name. " was being assisted with his medicine before  dinner";
}
 

 else {

   $str.= ";".$name. " has refused to eat his medicine"; 

 }
  return $str;

}


function dbmedication($val,$name){


$str="";

if($val=="medicationN"){
    $str.="";
  }
 
else if($val=="medicationT"){

    $str.= ";".$name. " was being assisted with his medicine during his dinner";
}
 

 else {

   $str.= ";".$name. " has refused to eat his medicine"; 

 }
  return $str;

}


function btmedication($val,$name){


$str="";

if($val=="medicationN"){
    $str.="";
  }
 
else if($val=="medicationT"){

    $str.= ";".$name. " was being assisted with his medicine during bedtime";
}
 

 else {

   $str.= ";".$name. " has refused to eat his medicine"; 

 }
  return $str;

}

function rubbish($val){

$str="";

if($val=="neutral"){
    $str.="";
  }
 
else if($val=="rubbishC"){

    $str.= ";rubbish bin was checked, but there was not much rubbish";
}
 

 else {

   $str.= ";rubbish bin was checked and emptied the bin"; 

 }
  return $str;

}

function mood($val){


$str="";

if($val=="mGood"){
    $str.="";
  }
 
else if($val=="mAgitated"){

    $str.= ";he is bit agigated and aggrasive today (".date("d-m-y").")";
}

 else if($val=="mCry"){

    $str.= ";he is bit crying today (".date("d-m-y").")";
}

 else {

   $str.= ";he is stress today"; 

 }
  return $str;

}


function bowel($val){


$str="";

if($val=="Neutral"){
    $str.="";
  }
 
else if($val=="bowel1"){

    $str.= ";there is a bowel movement and his poop is hard and difficult to pass, are indicative of constipation. Often, these types of stool can be painful to pass";
}

else if($val=="bowel2"){

    $str.= ";there is a bowel movement and his poop is hard and difficult to pass, are indicative of constipation. Often, these types of stool can be painful to pass";
}
else if($val=="bowel3"){

    $str.= ";there is a bowel movement and his Poops looks like Sausage-shaped, but with several cracks running across the surface";
}
else if($val=="bowel4"){

    $str.= ";there is a bowel movement and his Poops are smooth long snake shape, no cracks or lumps.";
}
else if($val=="bowel5"){

    $str.= ";there is a bowel movement and  series of soft blobs with well-defined edges";
}
else if($val=="bowel6"){

    $str.= ";there is a bowel movement and his stool is Mushy consistency with ragged edges, looking more like a pile than clear separate stools ";
}
else if($val=="bowel7"){

    $str.= ";there is a bowel movement and the stool is watery, no solid pieces, it is entirely liquid ";
}


 else {

   $str.= ""; 

 }
  return $str;

}


function Shower($val){


$str="";

if($val=="Neutral"){
    $str.="";
  }
 
else if($val=="Wash"){

    $str.= ";today the author has given him a wash ";
}

 

 else {

   $str.= ";he was being assisted with a hot shower "; 

 }
  return $str;

}


function specialremark($val){


$str="";

if($val==""){
    $str.="";
  }

 

 else {
   $str.= "; "; 

   $str.=$val; 

 }
  return $str;

}

$str.=namepost($_POST["resname"],$_POST["restime"]);
$str.=isthereRepo($_POST["x2staff"]);
$str.=padchanged($_POST["padc"]);
$str.=clothesChanged($_POST["cc"]); 
$str.=welfare($_POST["welfare"],$_POST["resname"]);
$str.=bbmedication($_POST["bbmedication"],$_POST["resname"]);
$str.=dbmedication($_POST["dmedication"],$_POST["resname"]);
$str.=btmedication($_POST["btmedication"],$_POST["resname"]);
$str.=rubbish($_POST["rubbish"]);
$str.=mood($_POST["mood"]);
$str.=bowel($_POST["bowel"]);
$str.=Shower($_POST["Shower"]);
$str.=specialremark($_POST["specialremark"]);

$str.="</br>";

$str.= "Please write this in advance grammer structure.";


}

?>




<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<div style="border-style:solid,width:50%">
  <?php if(isset($_POST['submit'])){


    echo $str;

  } ?>
</div>  

<h2>LDK Progress Note Helper By Pratibhushan Neupane</h2>



<table border="1">
<tr>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

<td> Name:</td>  
<td><input type="text" name="resname" value=""></td>
</tr> 

<tr>
<td>Time</td>  
<td><input type="text" name="restime" value="">
  


</td>
</tr>

<tr>
<td>X2Staff</td>  
<td>
<select name="x2staff" id="cars">
  <option value="neutral">Neutral</option>
  <option value="b2c">BedToChair</option>
  <option value="c2b">ChairToBed</option>
</select>
</td>
</tr> 

<tr>
<td>PadChanged</td>  
<td>

<select name="padc" id="padc">
  <option value="neutral">Neutral</option>
  <option value="padchange">PadChanged</option>
</select>

</td>
</tr>

<tr>
<td>Clothes Status</td>  
<td>
<select name="cc" id="cars">
  <option value="neutral">Neutral</option>
  <option value="n2d">Night2Day</option>
  <option value="d2n">Day2Night</option>
</select>
</td>
</tr>

<tr>
<td>Welfare</td>  
<td>
  <select name="welfare" id="cars">
    <option value="neutral">Neutral</option>
    <option value="wely">Yes</option>
    <option value="weln">No</option>
</select>

</td>
</tr> 

<tr>
<td>Dinner</td>  
<td>
   <select name="dinner" id="dinner">
    <option value="neutral">Neutral</option>
    <option value="dinnerc">Communal</option>
    <option value="dinnerr">Resident</option>
    <option value="dinnerwfamily">DinnerWithFamily</option>
    <option value="dinnerref">DinnerRefused</option>
</select>
</td>
</tr>

<tr>
<td>BeforeDinnerMedication</td>  
<td>
   <select name="bbmedication" id="dinner">
    <option value="medicationN">Neutral</option>
    <option value="medicationT">Taken</option>
    <option value="medicationR">Refused</option>
    
</select>
</td>
</tr>

<tr>
  <td>DinnerMedication</td>  
  <td>
     <select name="dmedication" id="dinner">
      <option value="medicationN">Neutral</option>
      <option value="medicationT">Taken</option>
      <option value="medicationR">Refused</option>
      
  </select>
  </td>
</tr>

<tr>
  <td>BedTimeMedication</td>  
  <td>
     <select name="btmedication" id="dinner">
      <option value="medicationN">Neutral</option>
      <option value="medicationT">Taken</option>
      <option value="medicationR">Refused</option>
      
  </select>
  </td>
</tr>

<tr>
  <td>Rubbish</td>  
  <td>
     <select name="rubbish" id="rubbish">
        <option value="neutral">Neutral</option>
        <option value="rubbishC">RubbishChecked</option>
        <option value="rubbishCD">RubbishCheckedANDDispose</option>
      </select>
  </td>
</tr>

<tr>
  <td>Mood</td>  
  <td>
     <select name="mood" id="dinner">
      <option value="mGood">Neutral</option>
      <option value="mAgitated">Agitated</option>
      <option value="mStress">Stress</option>
      <option value="mCry">Crying</option>
      
  </select>
  </td>
</tr>

<tr>
  <td>Bowel</td>  
  <td>
     <select name="bowel" id="dinner">
      <option value="Neutral">Neutral</option>
      <option value="bowel1">Very Constipated(1)</option>
      <option value="bowel2">Slightly Constipated(2)</option>
      <option value="bowel3">Normal(3)</option>
      <option value="bowel4">Normal large(4)</option>
      <option value="bowel5">Laking Fiber(5)</option>
      <option value="bowel6">Inflamattion(6)</option>
      <option value="bowel7">Diarrhea(7)</option>
  </select>
  </td>
</tr>

<tr>
<td>Shower</td>  
<td>
  <select name="Shower" id="dinner">
      <option value="Neutral">Neutral</option>
      <option value="Wash">wash</option>
      <option value="Shower">ShowerGiven</option>
  </select>
</td>
</tr>

<td>Special Remark</td>  
<td>
 <textarea id="specialremark" name="specialremark" rows="4" cols="50" >
  
</textarea>
</td>

  <tr>
<td> <input type="submit" name="submit" value="Submit"> </td>  
<td>
  &nbsp;
</td>
</tr>
  
</form>
</table>


</body>
</html>