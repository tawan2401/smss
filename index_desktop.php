<table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr bgcolor="#26354A">
	<td height="50" colspan="3" class="logo" nowrap="nowrap">&nbsp;SMSS<span class="tagline">&nbsp;ระบบสนับสนุนการบริหารจัดการสถานศึกษา</span></td>
	<td colspan="3" align="right" class="user" nowrap="nowrap">
<?php	
echo $_SESSION['school_name'];
		if(isset($system_office_code)){
		echo " [".$system_office_code."]";
		}
?>	
	&nbsp;&nbsp;</td>
	</tr>
	<tr bgcolor="#26354A"><td colspan="6" align="right"><font color="#FFFFFF">
<?php 
if(isset($_SESSION['login_user_id'])){
echo "ผู้ใช้ : $_SESSION[login_name]&nbsp;$_SESSION[login_surname]";
		if($_SESSION['login_status']==5){
		echo "&nbsp;(สิทธิ์เบื้องต้น)";
		}
echo "&nbsp;&nbsp;";
echo "<a href=logout.php>[ออกจากระบบ]</a>";
}
?>
 	&nbsp;&nbsp;</font></td></tr>
	
<?php 	
if(isset($system_warning_1)){	
		if($system_warning_1==1){
		echo "<script>alert('การ Login ด้วยเลขประจำตัวประชาชน จะได้รับสิทธิ์เพื่อการลงทะเบียนเท่านั้น ให้ไปที่เมนูผู้ใช้(User) แล้วลงทะเบียน หลังจากนั้นออกจากระบบ แล้ว Login ด้วย Username และ Password ใหม่อีกครั้ง');</script>\n";
		}
}

if(isset($alert)){	
if(($alert==1) and ($_SESSION['login_status']<5)){
?>
	<link rel="stylesheet" href="./jquery/themes/ui-lightness/jquery.ui.all.css">
	<script src="./jquery/jquery-1.5.1.js"></script>
	<script src="./jquery/external/jquery.bgiframe-2.1.2.js"></script>
	<script src="./jquery/ui/jquery.ui.core.js"></script>
	<script src="./jquery/ui/jquery.ui.widget.js"></script>
	<script src="./jquery/ui/jquery.ui.mouse.js"></script>
	<script src="./jquery/ui/jquery.ui.draggable.js"></script>
	<script src="./jquery/ui/jquery.ui.position.js"></script>
	<script src="./jquery/ui/jquery.ui.resizable.js"></script>
	<script src="./jquery/ui/jquery.ui.dialog.js"></script>

	<script>
	// increase the default animation speed to exaggerate the effect
	$.fx.speeds._default = 300;
	$(function() {
		$( "#dialog" ).dialog({
			height: 460,
			width: 380,
			minHeight: 460,
			minWidth: 380,
			autoOpen: true,
			show: "blind",
			hide: "explode",
				modal: true,
				resizable: false});
		});
	</script>
<div id="dialog" title="การแจ้งเตือน">
<?php 
$arr_length=count($system_alert_ar);
if($arr_length>=1){
		$M=1;
		for($x=1;$x<=$arr_length;$x++){			
					if(($M%2) == 0)
					$color="#E5E5FF";
					else  	$color="#FFFFFF";
		echo "<font  size=2>$M. $system_alert_ar[$x]</font><br />";
		$M++;
		}		
}
else{
echo "<div align='center'>";
			echo "<font color='#006666' size='3'><strong>ไม่มีข้อความแจ้งเตือน</strong>";			
echo "</div>";
}
?>
</div>
<?php		
}
}

	if($_GET['option']!=""){
	echo "<tr bgcolor='#FFCC00'>";
	echo "<td colspan='6'>";
	echo "<table width='100%' border='0' cellspacing='0' cellpadding='0'>";
	echo "<tr bgcolor='#6699FF'>";
	echo "<td align='left' nowrap='nowrap' class=stylemenu height='24'>&nbsp;&nbsp;&nbsp;";
	echo $_SESSION['module_name_'.$_GET['option']];
	//////
	if($_GET['option']=='amssplus'){
	echo "<a href='./'> <font color='#26354A'>[กลับ SMSS]</font></a>";
	
	}
	//////
	
	echo "</td><td align='right'>";
	echo "<span id='Aclock' ></span>";
	echo "&nbsp;&nbsp;&nbsp;";
date_default_timezone_set('Asia/Bangkok');
			?> <script>
			function tick(){
				dt_now = new Date(<?php echo date("Y"); ?>,<?php echo date("m")-1; ?>,<?php echo date("d"); ?>);
				montharrayz = new Array("มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
				daysarrayz = new Array("อาทิตย์","จันทร์","อังคาร","พุธ","พฤหัสบดี","ศุกร์","เสาร์");

				dateString = "วัน"+daysarrayz[dt_now.getDay()]  + "ที่ ";
				dateString+= dt_now.getDate() + " ";
				dateString+= montharrayz[dt_now.getMonth() ]+ " ";
				dateString+= dt_now.getFullYear()+543 ;
				
				Aclock.style.color="FFFFFF";
				Aclock.style.fontFamily = "Tahoma";
				Aclock.style.fontSize  = "11px";
				Aclock.style.fontWeight  = "Bold";
				Aclock.innerHTML=dateString;	
			} 
			tick()
			</script> 
			<?php 
			
	echo "</td></tr>";
	echo "</table>";
	echo "</td></tr>";
	}
	else{
	require_once("menu.php");
	}
	  ?>
	<tr>
	<td colspan="6">
	<!-- Content -->
	
		<?php require_once("".$MODPATHFILE."");?>
	
	<!-- End Content -->
	</td>
	</tr>
</table>
