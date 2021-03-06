<?php 
require_once '../core/init.php';
$id = $_POST['id'];
$id = (int)$id;
$sql = "SELECT * FROM products WHERE id = '$id'";
$result = $db->query($sql);
$product = mysqli_fetch_assoc($result);
 ?>

<!-- details modal -->
<?php ob_start(); ?>
<div class="modal fade details-1" id="details-modal" tabindex="-1" role="dialog" aria-labelledby="details-1" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
		<div class="modal-header">
			<button class="close" type="button" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			<h4 class="modal-title text-center"><?= var_dump($id); ?></h4>
		</div>
		<div class="modal-body">
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-6">
						<div class="center-block">
							<img src="<?php echo $product['image']; ?>" class="details img-responsive" />
						</div>
					</div>
					<div class="col-sm-6">
						<h4>Details</h4>
						<p>These jeans ara amazing! They are straight leg, fit great and look sexy. Get a pair while they last!</p>
						<hr>
						<p>Price: Rp. 30.000</p>
						<p>Brand: Levis</p>
						<form action="add_cart.php" method="post">
							<div class="form-group">
								<div class="col-xs-3">
									<label for="quantity">Quantity:</label>
									<input type="text" class="form-control" id="quantity" name="quantity">
								</div>
								<p>Available: 3</p>
							</div>
							<div class="form-group">
								<label for="size">Size:</label>
								<select name="size" id="size" class="from-control">
									<option value=""></option>
									<option value="28">28</option>
									<option value="32">32</option>
									<option value="36">36</option>
								</select>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
			<div class="modal-footer">
				<button class="btn btn-default" data-dismiss="modal">Close</button>
				<button class="btn btn-warning" type="submit"><span class="glyphicon glyphicon-shopping-cart"></span>Add to Cart</button>
			</div>
		</div>
	</div>
</div>
<?php echo ob_get_clean(); ?>
