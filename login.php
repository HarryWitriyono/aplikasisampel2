<?php 
if (isset($_POST['Username'])){
	$Username=$_POST['Username'];
	$Password=$_POST['Password'];
	include('koneksi.db.php');
	$sql="select * from login where 
	NamaPetugas='".$Username."' and 
	Password='".$Password."'";
	$q=mysqli_query($kon,$sql);
	$r=mysqli_fetch_array($q);
	if (!empty($r)) {
		echo "Sukses";
	} else {
		echo "Gagal login !";
	} 
} else {
	echo "Invalid use !";
}
?>