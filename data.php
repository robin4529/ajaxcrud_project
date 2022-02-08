<?php

$connect =new mysqli('localhost','root','','ajax_class');


$data = $connect->query("SELECT * FROM users");

        while( $d = $data->fetch_object() ):
?>

<tr>
			<td>1</td>
			<td><?php echo $d->name; ?></td>
			<td><?php echo $d->email; ?></td>
			<td><?php echo $d->cell; ?></td>
			<td><img src="assets/media/img/pp_photo/istockphoto-615279718-612x612.jpg" alt=""></td>
			<td>
			<a class="btn btn-sm btn-info" href="#">View</a>
			<a class="btn btn-sm btn-warning" href="#">Edit</a>
			<a class="btn btn-sm btn-danger" href="#">Delete</a>
			</td>
						
			</tr>
            <?php
            endwhile;
            ?>