<link href="<?php echo WEB_ROOT;?>include/sam.css" rel="stylesheet" type="text/css">

<style>
ul{
	list-style-type: none;
}
a{
	text-decoration: none;
}
.xyz {
	-moz-border-radius:10px;
	background-color:#FFFFFF;
	padding:10px;
	width:280px;
	float:left;
	margin-right:30px;
	box-shadow: 5px 5px 30px grey;
	font-family: sans-serif;
	height: 200px;
}
.xh2 {
	color:#000033;
	font-size:17px;
	align:center;
	margin-left: 40px;
	font-weight: 400;
}
.xli {
line-height:20px;
margin-top: 10px;
font-size: 15px;
}

li{

}

</style>

<p>&nbsp;</p>
<div class="xyz">
<h3 class="xh2">
Complain Status Details
</h3>
<hr>
<ul>
<a class="reportlist"  href="view.php?mod=admin&view=repo&id=open"><li class="xli">Recieved Complains</li></a>
<a  href="view.php?mod=admin&view=repo&id=assign"><li class="xli">Assigned Complains</li></a>
<a class="reportlist" href="view.php?mod=admin&view=repo&id=working"><li class="xli">Working Complains</li></a>
<a class="reportlist" href="view.php?mod=admin&view=repo&id=close"><li class="xli">Close Complains</li></a>


</ul>
</div>
<div class="xyz">
<h3 class="xh2">
Detail Reports
</h3>
<hr>
<ul>
<a href="view.php?mod=admin&view=repod&id=staffs"><li class="xli">Staff Details</li></a>
<a href="view.php?mod=admin&view=repod&id=students"><li class="xli">Student Details</li></a>
<!--<a href="view.php?mod=admin&view=repod&id=plans"><li class="xli">Plan Details</li></a>-->

</ul>

</div>