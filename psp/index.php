<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    <form method="POST" action="addX.php">
                            <div class="col-lg-8">
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">X</span>
                                            <input type="text" class="form-control" name="txtX" value="">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="submit" class="btn btn-primary" value="AGREGAR" style="width: 100%; border-radius: 0; margin-top: 0px;">
                            </div>                      

		<!--Tabla-->
		<table style="width:100%">
                <tr>                                    
                    <th>n</th>                    
                    <th>X</th>
                    <th>X avg</th>
                    <th>Delete</th>
                </tr>

<?php
                        require 'conect.php';
                        $sQuery = "SELECT * FROM total";
                        $sRes = mysqli_query($con, $sQuery) or die(mysqli_error());
                        $n = 0;
                        
                        while($row = mysqli_fetch_array($sRes)) { ?>
                            <?php $total = $row['Suma']; ?>
                    <?php } ?>
      				
                    <?php
                        require 'conect.php';
                        $sQuery = "SELECT count(*) as c FROM tbl_num";
                        $sRes = mysqli_query($con, $sQuery) or die(mysqli_error());
                        $n = 0;
                        
                        while($row = mysqli_fetch_array($sRes)) { ?>
                            <?php $count = $row['c']; ?>
                    <?php } ?>

    <?php
            			require 'conect.php';
            			$sQuery = "SELECT * FROM `tbl_num`";
						$sRes = mysqli_query($con, $sQuery) or die(mysqli_error());
						$n = 0;
                        $total2 = 0;
            			while($row = mysqli_fetch_array($sRes)) { ?>
						<tr>
                			<th><?php echo ++$n ?></th>
                			<th><?php echo($row['X']); ?></th>
                			<th><?php $pet = ($row['X']-($total/$count))**2;  echo($pet);  $total2 = $pet + $total2;
                           ?></th>

                			<?php echo '<th><a href="deleteX.php?id='$row['n']'"><button>Delete</button></a></th>'?>
                		</tr>

    				<?php } ?>
<tr>
                            <th>TOTAL:</th>
                            <th>

    <?php
                        require 'conect.php';
                        $sQuery = "SELECT * FROM total";
                        $sRes = mysqli_query($con, $sQuery) or die(mysqli_error());
                        $n = 0;
                        
                        while($row = mysqli_fetch_array($sRes)) { ?>
                        <tr>
                            <th></th>
                            <th><?php $total = $row['Suma']; echo ($total); ?></th>
                            <th><?php echo($total2);  ?></th>
                            <th></th>
                        </tr>
                    <?php } ?>


                            </th>
                        </tr>
			
		</table>
</body>
</html>
<!--9 lineas auto generadas-->