<?php
defined( '_VALID_' ) or die( 'Direct Access to this location is not allowed.' );

$sql="ALTER TABLE `system_module` ADD `menu_pic` VARCHAR(25) NOT NULL AFTER `where_work`;" ;
$dbquery = mysqli_query($connect,$sql);

$sql_update = "select * from system_module";
$dbquery_update= mysqli_query($connect,$sql_update);
While ($result_update = mysqli_fetch_array($dbquery_update)){
$module_name=$result_update['module'];
		
			if($result_update['module']=="achievement"){
			$sql="UPDATE system_module SET menu_pic= 'education' WHERE module= '$module_name' ";
			$dbquery = mysqli_query($connect,$sql);
			}
			else if($result_update['module']=="affair"){
			$sql="UPDATE system_module SET menu_pic= 'user' WHERE module= '$module_name' ";
			$dbquery = mysqli_query($connect,$sql);
			}
			else if($result_update['module']=="amss_bets"){
			$sql="UPDATE system_module SET menu_pic= 'education' WHERE module= '$module_name' ";
			$dbquery = mysqli_query($connect,$sql);
			}
			else if($result_update['module']=="amss_budget"){
			$sql="UPDATE system_module SET menu_pic= 'usd' WHERE module= '$module_name' ";
			$dbquery = mysqli_query($connect,$sql);
			}
			else if($result_update['module']=="amss_mail"){
			$sql="UPDATE system_module SET menu_pic= 'envelope' WHERE module= '$module_name' ";
			$dbquery = mysqli_query($connect,$sql);
			}
			else if($result_update['module']=="amss_opportunity"){
			$sql="UPDATE system_module SET menu_pic= 'user' WHERE module= '$module_name' ";
			$dbquery = mysqli_query($connect,$sql);
			}
			else if($result_update['module']=="amss_spacial_student"){
			$sql="UPDATE system_module SET menu_pic= 'user' WHERE module= '$module_name' ";
			$dbquery = mysqli_query($connect,$sql);
			}
			else if($result_update['module']=="amss_supervision"){
			$sql="UPDATE system_module SET menu_pic= 'education' WHERE module= '$module_name' ";
			$dbquery = mysqli_query($connect,$sql);
			}
			else if($result_update['module']=="bets"){
			$sql="UPDATE system_module SET menu_pic= 'education' WHERE module= '$module_name' ";
			$dbquery = mysqli_query($connect,$sql);
			}
			else if($result_update['module']=="book"){
			$sql="UPDATE system_module SET menu_pic= 'book' WHERE module= '$module_name' ";
			$dbquery = mysqli_query($connect,$sql);
			}
			else if($result_update['module']=="bookregister"){
			$sql="UPDATE system_module SET menu_pic= 'book' WHERE module= '$module_name' ";
			$dbquery = mysqli_query($connect,$sql);
			}
			else if($result_update['module']=="budget"){
			$sql="UPDATE system_module SET menu_pic= 'usd' WHERE module= '$module_name' ";
			$dbquery = mysqli_query($connect,$sql);
			}
			else if($result_update['module']=="cabinet"){
			$sql="UPDATE system_module SET menu_pic= 'file' WHERE module= '$module_name' ";
			$dbquery = mysqli_query($connect,$sql);
			}
			else if($result_update['module']=="delegate"){
			$sql="UPDATE system_module SET menu_pic= 'user' WHERE module= '$module_name' ";
			$dbquery = mysqli_query($connect,$sql);
			}
			else if($result_update['module']=="health"){
			$sql="UPDATE system_module SET menu_pic= 'user' WHERE module= '$module_name' ";
			$dbquery = mysqli_query($connect,$sql);
			}
			else if($result_update['module']=="idplan"){
			$sql="UPDATE system_module SET menu_pic= 'user' WHERE module= '$module_name' ";
			$dbquery = mysqli_query($connect,$sql);
			}
			else if($result_update['module']=="la"){
			$sql="UPDATE system_module SET menu_pic= 'pencil' WHERE module= '$module_name' ";
			$dbquery = mysqli_query($connect,$sql);
			}
			else if($result_update['module']=="mail"){
			$sql="UPDATE system_module SET menu_pic= 'envelope' WHERE module= '$module_name' ";
			$dbquery = mysqli_query($connect,$sql);
			}
			else if($result_update['module']=="meeting"){
			$sql="UPDATE system_module SET menu_pic= 'pencil' WHERE module= '$module_name' ";
			$dbquery = mysqli_query($connect,$sql);
			}
			else if($result_update['module']=="news"){
			$sql="UPDATE system_module SET menu_pic= 'pencil' WHERE module= '$module_name' ";
			$dbquery = mysqli_query($connect,$sql);
			}
			else if($result_update['module']=="permission"){
			$sql="UPDATE system_module SET menu_pic= 'pencil' WHERE module= '$module_name' ";
			$dbquery = mysqli_query($connect,$sql);
			}
			else if($result_update['module']=="person"){
			$sql="UPDATE system_module SET menu_pic= 'user' WHERE module= '$module_name' ";
			$dbquery = mysqli_query($connect,$sql);
			}
			else if($result_update['module']=="plan"){
			$sql="UPDATE system_module SET menu_pic= 'star-empty' WHERE module= '$module_name' ";
			$dbquery = mysqli_query($connect,$sql);
			}
			else if($result_update['module']=="questionnaire"){
			$sql="UPDATE system_module SET menu_pic= 'question-sign' WHERE module= '$module_name' ";
			$dbquery = mysqli_query($connect,$sql);
			}
			else if($result_update['module']=="salary"){
			$sql="UPDATE system_module SET menu_pic= 'bitcoin' WHERE module= '$module_name' ";
			$dbquery = mysqli_query($connect,$sql);
			}
			else if($result_update['module']=="savings"){
			$sql="UPDATE system_module SET menu_pic= 'bitcoin' WHERE module= '$module_name' ";
			$dbquery = mysqli_query($connect,$sql);
			}
			else if($result_update['module']=="standard"){
			$sql="UPDATE system_module SET menu_pic= 'education' WHERE module= '$module_name' ";
			$dbquery = mysqli_query($connect,$sql);
			}
			else if($result_update['module']=="student_check"){
			$sql="UPDATE system_module SET menu_pic= 'user' WHERE module= '$module_name' ";
			$dbquery = mysqli_query($connect,$sql);
			}
			else if($result_update['module']=="student_inclass"){
			$sql="UPDATE system_module SET menu_pic= 'user' WHERE module= '$module_name' ";
			$dbquery = mysqli_query($connect,$sql);
			}
			else if($result_update['module']=="student_main"){
			$sql="UPDATE system_module SET menu_pic= 'user' WHERE module= '$module_name' ";
			$dbquery = mysqli_query($connect,$sql);
			}
			else if($result_update['module']=="warroom"){
			$sql="UPDATE system_module SET menu_pic= 'filter' WHERE module= '$module_name' ";
			$dbquery = mysqli_query($connect,$sql);
			}
			else if($result_update['module']=="work"){
			$sql="UPDATE system_module SET menu_pic= 'user' WHERE module= '$module_name' ";
			$dbquery = mysqli_query($connect,$sql);
			}
}

?>
