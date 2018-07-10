<?php
    
    $producto = array('nombre' => "iPhone7", 'precio' => 699.99, 'stock' => 300);
    $producto2 = array('iPad 3', 799, 500);
    $producto3 = ["iPhone 6", 599.99, 600];
    $productos = array(
    	array("nombre" => "iPhone 7", "precio" => 699.99, "stock" => 300),
    	array("nombre" => "iPad 3", "precio" => 799.99, 'stock' => 400),
    	array("nombre" => "Nexus 4", "precio" => 599.99, 'stock' => 500)
    );

?>
			<section id="page">
				<!-- PRODUCTOS DESTACADOS -->
<div class="shoes-grid">
	<div class="products">
		<h5 class="latest-product">PRODUCTOS DESTACADOS</h5>
	</div>
	<div class="product-left">
		<!-- Producto #1 -->
		<div class="col-sm-4 col-md-4 chain-grid">
			<a href="producto.html"><img class="img-responsive chain" src="images/productos/P001.jpg" alt=" " /></a>
			<div class="grid-chain-bottom">
				<h6><a href="producto.html"><?php echo $producto["nombre"] ?></a></h6>
				<div class="star-price">
					<div class="dolor-grid"> 
						<span class="actual">$<?php echo $producto["precio"] ?></span>
						<span><?php echo $producto["stock"] ?> Un.</span>
					</div>
					<a class="now-get get-cart" href="producto.html">VER MÁS</a> 
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<!-- Producto #2 -->
		<div class="col-sm-4 col-md-4 chain-grid">
			<a href="producto.html"><img class="img-responsive chain" src="images/productos/P002.jpg" alt=" " /></a>
			<div class="grid-chain-bottom">
				<h6><a href="producto.html"><?php echo $producto2[0] ?></a></h6>
				<div class="star-price">
					<div class="dolor-grid"> 
						<span class="actual">$<?php echo $producto2[1] ?></span>
						<span><?php echo $producto2[2] ?> Un.</span>
					</div>
					<a class="now-get get-cart" href="producto.html">VER MÁS</a> 
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<!-- Producto #3 -->
		<div class="col-sm-4 col-md-4 chain-grid grid-top-chain">
			<a href="producto.html"><img class="img-responsive chain" src="images/productos/P003.jpg" alt=" " /></a>
			<div class="grid-chain-bottom">
				<h6><a href="producto.html"><?php echo $productos[2]["nombre"] ?></a></h6>
				<div class="star-price">
					<div class="dolor-grid"> 
						<span class="actual">$<?php echo $productos[2]["precio"] ?></span>
						<span><?php echo $productos[2]["stock"] ?> Un.</span>
					</div>
					<a class="now-get get-cart" href="producto.html">VER MÁS</a> 
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="clearfix"> </div>
</div>
<!-- ULTIMOS PRODUCTOS -->
<div class="shoes-grid">
	<div class="products">
		<h5 class="latest-product">ULTIMOS PRODUCTOS</h5>	
		<a class="view-all" href="productos.html">VER TODOS<span></span></a>
	</div>
	<div class="product-left">
		<!-- Producto #1 -->
		<div class="col-sm-4 col-md-4 chain-grid">
			<a href="producto.html"><img class="img-responsive chain" src="images/productos/P004.jpg" alt=" " /></a>
			<span class="star"></span>
			<div class="grid-chain-bottom">
				<h6><a href="producto.html">Lorem ipsum dolor #1</a></h6>
				<div class="star-price">
					<div class="dolor-grid"> 
						<span class="actual">$300</span>
					</div>
					<a class="now-get get-cart" href="producto.html">VER MÁS</a> 
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<!-- Producto #2 -->
		<div class="col-sm-4 col-md-4 chain-grid">
			<a href="producto.html"><img class="img-responsive chain" src="images/productos/P005.jpg" alt=" " /></a>
			<span class="star"></span>
			<div class="grid-chain-bottom">
				<h6><a href="producto.html">Lorem ipsum dolor #2</a></h6>
				<div class="star-price">
					<div class="dolor-grid"> 
						<span class="actual">$300</span>
					</div>
					<a class="now-get get-cart" href="producto.html">VER MÁS</a> 
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<!-- Producto #3 -->
		<div class="col-sm-4 col-md-4 chain-grid grid-top-chain">
			<a href="producto.html"><img class="img-responsive chain" src="images/productos/P006.jpg" alt=" " /></a>
			<span class="star"></span>
			<div class="grid-chain-bottom">
				<h6><a href="producto.html">Lorem ipsum dolor #3</a></h6>
				<div class="star-price">
					<div class="dolor-grid"> 
						<span class="actual">$300</span>
					</div>
					<a class="now-get get-cart" href="producto.html">VER MÁS</a> 
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="clearfix"> </div>
</div>
			</section>

