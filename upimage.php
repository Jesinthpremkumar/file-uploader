<!DOCTYPE html>
<html>
<style>
.image{

background-color:#f5f5f5
}
img.img-thumbnail{
  margin:5px 2px; 
    float:left;
    height:400px;
    width:auto; 
    spacing:10px;

}
div.next{
background-color:cyan;
font-size:40pt;
height:40px;

}
    .sh{
        height:auto;
    }
.prev,
.next {
  cursor: pointer;

  top: 40%;
  width: auto;

  margin-top: -50px;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
display:inline-block;
}


.next {

  border-radius: 3px 0 0 3px;
float:right; 

}

.prev{
left:0;
 float:left;
}

.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}


</style>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
 <script src="../jquery/jquery.js">

</script>
 <script src="../bootstrap/js/bootstrap.min.js"></script>

<div class="image container" >
<h1 style="color:red;">UPLOADS</h1><?PHP

$p= glob("uploads/*.*");

$i=0;
if(isset($_GET['c']))
{
	$i=$_GET['c'] - 10;
        $count=count($p);
	if($_GET['c'] > $count){
	 $limit=count($p)-$c-10; 
	  $c=$limit;
	}
	else{
	$c=$_GET['c'];
	}
}
else
  $c=10;
for(;$i!=$c;$i++)
{
 $k=$p[$i];


 echo "<img id='Image' src=$k class='img-thumbnail'  style='spacing:2px;'  height=100px width=100px>";

}
$cn=$i+10;
$cp=$i-10;
echo "<div style='position:fixed;width:auto;height:10%;'>


 <a class='prev btn btn-primary' href='upimage.php?c=$cp'>prevv</a>
<a class='next btn btn-primary' href='upimage.php?c=$cn'>next</a>
</div>

";
?>
<br>
</div>

  
</html>