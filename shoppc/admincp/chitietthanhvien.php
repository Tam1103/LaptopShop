<?php
include "connect.php";
$id=$_GET["hoten"];
$kq=mysql_query("select * from thanhvien where hoten='$id'");
while($r=mysql_fetch_array($kq))
{	$mota=$r["hoten"];
	$mota1=$r["diachi"];
	$mota2=$r["email"];
	$mota3=$r["dienthoai"];;
	if($mota=="")
		echo "lỗi chi tiết!!";
	else{
?>
<div style="overflow:auto; width:550px; height:300px"> 
<tr>
  <td style="border-right:1px solid #333;margin-left:500px"><strong>THÔNG TIN LIÊN HỆ</strong></td>
</tr > 
<br>
<hr>
<table width="550" border="0" cellspacing="0" cellpadding="0">
  </tr><td style="line-height:25px"><strong>Tên khách hàng: </strong><?php echo $mota; ?></td></tr>
   </tr><td style="line-height:25px"><strong>Địa chỉ: </strong><?php echo $mota1; ?></td></tr>
    </tr><td style="line-height:25px"><strong>Số điện thoại: </strong><?php echo $mota3; ?></td></tr>
    </tr><td style="line-height:25px"><strong>Email: </strong><?php echo $mota2; ?></td></tr>
</table>
</div>
<?php
	}
}
?>