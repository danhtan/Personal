<!DOCTYPE html>
<html>
<head>
	<title></title>
		<link rel="stylesheet" type="text/css" href="../style/bootstrap.min.css">
     <script type="text/javascript" src="../style/jquery-3.3.1.js"></script>
     <script type="text/javascript" src="../style/bootstrap.min.js"></script>
</head>
<body>
	<?php	
include("../config.php");
	
$sql="SELECT * FROM sach ORDER BY id_sach DESC limit 0,9";

	$kq=mysqli_query($conn,$sql);
	while ($rows=mysqli_fetch_array($kq)) {
					?>
					<div style="	width: 220px;height: 350px; border:1px solid  #d1e0e0 ; float: left; margin: 5px; background-color: white">

						<div>
							<img src="block2/img/<?php echo $rows['urlhinh'] ?>" style="float : left; width: 190px; height: 230px; margin: 10px 0px 0px 15px">
						</div>

						<h4 style="	margin:15px;"	> Tên Sách :<?php echo $rows['tensach'] ?></h4>
						<h4 style="	margin:15px;"	> Số lượng còn :<?php echo $rows['soluongcon'] ?></h4>
						<button style=" padding: 5px;border: none;	color: 	white;background-color: blue ; float:right;	margin-right: 20px ;" id="<?php echo $rows['id_sach'] ?>" class="chitietsach">Chi Tiết</button>
						
					</div>

					<?php
				}
				
			?>

</body>
<script type="text/javascript">
	$(document).ready(function(){
	   $(document).on('click', '.chitietsach', function(){

  var employee_id = $(this).attr("id");
  $.ajax({
   url:"block2/gioithieusach/chitietsach.php",
   method:"POST",
   data:{employee_id:employee_id},
   success:function(data){

    $('#tatca').html(data);
   },
  
   error: function(){
    alert('error!');
  }
  });



	     });

	     });

</script>
</html>



