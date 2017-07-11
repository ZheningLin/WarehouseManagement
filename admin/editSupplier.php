<?php 
require_once '../include.php';
checkLogined();
$rows=getAllCate();
if(!$rows){
	alertMes("没有相应分类，请先添加分类!!", "addCate.php");
}
$id=$_REQUEST['id'];
$proInfo=getSuppById($id);
//print_r($proInfo);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>
<h3>添加用户</h3>
<form action="doAdminAction.php?act=addSupplier" method="post" enctype="multipart/form-data">
<table width="70%" border="1" cellpadding="5" cellspacing="0" bgcolor="#cccccc">
	<tr>
		<td align="right">供应商</td>
		<td><input type="text" name="sName" value="<?php echo $proInfo['sName'];?>"/></td>
	</tr>
	<tr>
		<td align="right">联系人</td>
		<td><input type="text" name="contacts" value="<?php echo $proInfo['contacts'];?>" /></td>
	</tr>
	<tr>
		<td align="right">联系电话</td>
		<td><input type="text" name="phone" value="<?php echo $proInfo['phone'];?>"/></td>
	</tr>
	<tr>
		<td align="right">联系地址</td>
		<td><input type="text" name="address" value="<?php echo $proInfo['address'];?>"/></td>
	</tr>
	<tr>
		<td align="right">联系人邮箱</td>
		<td><input type="text" name="email" value="<?php echo $proInfo['email'];?>"/></td>
	</tr>
	<tr>
		<td align="right">默认供应商</td>
		<td>
			<input type="radio" name="isShow" value="1" <?php echo $proInfo['isShow']==1?"checked='checked'":null;?>/>是
			<input type="radio" name="isShow" value="0" <?php echo $proInfo['isShow']==0?"checked='checked'":null;?>/>否
		</td>
	</tr>
	<tr>
		<td colspan="2"><input type="submit"  value="编辑供应商"/></td>
	</tr>

</table>
</form>
</body>
</html>