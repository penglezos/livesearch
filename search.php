<?php
	require_once("connection.php");
	
	$key = $_GET["key"];
	$query = "SELECT * FROM products WHERE products_name LIKE '%$key%' LIMIT 5";
	$res = mysqli_query($connection, $query);
	
	while($rec = mysqli_fetch_assoc($res)) { ?>
	
		<a href="product.php?id=<?=$rec["products_id"]?>">
			<li class='list-group-item d-flex justify-content-between align-items-center'>
			
				<img class="livesearch-image" src="https://i.picsum.photos/id/<?=$rec["products_id"]?>/200/200.jpg"/>
				
				<span>
					<?=preg_replace("/($key)/i", "<b class='match'>$1</b>", $rec["products_name"])?>
				</span>
				
				<span class="badge badge-primary badge-pill">
					<?=$rec["products_price"]?>&euro;
				</span>
			</li>
		</a>
	<?php } ?>